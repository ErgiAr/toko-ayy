<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
   public function index()
   {
    return "Oke Ini Latihan Controller";
   }

   public function beranda()
   {
        $data = array('nama' => 'Ergi Alifio Rifero');
        return view('beranda', $data);
   }
}
