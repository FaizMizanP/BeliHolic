<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelian';
    public function detailPembelian()
    {
        return $this->hasMany(DetailPembelian::class, 'id_pembelian', 'id');
    }

    public function jasaPengiriman()
    {
        return $this->hasOne(TipeJasaPengiriman::class, 'id', 'id_tipe_jasa_pengiriman');
    }

}
