<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ShipDetail;

class ApiShipDetailController extends Controller
{
    public function index()
    {
        $shipDetail = ShipDetail::join('radio', 'radio.id', '=', 'ship_detail.radio_id');

        return response() -> json([
            'shipDetail' => $shipDetail
        ]);
    }

    public function show($ref_no)
    {
        $row = ShipDetail::where('ref_no', $ref_no)->get();

        if(empty($row)){
            throw new NotFoundHttpException('Detail kapal tidak ditemukan');
        }

        return response() -> json([
            'shipDetail' => $row
        ]);
    }
}
