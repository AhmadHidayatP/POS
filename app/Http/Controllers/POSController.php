<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSController extends Controller
{
    public function pos(){ 
        return view('penjualan'); 
    } 
}
