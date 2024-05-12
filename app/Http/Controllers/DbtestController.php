<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbtestController extends Controller
{
    public function dbone(){
        echo "Query Builder with DB facade";
        $users = DB::table('users')
        ->skip(10)
        ->take(5)
        ->get();
        $users = DB::table('users')->count();
        // $users = DB::select('select * from users');
        // $users = DB::delete("delete from users where id = 20");

        // $categories = DB::table('categories')
        // ->select('id','name')
        // ->where('status',0)
        // ->where('id','>',4)
        // ->orderBy('id','desc')
        // ->get();
        // $subcat = DB::table('sub_categories')
        // ->select('category_id')
        // ->distinct()
        // ->get();
        dd($users);
        // return view("welcome");
    }
}
