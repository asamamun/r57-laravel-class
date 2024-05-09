<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testthreeparam($var1, $var2, $var3){

        dd($var1, $var2, $var3);
        
    }
    public function testparam(){
        return view("welcome2");
    }
}
