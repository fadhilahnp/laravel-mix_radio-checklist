<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function shipDetail()
    {
        return view('theme.shipDetail');
    }

    public function shipList()
    {
        return view('theme.ship');
    }
}
