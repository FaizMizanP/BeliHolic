<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function create(Request $request){
        $cart = Carts::create([
            'id_user' => Auth::id(),
            'id_barang' => $request ->id_barang
        ]);

        return redirect()->back();
    }

    public function index(){
        $listCart = Carts::select([
            'carts.id', 'barangs.nama_barang', 'barangs.harga_satuan', 'barangs.image_url'
        ])->join('barangs','barangs.id','=','carts.id_barang')
        ->join('users','users.id','=','carts.id_user')
        ->where('carts.id_user', Auth::id())
        ->get();
        return view('detail-cart', compact("listCart"));
    }

    public function destroy(Request $request){
        $cart = Carts::find($request->id);
        $cart -> delete(); 
        return redirect()->back();
    }
}
