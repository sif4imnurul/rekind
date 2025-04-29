<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRM extends Model
{
    protected $table = 'crm';
    protected $primaryKey = 'id_crm';

    protected $fillable = [
        'nama',
        'npk',
        'unit',
        'divisi',
        'email',
        'telepon',
        'alasan',
        'status',
        'id_user'  // Make sure this is fillable
    ];

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'id_user');
    }
}