<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
	public function sendSMS($OTP, $mobileNumber){
		$isError = 0;
		$errorMessage = true;
		$API_KEY = '169295Ardug7Ql598c39c9';
		$SENDER_ID = 'BIGLYS';
		$ROUTE_NO = 4;
		$RESPONSE_TYPE = 'json';

        //Your message to send, Adding URL encoding.
		$message = urlencode("$OTP is your Verification code for BiglyDropship Account");
		

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://control.msg91.com/api/sendotp.php?authkey=". $API_KEY ."&mobile=". $mobileNumber ."&message=". $message . "&sender=". $SENDER_ID . "&otp=".$OTP,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "",
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0,
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
		}
	}

	public function sendEnquiry($OTP, $mobileNumber, $user, $product){
		$isError = 0;
		$errorMessage = true;
		$API_KEY = '169295Ardug7Ql598c39c9';
		$SENDER_ID = 'BIGLYS';
		$ROUTE_NO = 4;
		$RESPONSE_TYPE = 'json';

        //Your message to send, Adding URL encoding.
		$message = urlencode("$OTP is your Verification code for BiglyDropship Account and $user asked about $product");
		

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://control.msg91.com/api/sendotp.php?authkey=". $API_KEY ."&mobile=". $mobileNumber ."&message=". $message . "&sender=". $SENDER_ID . "&otp=".$OTP,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "",
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0,
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
		}
	}
}