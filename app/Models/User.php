<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * فیلدهایی که می‌توان مقداردهی کرد
     */
    protected $fillable = ['name', 'email', 'mobile', 'password', 'role', 'address'];

    /**
     * فیلدهایی که نباید نمایش داده شوند
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * فیلدهایی که باید به نوع داده‌ای خاص تبدیل شوند
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * مقداردهی پیش‌فرض برای نقش کاربر
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if (!$user->role) {
                $user->role = 'user'; // 👈 نقش پیش‌فرض "user"
            }
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'owner_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}