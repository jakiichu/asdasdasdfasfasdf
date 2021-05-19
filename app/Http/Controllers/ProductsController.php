<?php

namespace App\Http\Controllers;

use App\Models\board;
use App\Models\cable;
use App\Models\keycap;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $boards = board::all();
        $cables = cable::all();
        $keycaps = keycap::all();
        return view('Products.index',[
            'boards' =>
            $boards,
            'cables' =>
            $cables,
            'keycaps' =>
            $keycaps
        ]);
    }
}
