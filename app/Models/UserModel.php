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
    
    // Pastikan ini sesuai dengan field di database
    protected $fillable = [
        'nama',
        'unit',
        'email',
        'npk',
        'divisi',
        'role',
        'telepon',
        'alamat',
    ];
    
    protected $hidden = [
        'password',
    ];
    
    public function getAuthPassword()
    {
        return $this->npk;
    }
}