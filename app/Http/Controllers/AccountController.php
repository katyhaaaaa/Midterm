<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class AccountController extends Controller
{
    public function index(){
        $account = FacadesDB::select('select * from account');
        return view('account',['account'=>$account]);
    }
}