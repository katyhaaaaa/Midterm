<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserController extends Controller
{
    public function index(){
        $user = FacadesDB::select('select * from user');
        return view('user',['user'=>$user]);
    }
}