<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean',
        ];
    }

    /**
     * The roles that belong to the user.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    /**
     * Check if the user has a specific role by slug or model.
     */
    public function hasRole(string|Role $role): bool
    {
        $slug = $role instanceof Role ? $role->slug : $role;
        return $this->roles->contains('slug', $slug);
    }

    /**
     * Check if the user has any of the given roles by slug.
     */
    public function hasAnyRole(array $roles): bool
    {
        return $this->roles->pluck('slug')->intersect($roles)->isNotEmpty();
    }

    /**
     * Check if the user is an Admin.
     */
    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    /**
     * Check if the user is a Super Admin.
     */
    public function isSuperAdmin(): bool
    {
        return $this->hasRole('super-admin');
    }

    /**
     * Check if the user is active.
     */
    public function isActive(): bool
    {
        return (bool) $this->is_active;
    }

    /**
     * Assign a role to the user without duplication.
     */
    public function assignRole(string|Role $role): void
    {
        $roleModel = $role instanceof Role ? $role : Role::where('slug', $role)->first();
        if ($roleModel && ! $this->roles->contains('id', $roleModel->id)) {
            $this->roles()->attach($roleModel->id);
            $this->load('roles');
        }
    }
}
