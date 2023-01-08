<?php

namespace App\Http\Controllers;
use App\Models\JasaPengiriman;
use Illuminate\Http\Request;

class JasaPengirimanController extends Controller
{
    public function getTipeJasa(Request $request, $id) {
        $tipeJasa = JasaPengiriman::find($id)->tipeJasaPengiriman;
        return response()->json([
            'success' => true,
            'message' => 'Get Data Tipe Jasa Success',
            'response_code' => 200,
            'data' => $tipeJasa
        ], 200);
    }
}
