<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'kategori_barang',
        'harga_satuan',
        'berat',
        'stock',
        'kondisi_barang',
        'deskripsi_barang',
        'image_url',
        'id_penjual'
    ];
}
