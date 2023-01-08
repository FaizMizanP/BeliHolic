<?php

namespace App\Http\Controllers;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Models\DetailPembelian;

class PembelianController extends Controller
{
    public function detailPembelian(Request $request) {
        return Pembelian::find(1)->jasaPengiriman;
    }

    public function create(Request $request) {
        $pembelian = new Pembelian();
        $pembelian->alamat_penerima = $request->alamat_penerima;
        $pembelian->id_tipe_jasa_pengiriman = $request->id_tipe_jasa_pengiriman;
        $pembelian->metode_pembayaran = $request->metode_pembayaran;
        $pembelian->nama_bank = $request->nama_bank;
        $pembelian->nomor_rekening = $request->nomor_rekening;
        $pembelian->total_pembayaran = $request->total_pembayaran;
        $pembelian->save();
        
        $detailPembelian = new DetailPembelian();
        $detailPembelian->id_pembelian = $pembelian->id;
        $detailPembelian->id_barang = $request->id_barang;
        $detailPembelian->harga_barang = $request->harga_barang;
        $detailPembelian->jumlah_barang = $request->jumlah_barang;
        $detailPembelian->total_harga = $request->total_harga;
        $detailPembelian->save();

        return redirect()->back();
    }
}
