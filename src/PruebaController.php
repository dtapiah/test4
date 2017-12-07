<?php

namespace danilo\prueba;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    //
    public function suma($a,$b){
    	$result = $a + $b;
    	return view('prueba::resultado', compact('result'));
    }

    public function resta($a,$b){
    	$result = $a - $b;
    	return view('prueba::resultado', compact('result'));
    }
}
