<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\myadd;

class TestController extends Controller
{
    public function testthreeparam($var1, $var2, $var3){

        dd($var1, $var2, $var3);
        
    }
    public function testparam(){
        return view("welcome2");
    }
    public function helpertest(){
        echo myadd(2, 3);
    }
}
