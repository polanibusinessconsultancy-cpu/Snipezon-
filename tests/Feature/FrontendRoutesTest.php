<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FrontendRoutesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test all main static converted pages return 200 OK.
     */
    public function test_main_frontend_pages_load_successfully(): void
    {
        $pages = [
            '/',
            '/about',
            '/digital-solutions',
            '/general-supply',
            '/portfolio',
            '/contact',
            '/privacy-policy',
            '/terms-conditions',
        ];

        foreach ($pages as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $response->assertSee('Snipezon');
        }
    }

    /**
     * Test all 9 digital solution service pages load successfully.
     */
    public function test_all_service_pages_load_successfully(): void
    {
        $services = [
            '/digital-solutions/custom-software-development',
            '/digital-solutions/ai-software-solutions',
            '/digital-solutions/whatsapp-business-api',
            '/digital-solutions/customer-care-automation',
            '/digital-solutions/sales-bots',
            '/digital-solutions/ai-chatbot-solutions',
            '/digital-solutions/accounting-software',
            '/digital-solutions/ecommerce-websites',
            '/digital-solutions/static-dynamic-websites',
        ];

        foreach ($services as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $response->assertSee('Snipezon');
        }
    }

    /**
     * Test legacy /services/{slug} redirects to /digital-solutions/{slug}.
     */
    public function test_legacy_service_urls_redirect(): void
    {
        $response = $this->get('/services/ai-software-solutions');
        $response->assertRedirect('/digital-solutions/ai-software-solutions');
    }

    /**
     * Test 404 page for unknown route.
     */
    public function test_unknown_route_returns_404(): void
    {
        $response = $this->get('/non-existent-page-xyz');
        $response->assertStatus(404);
    }
}
