<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ClientData extends Model
{
    use HasFactory;

    protected $table = 'client_data';
    protected $primaryKey = 'id_client_data';

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'alamat_perusahaan',
        'status_project',
        'id_user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}