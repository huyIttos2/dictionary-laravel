<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    //
    function translate(Request $mention){
//            $english = ["Dad","Mom","Love","Son","daughter"];
//            $vietNamese = ["Cha","Me","Yeu","Con trai"];
//            for($i = 0;$i<count($english);$i++){
//                    if($request->english == $english[$i]){
//                        $res = $vietNamese[$i];
//                        return view('result',compact('varname:res'));
//                    }
//                }
//            return view('error');
            $words = ["Dad"=>"Cha","Mom"=>"Me","Love"=>"Yeu","Son"=>"Con trai","daughter"=>"con gai"];
            foreach ($words as $key => $value){
                if($mention->english == $key){
                    echo $value;
                }
            }
    }

}
