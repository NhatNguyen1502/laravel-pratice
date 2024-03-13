<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use DB;

class HomeController extends Controller
{
    public function index() {
        // $users = DB::select('select * from users');
        // $users = DB::select('select * from users where id = ?', [1]);
        $users = DB::select('select * from users where email=:email', ['email' => 'nhat@gmail.com']);
        dd($users);
    }
}
