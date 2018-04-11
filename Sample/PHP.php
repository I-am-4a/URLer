<?php
	// [PHP] URLer post request sample
	// http://urler.cf/
	// by I_am_4a
	// http://www.iam4a.ml/
	
	// post(string $url, array $data, array $header)
	function post($url, $data, $header) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		$result = curl_exec($ch);
		curl_close($ch);
		
		return $result;
	}
	
	// Post data
	$data = array(
		"url" => "YOUR LONG LONG URL"
	);
	
	// Post URL
	$url = "http://urler.cf/bin/urlgen2.php";
	
	// Post header
	$header = array(
		"Content-Type" => "application/json"
	);
	
	// Post request
	$res = post($url, $data, $header);
	
	// Result
	var_dump($res);
?>
