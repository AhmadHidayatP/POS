<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list(){ 
        return view('products', ['product' => 'Bread,Nugget,Mop,Facewash,Soap,Diaper']); 
    } 
    public function fnb(){ 
        return view('products', ['product' => 'Bread,Nugget']); 
    } 
    public function bnh(){ 
        return view('products', ['product' => 'Facewash,Soap']); 
    } 
    public function hnc(){ 
        return view('products', ['product' => 'Mop']); 
    } 
    public function bnc(){ 
        return view('products', ['product' => 'Diaper']); 
    } 
}
