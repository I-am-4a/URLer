<?php
	// ;;;;;;;;;;;;;;;;;;;;;;;;;;;
	/*
	** URL Shortener "URLer" API
	** by I_am_4a
	** http://urler.cf
	*/
	// ;;;;;;;;;;;;;;;;;;;;;;;;;;;
		
	$reqTime = time();
	
	require "./fcc.php";
	require "./randNum.php";
	
	function getPageTitle( $url ) {
		$html = file_cget_contents($url); //(1)
		$html = mb_convert_encoding($html, mb_internal_encoding(), "auto" ); //(2)
		if ( preg_match( "/<title>(.*?)<\/title>/i", $html, $matches) ) { //(3)
			return $matches[1];
		} else {
			return false;
		}
	}
	
	$json_input = json_decode(file_get_contents("php://input"), true);
	
	if($_SERVER["REQUEST_METHOD"] != "POST") {
		$op = array(
			"success" => false,
			"msg" => "Please request by 'POST' method.",
			"data" => null,
			"reqTime" => $reqTime
		);
		header("Content-Type: application/json");
		echo(json_encode($op));
		exit();
	}
	// simple(bool), url(string)
	if(isset($json_input["simple"])) {
		$simple = (bool)$json_input["simple"];
	}
	
	if(isset($json_input["url"])) {
		$url = urldecode($json_input["url"]);
	} else {
		$op = array(
			"success" => false,
			"msg" => "URL is not set.",
			"data" => null,
			"reqTime" => $reqTime
		);
		header("Content-Type: application/json");
		echo(json_encode($op));
		exit();
	}
	
	$json = json_decode(file_get_contents("./urls.json"), true);
	$id = randNum(7);
	$json[$id] = $url;
	$fp = fopen("./urls.json", "w");
	fputs($fp, json_encode($json));
	$iswrite = fclose($fp);
	
	if(!$iswrite) {
		$op = array(
			"success" => false,
			"msg" => "Write failed.\nPlease try again.",
			"data" => null,
			"reqTime" => $reqTime
		);
		header("Content-Type: application/json");
		echo(json_encode($op));
		exit();
	}
	
	$title = getPageTitle($url);
	if($title == false) {
		$optitle = null;
	} else {
		$optitle = $title;
	}
	
	if($simple) {
		$op = array(
			"success" => true,
			"msg" => "Success.",
			"longUrl" => $url,
			"shortUrl" => "http://urler.cf/".$id,
			"reqTime" => $reqTime
		);
	} else {
		$op = array(
			"success" => true,
			"msg" => "Success.",
			"data" => array(
				"longUrl" => $url,
				"shortUrl" => "http://urler.cf/".$id,
				"id" => $id,
				"title" => $optitle
			),
			"reqTime" => $reqTime
		);
	}
	header("Content-Type: application/json");
	echo(json_encode($op));
	exit();
?>