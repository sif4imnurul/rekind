<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_produk',
        'nama',
        'url',
        'deskripsi',
        'foto',
        'tipe',
        'kategori',
    ];
}
