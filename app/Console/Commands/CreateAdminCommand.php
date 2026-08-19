<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'snipezon:create-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Securely create a new administrator account with Super Admin or Admin role.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('--- Snipezon Secure Administrator Setup ---');

        $name = trim($this->ask('Administrator Name'));

        $email = trim($this->ask('Administrator Email'));

        $password = $this->secret('Password');
        $passwordConfirmation = $this->secret('Confirm Password');

        $validator = Validator::make([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $passwordConfirmation,
        ], [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'same:password_confirmation'],
        ], [
            'email.unique' => 'An account with this email address already exists.',
            'password.same' => 'The password confirmation does not match.',
            'password.min' => 'Password must be at least 8 characters long.',
        ]);

        if ($validator->fails()) {
            $this->newLine();
            foreach ($validator->errors()->all() as $error) {
                $this->error(' - ' . $error);
            }
            return self::FAILURE;
        }

        $roleChoice = $this->choice('Select Administrator Role', ['Super Admin', 'Admin'], 0);
        $roleSlug = $roleChoice === 'Super Admin' ? 'super-admin' : 'admin';

        $role = Role::where('slug', $roleSlug)->first();

        if (! $role) {
            $this->error("Role [{$roleChoice}] does not exist in the database. Please run 'php artisan db:seed --class=RoleSeeder' first.");
            return self::FAILURE;
        }

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'is_active' => true,
        ]);

        $user->assignRole($role);

        $this->newLine();
        $this->info('✓ Administrator account created successfully!');
        $this->table(
            ['Attribute', 'Value'],
            [
                ['ID', $user->id],
                ['Name', $user->name],
                ['Email', $user->email],
                ['Role', $role->name],
                ['Status', 'Active'],
            ]
        );

        return self::SUCCESS;
    }
}
