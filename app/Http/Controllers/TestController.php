<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function ajaxTest(Request $request)
    {
    	if(!empty($request->test)){
	    	return [
	    		'status' => 'success'
	    	];
    	}else{
	    	return [
	    		'status' => 'failed!!!'
	    	];
    	}
 
    }
}
