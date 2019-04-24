<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Illuminate\Support\Facades\Auth;

use App\Ship;
use App\ShipDetail;

class ApiShipController extends Controller
{
    public function index(Request $request)
    {
        // $ship = Ship::join('users', 'users.id', '=', 'ship.admin_id')
        // ->select('ship.*', 'users.name as admin_name')
        // ->paginate(10);

        $ship = Ship::join('users', 'users.id', '=', 'ship.admin_id')
        ->select('ship.*', 'users.name as admin_name')
        ->when($request->keyword, function ($query) use ($request) {
            return $query->where('ship_name', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('call_sign', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('port_register', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('radio_area', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('users.name', 'LIKE', '%' . $request->keyword . '%');
        })
        ->paginate(10);

        $ship->appends($request->only('keyword'));

        return response() -> json([
            'ship' => $ship
        ]);
    }

    public function show($id)
    {
        $list = [];
        $detail = [];

        $row = Ship::find($id);

        if(empty($row)){
            throw new NotFoundHttpException('Kapal tidak ditemukan');
        }

        $list = [
            'id'                  => $row->id,
            'admin_id'            => $row->admin_id,
            'ref_no'              => $row->ref_no,
            'ship_name'           => $row->ship_name,
            'call_sign'           => $row->call_sign,
            'port_register'       => $row->port_register,
            'gross_tonnage'       => $row->gross_tonnage,
            'imo_number'          => $row->imo_number,
            'mmsi_number'         => $row->mmsi_number,
            'no_reg'              => $row->no_reg,
            'radio_area'          => $row->radio_area,
            'no_sikr'             => $row->no_sikr,
            'berlaku_sampai'      => $row->berlaku_sampai,
            'cart_oru1'           => $row->cart_oru1,
            'atas_nama1'          => $row->atas_nama1,
            'cart_oru2'           => $row->cart_oru2,
            'atas_nama2'          => $row->atas_nama2,
            'thn_letak_lunas'     => $row->thn_letak_lunas,
            'tempat_pemeriksaan'  => $row->tempat_pemeriksaan,
            'tanggal_pemeriksaan' => $row->tanggal_pemeriksaan,
            'daerah_pelayaran'    => $row->daerah_pelayaran,
        ];

        $repo = ShipDetail::where('ref_no', $row->ref_no)->get();

        foreach($repo as $x) {
            $detail[] = [
                'id' => $x->id,
                'ref_no' => $x->ref_no,
                'radio_id' => $x->radio_id,
                'merk' => $x->merk,
                'type' => $x->type,
                'serial_number' => $x->serial_number,
                'approval' => $x->approval,
            ];
        }

        $list['detail'] = $detail;

        return response() -> json([
            'ship' => $list
        ]);
    }

    public function store(Request $request)
    {
        $detail = $request->detail;
        $shipDetail = [];

        if ($request->ref_no) {
            $ref_no = $request->ref_no;
        } else {
            $ref_no = 'FN' . rand(1000, 9999) . 'P';
        }

        $ship = Ship::findOrNew($request->id);

        $ship->admin_id             = Auth::id();
        $ship->ref_no               = $ref_no;
        $ship->ship_name            = $request->ship_name;
        $ship->call_sign            = $request->call_sign;
        $ship->port_register        = $request->port_register;
        $ship->gross_tonnage        = $request->gross_tonnage;
        $ship->imo_number           = $request->imo_number;
        $ship->mmsi_number          = $request->mmsi_number;
        $ship->no_reg               = $request->no_reg;
        $ship->radio_area           = $request->radio_area;
        $ship->no_sikr              = $request->no_sikr;
        $ship->berlaku_sampai       = $request->berlaku_sampai;
        $ship->cart_oru1            = $request->cart_oru1;
        $ship->atas_nama1           = $request->atas_nama1;
        $ship->cart_oru2            = $request->cart_oru2;
        $ship->atas_nama2           = $request->atas_nama2;
        $ship->thn_letak_lunas      = $request->thn_letak_lunas;
        $ship->tempat_pemeriksaan   = $request->tempat_pemeriksaan;
        $ship->tanggal_pemeriksaan  = $request->tanggal_pemeriksaan;
        $ship->daerah_pelayaran     = $request->daerah_pelayaran;

        $ship->save();

        if (!empty($detail)) {
            foreach ($detail as $x) {
                ShipDetail::updateOrCreate(
                [
                    'ref_no' => $ref_no, 
                    'radio_id' => $x['id']
                ],
                [
                    'ref_no' => $ref_no,
                    'radio_id' => $x['id'],
                    'merk' => $x['merk'],
                    'type' => $x['type'],
                    'serial_number' => $x['serial_number'],
                    'approval' => $x['approval'],
                ]);
            }
        }
        
        return response() -> json([
            'message' => 'Data berhasil disimpan'
        ]);
    }

    public function destroy($id)
    {
        $row = $this->getShip($id);

        $rowDetail = ShipDetail::where('ref_no', $row->ref_no)->delete();

        $row->delete();
        
        return response() -> json([
            'message' => 'Data telah dihapus'
        ]);
    }

    private function getShip($id)
    {
        $row = Ship::find($id);

        if(empty($row)){
            throw new NotFoundHttpException('Data kapal tidak ditemukan');
        }

        return $row;
    }
}
