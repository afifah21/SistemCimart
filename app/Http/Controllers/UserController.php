<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->User = new User();
    }

    public function home(){
        //$data = ['mahasiswa' => $this->Mahasiswa->allData()];
        return view('home');
    }
}
