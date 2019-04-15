<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Radio;

class ApiRadioController extends Controller
{
    public function index()
    {
        $radio = Radio::get();

        return response() -> json([
            'radio' => $radio
        ]);
    }

    public function destroy($ref_no)
    {
        $row = $this->getRadio($ref_no);
        $row->delete();
        
        return response() -> json([
            'message' => 'Data radio berhasil dihapus'
        ]);
    }

    private function getRadio($ref_no)
    {
        $row = Radio::where('ref_no', $ref_no)->get();

        if(empty($row)){
            throw new NotFoundHttpException('Data radio tidak ditemukan');
        }

        return $row;
    }
}
