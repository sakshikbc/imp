<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use Illuminate\Http\Request;

class OtpController extends Controller
{

	public function requestOtp (Request $request) 
	{
		// validation
		if ( !is_numeric($request->phone) ||  strlen($request->phone) < 9 ){
		    return [
		    	'status' => 'failed'
		    ];
		}
		$phone = $request->phone;
	    $otp = rand(1000, 9999);
	    $request->session()->put('otp', $otp);
	    // sending OTP
	    $MSG91 = new Otp();
	    $responseOtp = $MSG91->sendSMS($otp, $phone);
	    // temporary default return. 
	    return [
	    	'status' => 'success'
	    ];
	}

	public function verifyOtp (Request $request) 
	{
		$confirmOtp =  $request->verifyOtp;
		$otp = $request->session()->get('otp');
		if ($otp == $confirmOtp) {
			return [
		    	'status' => 'success'
			];
		} else {
			return [
				'status' => 'failed'
			];
		}
	}

}
