<?php

namespace App\Http\Controllers;

use App\Models\board;
use App\Models\cable;
use App\Models\keycap;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id){
        $item = board::where('id',$id)->first();
        return view('product.index',[
                'item' => $item
        ]);
    }
}
