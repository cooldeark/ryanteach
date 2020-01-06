<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RyanHomeWorkController extends Controller
{
    public function homework20191227(){
        print_r('你進來惹>///<');
    }



    public function teach20200103(Request $request){
        $inputValue=$request->variable1;
        $transformType=$request->variable2;
        if(!is_numeric($transformType) ||!is_numeric($inputValue)){
            print_r('You input fucking string');exit;
        }
        else if($transformType==null || $transformType<=1 || $transformType>36){//route default will to judge empty or not
            $transformType=2;
        }
        print_r(base_convert($inputValue,10,$transformType));
    }
}
