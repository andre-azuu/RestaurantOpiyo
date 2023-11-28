<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class PostView extends Controller
{
    public function index(){

        $users = DB::select('select * from opiyo');
        return view('posts_view',['users'=>$users]);
        }
}
