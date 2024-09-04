<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function name(){ 
        return view('user') 
            ->with('id','1') 
            ->with('name','Hidayat'); 
} 
}
