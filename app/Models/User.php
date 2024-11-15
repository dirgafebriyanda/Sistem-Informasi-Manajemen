<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'name',
        'username',
        'jekel',
        'email',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Boot the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function($user) {
            // Hapus semua pos terkait pengguna saat pengguna dihapus
            $user->posts()->delete();
            // Tambahkan entitas lain yang ingin Anda hapus
        });
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

     public function like()
    {
        return $this->hasMany(Like::class);
    }
    
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
