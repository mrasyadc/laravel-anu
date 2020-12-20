<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Diki Alfarabi Hadi";
        $matkul = ["Matematika", "Fisika"];

        return view('biodata',['nama' => $nama, 'pelajaran' => $matkul]);
    }
}
