<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class JasaPengiriman extends Model
{
    protected $table = 'jasa_pengiriman';
    use HasFactory;
    public function tipeJasaPengiriman()
    {
        return $this->hasMany(TipeJasaPengiriman::class, 'id_jasa_pengiriman', 'id');
    }
    
}
