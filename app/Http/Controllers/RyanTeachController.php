<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RyanTeachController extends Controller
{
    public function teach20200103(Request $request,$params1,$params2=null){
        // dd=dump();die();
        dd($request->get('he'));
        $fuck=$request->params1;
        $show='aaa'.'----'.$params1.'----'.$params2.'this is fuck :'.$fuck;
        print_r($show);
    }

    public function teach20200103001(Request $request,$params1,$params2=null){
        // dd($request->get('he'));
        $fuck=$request->params1;
        $show='aaa'.'----'.$params1.'----'.$params2.'this is fuck :'.$fuck;
        $this->changeValue001($params2);
        return $this->teach20200103002($params1,$params2);
        
    }

    private function teach20200103002(int $params1,$params2){
        return "fuck-----$params1----------$params2";
    }

    private function changeValue001(&$zzz){//有&符號，會將傳遞進來的值做更改
        $zzz='shit';
    }
}
