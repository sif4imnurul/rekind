<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Authenticatable
{
    use Notifiable;

    protected $table = 'user'; 
    protected $primaryKey = 'id_user'; 
    public $timestamps = true; 

    protected $fillable = [
        'nama',
        'unit',
        'email',
        'password',
        'npk',
        'divisi',
        'role',
        'telepon',
        'alamat',
    ];

    protected $hidden = [
        'password',
    ];

    /**
     * Gunakan npk sebagai identifier untuk login.
     */
    public function getAuthIdentifierName()
    {
        return 'npk';
    }
}
