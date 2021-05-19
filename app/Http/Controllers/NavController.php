<?php

namespace App\Http\Controllers;

use App\Models\board;
use App\Models\cable;
use App\Models\keycap;
use App\Models\User;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(){
        $user = User::get();
        return view('layouts.navigation',$user);
    }
}
