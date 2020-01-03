<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\dmp\dmp_industry;
class LoginController extends Controller
{


    // private
    // protected
    public function login(){
        $myDB=DB::table('dmp_industry')->get();
        // $user = DB::connection('dmp')->table('dmp_industry')->get();
        // $user2=dmp_industry::all();
        print_r($myDB);
    }

    public function getfuck(){
        return 'fuck0娘哩';
    }
}
