<?php

namespace Tests\Feature;

use App\Models\Role;
use App\Models\User;
use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminFoundationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(RoleSeeder::class);
    }

    public function test_homepage_responds_successfully(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_login_page_loads(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_public_registration_remains_unavailable(): void
    {
        $this->get('/register')->assertStatus(404);
        $this->post('/register', [
            'name' => 'Unauthorized User',
            'email' => 'unauthorized@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ])->assertStatus(404);
    }

    public function test_guest_cannot_access_admin(): void
    {
        $this->get('/admin')->assertRedirect('/login');
        $this->get('/admin/dashboard')->assertRedirect('/login');
    }

    public function test_user_without_role_receives_403(): void
    {
        $user = User::factory()->create(['is_active' => true]);

        $response = $this->actingAs($user)->get('/admin/dashboard');

        $response->assertStatus(403);
    }

    public function test_admin_can_access_dashboard(): void
    {
        $adminRole = Role::where('slug', 'admin')->first();
        $admin = User::factory()->create(['is_active' => true]);
        $admin->assignRole($adminRole);

        $response = $this->actingAs($admin)->get('/admin/dashboard');

        $response->assertStatus(200);
        $response->assertSee('Welcome back');
    }

    public function test_super_admin_can_access_dashboard(): void
    {
        $superAdminRole = Role::where('slug', 'super-admin')->first();
        $superAdmin = User::factory()->create(['is_active' => true]);
        $superAdmin->assignRole($superAdminRole);

        $response = $this->actingAs($superAdmin)->get('/admin/dashboard');

        $response->assertStatus(200);
        $response->assertSee('Welcome back');
    }

    public function test_inactive_user_cannot_access_dashboard(): void
    {
        $adminRole = Role::where('slug', 'admin')->first();
        $inactiveAdmin = User::factory()->create(['is_active' => false]);
        $inactiveAdmin->assignRole($adminRole);

        $response = $this->actingAs($inactiveAdmin)->get('/admin/dashboard');

        $response->assertRedirect('/login');
        $this->assertGuest();
    }

    public function test_role_assignment_cannot_be_duplicated(): void
    {
        $user = User::factory()->create();
        $role = Role::where('slug', 'admin')->first();

        $user->assignRole($role);
        $user->assignRole($role);
        $user->assignRole('admin');

        $this->assertEquals(1, $user->roles()->count());
    }

    public function test_password_is_hashed(): void
    {
        $user = User::factory()->create([
            'password' => 'secret-pass-123',
        ]);

        $this->assertNotEquals('secret-pass-123', $user->password);
        $this->assertTrue(Hash::check('secret-pass-123', $user->password));
    }

    public function test_role_seeder_is_idempotent(): void
    {
        $seeder = new RoleSeeder();
        $seeder->run();
        $seeder->run();

        $this->assertEquals(2, Role::count());
    }

    public function test_admin_creation_command_validates_duplicate_email(): void
    {
        User::factory()->create([
            'email' => 'existingadmin@example.com',
        ]);

        $this->artisan('snipezon:create-admin')
            ->expectsQuestion('Administrator Name', 'New Admin')
            ->expectsQuestion('Administrator Email', 'existingadmin@example.com')
            ->expectsQuestion('Password', 'StrongPass#2026')
            ->expectsQuestion('Confirm Password', 'StrongPass#2026')
            ->assertExitCode(1);
    }

    public function test_admin_creation_rejects_short_password(): void
    {
        $this->artisan('snipezon:create-admin')
            ->expectsQuestion('Administrator Name', 'Short Pass Admin')
            ->expectsQuestion('Administrator Email', 'shortpass@example.com')
            ->expectsQuestion('Password', 'Short1!')
            ->expectsQuestion('Confirm Password', 'Short1!')
            ->assertExitCode(1);

        $this->assertDatabaseMissing('users', ['email' => 'shortpass@example.com']);
    }

    public function test_admin_creation_rejects_missing_uppercase(): void
    {
        $this->artisan('snipezon:create-admin')
            ->expectsQuestion('Administrator Name', 'No Upper Admin')
            ->expectsQuestion('Administrator Email', 'noupper@example.com')
            ->expectsQuestion('Password', 'nouppercase123!')
            ->expectsQuestion('Confirm Password', 'nouppercase123!')
            ->assertExitCode(1);

        $this->assertDatabaseMissing('users', ['email' => 'noupper@example.com']);
    }

    public function test_admin_creation_rejects_missing_lowercase(): void
    {
        $this->artisan('snipezon:create-admin')
            ->expectsQuestion('Administrator Name', 'No Lower Admin')
            ->expectsQuestion('Administrator Email', 'nolower@example.com')
            ->expectsQuestion('Password', 'NOLOWERCASE123!')
            ->expectsQuestion('Confirm Password', 'NOLOWERCASE123!')
            ->assertExitCode(1);

        $this->assertDatabaseMissing('users', ['email' => 'nolower@example.com']);
    }

    public function test_admin_creation_rejects_missing_number(): void
    {
        $this->artisan('snipezon:create-admin')
            ->expectsQuestion('Administrator Name', 'No Number Admin')
            ->expectsQuestion('Administrator Email', 'nonumber@example.com')
            ->expectsQuestion('Password', 'NoNumbersHere!')
            ->expectsQuestion('Confirm Password', 'NoNumbersHere!')
            ->assertExitCode(1);

        $this->assertDatabaseMissing('users', ['email' => 'nonumber@example.com']);
    }

    public function test_admin_creation_rejects_missing_symbol(): void
    {
        $this->artisan('snipezon:create-admin')
            ->expectsQuestion('Administrator Name', 'No Symbol Admin')
            ->expectsQuestion('Administrator Email', 'nosymbol@example.com')
            ->expectsQuestion('Password', 'NoSymbolsHere123')
            ->expectsQuestion('Confirm Password', 'NoSymbolsHere123')
            ->assertExitCode(1);

        $this->assertDatabaseMissing('users', ['email' => 'nosymbol@example.com']);
    }

    public function test_admin_creation_rejects_confirmation_mismatch(): void
    {
        $this->artisan('snipezon:create-admin')
            ->expectsQuestion('Administrator Name', 'Mismatch Admin')
            ->expectsQuestion('Administrator Email', 'mismatch@example.com')
            ->expectsQuestion('Password', 'StrongPass#2026')
            ->expectsQuestion('Confirm Password', 'DifferentPass#2026')
            ->assertExitCode(1);

        $this->assertDatabaseMissing('users', ['email' => 'mismatch@example.com']);
    }

    public function test_admin_creation_accepts_valid_strong_password(): void
    {
        $this->artisan('snipezon:create-admin')
            ->expectsQuestion('Administrator Name', 'Valid Super Admin')
            ->expectsQuestion('Administrator Email', 'superadmin@example.com')
            ->expectsQuestion('Password', 'StrongPass#2026')
            ->expectsQuestion('Confirm Password', 'StrongPass#2026')
            ->expectsChoice('Select Administrator Role', 'Super Admin', ['Super Admin', 'Admin'])
            ->assertExitCode(0);

        $this->assertDatabaseHas('users', ['email' => 'superadmin@example.com']);

        $user = User::where('email', 'superadmin@example.com')->first();
        $this->assertTrue($user->isSuperAdmin());
    }

    public function test_env_remains_untracked(): void
    {
        $gitignore = file_get_contents(base_path('.gitignore'));
        $this->assertStringContainsString('.env', $gitignore);
    }
}
