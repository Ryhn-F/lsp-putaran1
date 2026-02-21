<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */


    protected $fillable = [
        'username',
        'password',
        'anggota_id',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function anggota(){
        return $this->belongsTo(Anggota::class);
    }


    public function isAdmin(){
        return $this->role === 'admin';
    }

    public function isSiswa(){
        return $this->role === 'siswa';
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    // public function anggota(){

    //     return $this->belongsTo(Anggota::class);
    // }
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
