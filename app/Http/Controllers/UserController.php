<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    function index(){
        $title ="Danh sách người dùng";
        $users = DB::select('select * from users');
        return view('clients.users.list', ['title' =>$title, 'users' =>$users]);
    }   
}
