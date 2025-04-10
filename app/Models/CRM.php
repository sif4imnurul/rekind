<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRM extends Model
{
    use HasFactory;

    protected $table = 'crm';

    protected $fillable = [
        'id_user',
        'nama',
        'npk',
        'unit',
        'divisi',
        'email',
        'telepon',
        'alasan',
    ];
}