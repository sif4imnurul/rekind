<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaMonitoring extends Model
{
    protected $table = 'media_monitoring';
    protected $primaryKey = 'id_media';
    
    protected $fillable = [
        'status',
        'kesimpulan',
        'link'
    ];
}