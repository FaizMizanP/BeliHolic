<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function create(Request $request){
        
    $filenameWithExt = $request->file('image')->getClientOriginalName();
    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    $extension = $request->file('image')->getClientOriginalExtension();
    $filenameSimpan = $filename.''.time().'.'.$extension;
    $path = $request->file('image')->storeAs('public/posts_image', $filenameSimpan);
        $barang = Barang::create([
            'nama_barang' => $request ->nama_barang,
            'kategori_barang' => $request ->kategori_barang,
            'harga_satuan' => $request ->harga_satuan,
            'berat' => $request ->berat,
            'stock' => $request ->stock,
            'kondisi_barang' => $request ->kondisi_barang,
            'deskripsi_barang' => $request ->deskripsi_barang,
            'image_url' => $filenameSimpan,
            'id_penjual' => 1
        ]);
    return redirect()->back();

    }

}
