<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function create(Request $request){
        $barang = Barang::create([
            'nama_barang' => $request ->nama_barang,
            'kategori_barang' => $request ->kategori_barang,
            'harga_satuan' => $request ->harga_satuan,
            'berat' => $request ->berat,
            'stock' => $request ->stock,
            'kondisi_barang' => $request ->kondisi_barang,
            'deskripsi_barang' => $request ->deskripsi_barang,
            'id_penjual' => 1
        ]);
        dd($request -> input());

    }

}
