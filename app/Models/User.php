<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * Mass assignable attributes
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
        'profile_picture',
        'has_whatsapp',
        'has_viber',
        'facebook',
        'instagram',
        'youtube',
        'is_trader',
        'email_verified_at',
    ];

    /**
     * Hidden attributes
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Attribute casting
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'has_whatsapp' => 'boolean',
        'has_viber' => 'boolean',
        'is_trader' => 'boolean',
    ];

    /**
     * Accessor: Full Name
     */
    // public function getFullNameAttribute()
    // {
    //     return trim($this->first_name . ' ' . $this->last_name);
    // }

    // /**
    //  * Accessor: Profile Picture URL
    //  */
    // public function getProfilePictureUrlAttribute()
    // {
    //     return $this->profile_picture
    //         ? asset('storage/' . $this->profile_picture)
    //         : asset('images/default-avatar.png'); // default avatar
    // }
}
