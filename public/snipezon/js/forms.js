/**
 * Snipezon - Shared Form Validation, Accessible Tab Navigation & WhatsApp Confirmation Architecture
 * Handles General Supply Quote Form, Portfolio Project Form, Contact Digital Form, and Contact Supply Form.
 * Includes tabbed enquiry navigation, requirement path pre-selection, international phone checks,
 * file upload limits, safe filename sanitization, error summary focus management, and hardened accessible modal dialogs.
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  const MAX_FILE_SIZE = 10 * 1024 * 1024; // 10MB Limit
  const ALLOWED_EXTENSIONS = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'csv', 'jpg', 'jpeg', 'png'];

  // Shared Helper: Safe Filename Sanitizer
  function getSafeFilename(filename) {
    if (!filename) return '';
    const basename = filename.split(/[\\/]/).pop();
    return basename.replace(/[^\w\.\-]/g, '_');
  }

  // Shared Helper: International Phone Validation (7-15 digits after stripping non-digits)
  function isValidPhone(phoneStr) {
    const digitsOnly = phoneStr.replace(/[^\d]/g, '');
    return digitsOnly.length >= 7 && digitsOnly.length <= 15;
  }

  function escapeHtml(str) {
    if (!str) return '';
    return str.replace(/[&<>"']/g, m => ({
      '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;'
    }[m]));
  }

  // ==========================================================================
  // HARDENED SHARED MODAL CONFIRMATION CONTROLLER
  // ==========================================================================
  const confirmModal = document.getElementById('quote-confirm-modal');

  function openAccessibleModal(titleText, summaryHtml, fileNoticeText, onContinue, onReview) {
    if (!confirmModal) return;

    const modalTitle = document.getElementById('modal-title');
    const summaryContainer = document.getElementById('modal-summary-content');
    const fileNoticeContainer = document.getElementById('modal-file-notice');
    const btnContinue = document.getElementById('modal-btn-continue');
    const btnReview = document.getElementById('modal-btn-review');

    if (modalTitle) modalTitle.textContent = titleText;
    if (summaryContainer) summaryContainer.innerHTML = summaryHtml;

    if (fileNoticeContainer) {
      if (fileNoticeText) {
        fileNoticeContainer.innerHTML = `
          <div style="background: rgba(34, 211, 238, 0.1); border:1px solid var(--color-cyan); padding:10px; border-radius:6px; font-size:0.85rem; color:var(--color-text-secondary); margin-top:12px;">
            <strong>Requirement File Selected:</strong> ${escapeHtml(fileNoticeText)}<br>
            <em>Note: Your selected file cannot be transferred automatically. Please attach it manually in WhatsApp.</em>
          </div>
        `;
      } else {
        fileNoticeContainer.innerHTML = '';
      }
    }

    const previouslyFocusedEl = document.activeElement;

    document.body.style.overflow = 'hidden';
    confirmModal.classList.add('is-active');
    confirmModal.setAttribute('aria-hidden', 'false');

    setTimeout(() => {
      if (btnContinue) btnContinue.focus();
    }, 30);

    const focusableElements = confirmModal.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
    const firstFocusable = focusableElements[0];
    const lastFocusable = focusableElements[focusableElements.length - 1];

    const handleKeyDown = (e) => {
      if (e.key === 'Escape') {
        e.preventDefault();
        closeModal();
        if (onReview) onReview();
        return;
      }

      if (e.key === 'Tab') {
        if (e.shiftKey) {
          if (document.activeElement === firstFocusable) {
            e.preventDefault();
            lastFocusable.focus();
          }
        } else {
          if (document.activeElement === lastFocusable) {
            e.preventDefault();
            firstFocusable.focus();
          }
        }
      }
    };

    document.addEventListener('keydown', handleKeyDown);

    const closeModal = () => {
      document.body.style.overflow = '';
      confirmModal.classList.remove('is-active');
      confirmModal.setAttribute('aria-hidden', 'true');
      document.removeEventListener('keydown', handleKeyDown);
      btnContinue.removeEventListener('click', handleContinueClick);
      btnReview.removeEventListener('click', handleReviewClick);

      if (previouslyFocusedEl && typeof previouslyFocusedEl.focus === 'function') {
        previouslyFocusedEl.focus();
      }
    };

    const handleContinueClick = () => {
      closeModal();
      if (onContinue) onContinue();
    };

    const handleReviewClick = () => {
      closeModal();
      if (onReview) onReview();
    };

    btnContinue.onclick = handleContinueClick;
    btnReview.onclick = handleReviewClick;
  }

  // ==========================================================================
  // TABBED ENQUIRY CONTROLLER (CONTACT PAGE)
  // ==========================================================================
  const tabList = document.querySelector('[role="tablist"]');
  if (tabList) {
    const tabs = Array.from(tabList.querySelectorAll('[role="tab"]'));
    const panels = Array.from(document.querySelectorAll('[role="tabpanel"]'));

    function activateTab(targetTab) {
      tabs.forEach(t => {
        t.setAttribute('aria-selected', 'false');
        t.classList.remove('active');
        t.setAttribute('tabindex', '-1');
      });

      targetTab.setAttribute('aria-selected', 'true');
      targetTab.classList.add('active');
      targetTab.removeAttribute('tabindex');

      const targetPanelId = targetTab.getAttribute('aria-controls');
      panels.forEach(p => {
        if (p.id === targetPanelId) {
          p.hidden = false;
          p.style.display = 'block';
        } else {
          p.hidden = true;
          p.style.display = 'none';
        }
      });
    }

    tabs.forEach((tab, index) => {
      tab.addEventListener('click', () => activateTab(tab));

      tab.addEventListener('keydown', (e) => {
        let newIndex = index;
        if (e.key === 'ArrowRight') {
          newIndex = (index + 1) % tabs.length;
        } else if (e.key === 'ArrowLeft') {
          newIndex = (index - 1 + tabs.length) % tabs.length;
        } else if (e.key === 'Home') {
          newIndex = 0;
        } else if (e.key === 'End') {
          newIndex = tabs.length - 1;
        } else {
          return;
        }

        e.preventDefault();
        activateTab(tabs[newIndex]);
        tabs[newIndex].focus();
      });
    });

    // Requirement Path Navigation Buttons
    const pathCards = document.querySelectorAll('.requirement-path-card');
    pathCards.forEach(card => {
      card.addEventListener('click', (e) => {
        e.preventDefault();
        const targetTabId = card.getAttribute('data-target-tab');
        const preselectVal = card.getAttribute('data-preselect');
        const scrollTargetId = card.getAttribute('data-scroll-target') || 'contact-enquiry';

        const targetTab = document.getElementById(targetTabId);
        if (targetTab) {
          activateTab(targetTab);
        }

        if (preselectVal) {
          const targetSelect = (targetTabId === 'tab-supply')
            ? document.getElementById('contact-supply-cat')
            : document.getElementById('contact-digital-service');
          if (targetSelect) targetSelect.value = preselectVal;
        }

        const scrollEl = document.getElementById(scrollTargetId);
        if (scrollEl) {
          scrollEl.scrollIntoView({ behavior: 'smooth' });
          const focusInput = document.getElementById('contact-digital-service') || document.getElementById('contact-supply-cat') || document.getElementById('contact-digital-name');
          if (focusInput) focusInput.focus();
        }
      });
    });
  }

  // ==========================================================================
  // SHARED FILE INPUT HANDLER REGISTRATION
  // ==========================================================================
  function setupFileInput(inputId, noticeId) {
    const input = document.getElementById(inputId);
    const notice = document.getElementById(noticeId);
    if (!input) return;

    input.addEventListener('change', () => {
      const file = input.files[0];
      if (file) {
        const ext = file.name.split('.').pop().toLowerCase();
        if (!ALLOWED_EXTENSIONS.includes(ext)) {
          showError(input, `Invalid file format. Allowed: ${ALLOWED_EXTENSIONS.join(', ')}`);
          input.value = '';
          if (notice) notice.textContent = '';
          return;
        }
        if (file.size > MAX_FILE_SIZE) {
          showError(input, 'File size exceeds the 10MB limit.');
          input.value = '';
          if (notice) notice.textContent = '';
          return;
        }
        clearError(input);
        const safeName = getSafeFilename(file.name);
        if (notice) {
          notice.textContent = `Selected file: ${safeName} (${(file.size / 1024 / 1024).toFixed(2)}MB)`;
        }
      }
    });
  }

  setupFileInput('quote-file', 'file-upload-notice');
  setupFileInput('project-file', 'project-file-notice');
  setupFileInput('contact-digital-file', 'contact-digital-file-notice');
  setupFileInput('contact-supply-file', 'contact-supply-file-notice');

  // ==========================================================================
  // 1. GENERAL SUPPLY QUOTE FORM (GENERAL-SUPPLY.HTML)
  // ==========================================================================
  const quoteForm = document.getElementById('supply-quote-form');
  if (quoteForm) {
    quoteForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const errorSummaryBox = document.getElementById('quote-error-summary');
      const submitBtn = quoteForm.querySelector('button[type="submit"]');

      if (validateForm(quoteForm, errorSummaryBox).length > 0) return;

      setSubmitLoading(submitBtn, 'Preparing WhatsApp...');

      const name = document.getElementById('quote-name').value.trim();
      const company = document.getElementById('quote-company')?.value.trim() || 'N/A';
      const phone = document.getElementById('quote-phone').value.trim();
      const email = document.getElementById('quote-email').value.trim();
      const categorySelect = document.getElementById('quote-category');
      const category = categorySelect?.options[categorySelect.selectedIndex]?.text || 'General Supply';
      const items = document.getElementById('quote-items').value.trim();
      const quantity = document.getElementById('quote-quantity')?.value.trim() || 'As specified';
      const reqDate = document.getElementById('quote-date')?.value.trim() || 'Flexible';
      const location = document.getElementById('quote-location').value.trim();
      const contactMethod = quoteForm.querySelector('input[name="preferred-contact"]:checked')?.value || 'WhatsApp';

      const fileInput = document.getElementById('quote-file');
      const safeFileName = fileInput && fileInput.files.length > 0 ? getSafeFilename(fileInput.files[0].name) : null;

      const summaryHtml = `
        <p><strong>Name:</strong> ${escapeHtml(name)}</p>
        <p><strong>Company:</strong> ${escapeHtml(company)}</p>
        <p><strong>Category:</strong> ${escapeHtml(category)}</p>
        <p><strong>Required Items:</strong> ${escapeHtml(items)}</p>
        <p><strong>Quantity:</strong> ${escapeHtml(quantity)}</p>
        <p><strong>Delivery Location:</strong> ${escapeHtml(location)}</p>
        <p><strong>Preferred Contact:</strong> ${escapeHtml(contactMethod)}</p>
      `;

      openAccessibleModal(
        'Confirm Supply Request Summary',
        summaryHtml,
        safeFileName,
        () => {
          let msg = `*NEW SUPPLY QUOTE REQUEST - SNIPEZON*\n\n*Name:* ${name}\n*Company:* ${company}\n*Phone:* ${phone}\n*Email:* ${email}\n*Category:* ${category}\n*Quantity:* ${quantity}\n*Required Date:* ${reqDate}\n*Delivery Location:* ${location}\n*Preferred Contact:* ${contactMethod}\n\n*Required Items & Specifications:*\n${items}`;
          if (safeFileName) msg += `\n\nRequirement file selected: [${safeFileName}] — please attach manually.`;

          window.open(`https://wa.me/923122261919?text=${encodeURIComponent(msg)}`, '_blank', 'noopener,noreferrer');
          resetSubmitBtn(submitBtn, 'Prepare Supply Request');
        },
        () => { resetSubmitBtn(submitBtn, 'Prepare Supply Request'); if (submitBtn) submitBtn.focus(); }
      );
    });
  }

  // ==========================================================================
  // 2. PORTFOLIO PROJECT FORM (PORTFOLIO.HTML)
  // ==========================================================================
  const projectForm = document.getElementById('project-enquiry-form');
  if (projectForm) {
    projectForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const errorSummaryBox = document.getElementById('project-error-summary');
      const submitBtn = projectForm.querySelector('button[type="submit"]');

      if (validateForm(projectForm, errorSummaryBox).length > 0) return;

      setSubmitLoading(submitBtn, 'Preparing WhatsApp...');

      const name = document.getElementById('project-name').value.trim();
      const company = document.getElementById('project-company')?.value.trim() || 'N/A';
      const email = document.getElementById('project-email').value.trim();
      const phone = document.getElementById('project-phone').value.trim();
      const sel = document.getElementById('project-type');
      const projectType = sel?.options[sel.selectedIndex]?.text || 'Custom Solution';
      const details = document.getElementById('project-details').value.trim();
      const contactMethod = projectForm.querySelector('input[name="preferred-contact"]:checked')?.value || 'WhatsApp';

      const fileInput = document.getElementById('project-file');
      const safeFileName = fileInput && fileInput.files.length > 0 ? getSafeFilename(fileInput.files[0].name) : null;

      const summaryHtml = `
        <p><strong>Name:</strong> ${escapeHtml(name)}</p>
        <p><strong>Company:</strong> ${escapeHtml(company)}</p>
        <p><strong>Project Type:</strong> ${escapeHtml(projectType)}</p>
        <p><strong>Project Details:</strong> ${escapeHtml(details)}</p>
        <p><strong>Preferred Contact:</strong> ${escapeHtml(contactMethod)}</p>
      `;

      openAccessibleModal(
        'Confirm Project Enquiry Summary',
        summaryHtml,
        safeFileName,
        () => {
          let msg = `*NEW DIGITAL PROJECT ENQUIRY - SNIPEZON*\n\n*Name:* ${name}\n*Company:* ${company}\n*Phone:* ${phone}\n*Email:* ${email}\n*Project Type:* ${projectType}\n*Preferred Contact:* ${contactMethod}\n\n*Project Overview:*\n${details}`;
          if (safeFileName) msg += `\n\nProject brief file selected: [${safeFileName}] — please attach manually.`;

          window.open(`https://wa.me/923122261919?text=${encodeURIComponent(msg)}`, '_blank', 'noopener,noreferrer');
          resetSubmitBtn(submitBtn, 'Prepare Project Request');
        },
        () => { resetSubmitBtn(submitBtn, 'Prepare Project Request'); if (submitBtn) submitBtn.focus(); }
      );
    });
  }

  // ==========================================================================
  // 3. CONTACT DIGITAL PROJECT FORM (CONTACT.HTML)
  // ==========================================================================
  const contactDigitalForm = document.getElementById('contact-digital-form');
  if (contactDigitalForm) {
    contactDigitalForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const errorSummaryBox = document.getElementById('contact-digital-error-summary');
      const submitBtn = contactDigitalForm.querySelector('button[type="submit"]');

      if (validateForm(contactDigitalForm, errorSummaryBox).length > 0) return;

      setSubmitLoading(submitBtn, 'Preparing WhatsApp...');

      const name = document.getElementById('contact-digital-name').value.trim();
      const company = document.getElementById('contact-digital-company')?.value.trim() || 'N/A';
      const phone = document.getElementById('contact-digital-phone').value.trim();
      const email = document.getElementById('contact-digital-email').value.trim();
      const selService = document.getElementById('contact-digital-service');
      const service = selService?.options[selService.selectedIndex]?.text || 'Custom Digital Solution';
      const selStage = document.getElementById('contact-digital-stage');
      const stage = selStage?.options[selStage.selectedIndex]?.text || 'Not Specified';
      const summary = document.getElementById('contact-digital-summary').value.trim();
      const reqs = document.getElementById('contact-digital-reqs')?.value.trim() || 'N/A';
      const contactMethod = contactDigitalForm.querySelector('input[name="preferred-contact"]:checked')?.value || 'WhatsApp';

      const fileInput = document.getElementById('contact-digital-file');
      const safeFileName = fileInput && fileInput.files.length > 0 ? getSafeFilename(fileInput.files[0].name) : null;

      const summaryHtml = `
        <p><strong>Name:</strong> ${escapeHtml(name)}</p>
        <p><strong>Company:</strong> ${escapeHtml(company)}</p>
        <p><strong>Service Required:</strong> ${escapeHtml(service)}</p>
        <p><strong>Project Stage:</strong> ${escapeHtml(stage)}</p>
        <p><strong>Project Summary:</strong> ${escapeHtml(summary)}</p>
        <p><strong>Preferred Contact:</strong> ${escapeHtml(contactMethod)}</p>
      `;

      openAccessibleModal(
        'Confirm Digital Project Enquiry Summary',
        summaryHtml,
        safeFileName,
        () => {
          let msg = `*NEW DIGITAL PROJECT ENQUIRY - SNIPEZON*\n\n*Name:* ${name}\n*Company:* ${company}\n*Phone:* ${phone}\n*Email:* ${email}\n*Service Required:* ${service}\n*Project Stage:* ${stage}\n*Preferred Contact:* ${contactMethod}\n\n*Project Summary:*\n${summary}`;
          if (reqs !== 'N/A') msg += `\n\n*Key Requirements / Goals:*\n${reqs}`;
          if (safeFileName) msg += `\n\nProject brief file selected: [${safeFileName}] — please attach manually.`;

          window.open(`https://wa.me/923122261919?text=${encodeURIComponent(msg)}`, '_blank', 'noopener,noreferrer');
          resetSubmitBtn(submitBtn, 'Prepare Project Enquiry');
        },
        () => { resetSubmitBtn(submitBtn, 'Prepare Project Enquiry'); if (submitBtn) submitBtn.focus(); }
      );
    });
  }

  // ==========================================================================
  // 4. CONTACT GENERAL SUPPLY FORM (CONTACT.HTML)
  // ==========================================================================
  const contactSupplyForm = document.getElementById('contact-supply-form');
  if (contactSupplyForm) {
    contactSupplyForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const errorSummaryBox = document.getElementById('contact-supply-error-summary');
      const submitBtn = contactSupplyForm.querySelector('button[type="submit"]');

      if (validateForm(contactSupplyForm, errorSummaryBox).length > 0) return;

      setSubmitLoading(submitBtn, 'Preparing WhatsApp...');

      const name = document.getElementById('contact-supply-name').value.trim();
      const company = document.getElementById('contact-supply-company')?.value.trim() || 'N/A';
      const phone = document.getElementById('contact-supply-phone').value.trim();
      const email = document.getElementById('contact-supply-email').value.trim();
      const selCat = document.getElementById('contact-supply-cat');
      const category = selCat?.options[selCat.selectedIndex]?.text || 'General Supply';
      const items = document.getElementById('contact-supply-items').value.trim();
      const quantity = document.getElementById('contact-supply-qty')?.value.trim() || 'As specified';
      const reqDate = document.getElementById('contact-supply-date')?.value.trim() || 'Flexible';
      const location = document.getElementById('contact-supply-loc').value.trim();
      const contactMethod = contactSupplyForm.querySelector('input[name="preferred-contact"]:checked')?.value || 'WhatsApp';

      const fileInput = document.getElementById('contact-supply-file');
      const safeFileName = fileInput && fileInput.files.length > 0 ? getSafeFilename(fileInput.files[0].name) : null;

      const summaryHtml = `
        <p><strong>Name:</strong> ${escapeHtml(name)}</p>
        <p><strong>Company:</strong> ${escapeHtml(company)}</p>
        <p><strong>Supply Category:</strong> ${escapeHtml(category)}</p>
        <p><strong>Required Items:</strong> ${escapeHtml(items)}</p>
        <p><strong>Quantity:</strong> ${escapeHtml(quantity)}</p>
        <p><strong>Delivery Location:</strong> ${escapeHtml(location)}</p>
        <p><strong>Preferred Contact:</strong> ${escapeHtml(contactMethod)}</p>
      `;

      openAccessibleModal(
        'Confirm General Supply Requirement Summary',
        summaryHtml,
        safeFileName,
        () => {
          let msg = `*NEW GENERAL SUPPLY REQUIREMENT - SNIPEZON*\n\n*Name:* ${name}\n*Company:* ${company}\n*Phone:* ${phone}\n*Email:* ${email}\n*Category:* ${category}\n*Quantity:* ${quantity}\n*Required Date:* ${reqDate}\n*Delivery Location:* ${location}\n*Preferred Contact:* ${contactMethod}\n\n*Required Items & Specifications:*\n${items}`;
          if (safeFileName) msg += `\n\nRequirement list file selected: [${safeFileName}] — please attach manually.`;

          window.open(`https://wa.me/923122261919?text=${encodeURIComponent(msg)}`, '_blank', 'noopener,noreferrer');
          resetSubmitBtn(submitBtn, 'Prepare Supply Request');
        },
        () => { resetSubmitBtn(submitBtn, 'Prepare Supply Request'); if (submitBtn) submitBtn.focus(); }
      );
    });
  }

  // ==========================================================================
  // SHARED FORM VALIDATOR & BUTTON HELPERS
  // ==========================================================================
  function validateForm(formEl, errorSummaryBox) {
    const invalidFields = [];
    let firstInvalidField = null;

    if (errorSummaryBox) {
      errorSummaryBox.style.display = 'none';
      errorSummaryBox.innerHTML = '';
    }

    const requiredInputs = formEl.querySelectorAll('[required]');
    requiredInputs.forEach(input => {
      const labelText = getLabelText(formEl, input);

      if (input.type === 'checkbox') {
        if (!input.checked) {
          showError(input, 'You must agree to be contacted regarding this request.');
          invalidFields.push({ input, label: labelText });
          if (!firstInvalidField) firstInvalidField = input;
        } else {
          clearError(input);
        }
      } else if (!input.value.trim()) {
        showError(input, 'This field is required.');
        invalidFields.push({ input, label: labelText });
        if (!firstInvalidField) firstInvalidField = input;
      } else {
        clearError(input);
      }
    });

    const phoneInput = formEl.querySelector('input[type="tel"]');
    if (phoneInput && phoneInput.value.trim()) {
      if (!isValidPhone(phoneInput.value.trim())) {
        showError(phoneInput, 'Please enter a valid phone number (7 to 15 digits).');
        if (!invalidFields.some(f => f.input === phoneInput)) {
          invalidFields.push({ input: phoneInput, label: getLabelText(formEl, phoneInput) });
        }
        if (!firstInvalidField) firstInvalidField = phoneInput;
      }
    }

    const emailInput = formEl.querySelector('input[type="email"]');
    if (emailInput && emailInput.value.trim()) {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(emailInput.value.trim())) {
        showError(emailInput, 'Please enter a valid email address.');
        if (!invalidFields.some(f => f.input === emailInput)) {
          invalidFields.push({ input: emailInput, label: getLabelText(formEl, emailInput) });
        }
        if (!firstInvalidField) firstInvalidField = emailInput;
      }
    }

    if (invalidFields.length > 0) {
      if (errorSummaryBox) {
        let summaryHtml = `<h4 style="color:#ef4444; margin-bottom:8px; font-size:1rem;">Please fix the following ${invalidFields.length} error(s):</h4><ul style="margin:0; padding-left:20px; color:#ef4444; font-size:0.875rem;">`;
        invalidFields.forEach(item => {
          summaryHtml += `<li><a href="#${item.input.id}" class="error-summary-link" style="color:#ef4444; text-decoration:underline;">${item.label}</a></li>`;
        });
        summaryHtml += `</ul>`;
        errorSummaryBox.innerHTML = summaryHtml;
        errorSummaryBox.style.display = 'block';

        errorSummaryBox.querySelectorAll('.error-summary-link').forEach(link => {
          link.addEventListener('click', (ev) => {
            ev.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetEl = document.getElementById(targetId);
            if (targetEl) targetEl.focus();
          });
        });

        errorSummaryBox.focus();
      } else if (firstInvalidField) {
        firstInvalidField.focus();
      }
    }

    return invalidFields;
  }

  function setSubmitLoading(btn, text) {
    if (btn) {
      btn.disabled = true;
      btn.setAttribute('aria-disabled', 'true');
      btn.innerHTML = `<span>${text}</span>`;
    }
  }

  function resetSubmitBtn(btn, text) {
    if (btn) {
      btn.disabled = false;
      btn.removeAttribute('aria-disabled');
      btn.innerHTML = `
        <span>${text}</span>
        <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      `;
    }
  }

  function getLabelText(formEl, input) {
    const label = formEl.querySelector(`label[for="${input.id}"]`);
    return label ? label.textContent.replace('*', '').trim() : input.name;
  }

  function showError(input, message) {
    input.setAttribute('aria-invalid', 'true');
    const formGroup = input.closest('.form-group') || input.parentElement;
    let errorEl = formGroup.querySelector('.form-error-msg');
    const errorId = 'error-' + input.id;
    if (!errorEl) {
      errorEl = document.createElement('span');
      errorEl.id = errorId;
      errorEl.className = 'form-error-msg';
      errorEl.style.color = '#ef4444';
      errorEl.style.fontSize = '0.8rem';
      errorEl.style.marginTop = '4px';
      errorEl.style.display = 'block';
      formGroup.appendChild(errorEl);
    }
    errorEl.textContent = message;
    input.setAttribute('aria-describedby', errorId);
  }

  function clearError(input) {
    input.removeAttribute('aria-invalid');
    input.removeAttribute('aria-describedby');
    const formGroup = input.closest('.form-group') || input.parentElement;
    const errorEl = formGroup.querySelector('.form-error-msg');
    if (errorEl) {
      errorEl.remove();
    }
  }
});
