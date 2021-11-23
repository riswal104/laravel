<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulatorcontroller extends Controller
{
    public function index(){
        return view('kalkulator');
    }
    public function tambah(){
        $a = 5;
        $b = 10;
        $c = $a+$b;
        return $c;
    }
    public function kurang(){
        $a = 5;
        $b = 10;
        $c = $a-$b;
        return $c;
    }
    public function kali(){
        $a = 5;
        $b = 10;
        $c = $a*$b;
        return $c;
    }
    public function bagi(){
        $a = 5;
        $b = 10;
        $c = $a/$b;
        return $c;
    }
}
