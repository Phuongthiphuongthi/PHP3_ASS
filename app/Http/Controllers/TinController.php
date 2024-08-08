<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    function index()
    {
        $dataPC = DB::table('tin')
            ->where('id_loaitin', '=', '1')
            ->orWhere('id_loaitin', '=', '2')
            ->first();
        $dataT = DB::table('tin')
            ->where('view', '>', 15)
            ->get();
        $dataN = DB::table('tin')
            ->orderBy('created_at', 'desc')
            ->first();

        return view('index', compact('dataPC','dataT','dataN'));
    }

    function tintrongloai($id){
        $dataTTL = DB::table('tin')
        ->where('id_loaitin', '=', $id)
        ->get();

        return view('layout.client.home.tintrongloai', compact('dataTTL'));

    }


    function chitiet($id){
        $dataCT = DB::table('tin')
        ->where('id', '=', $id)
        ->first();

        return view('layout.client.home.chitiet', compact('dataCT'));

    }

    
    function timkiem(){

            $dataSearch = DB::table('tin')
            ->where('title', 'like','%'.$_POST['keySearch'].'%')
            ->where('content', 'like', '%'.$_POST['keySearch'].'%')
            ->get();


        return view('layout.client.home.timkiem', compact('dataSearch'));

    }



}
