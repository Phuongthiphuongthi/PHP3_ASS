<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    // public function index(){

    //     $dataPC = DB::table('tin')
    //         ->where('id_loaitin', '=', '1')
    //         ->orWhere('id_loaitin', '=', '2')
    //         ->first();
    //     $dataT = DB::table('tin')
    //         ->where('view', '>', 15)
    //         ->get();
    //     $dataN = DB::table('tin')
    //         ->orderBy('created_at', 'desc')
    //         ->first();

    //     return view('index', compact('dataPC','dataT','dataN'));
    // }
}
