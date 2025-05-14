<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';
    protected $primaryKey = 'id_agenda';
    
    protected $fillable = [
        'nama_agenda',
        'id_user',
        'status',
        'tanggal_mulai',
        'tanggal_deadline',
        'prioritas',
        'catatan'
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(UserModel::class, 'id_user');
    }
}