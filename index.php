<?php

include "restclient.php";
include "display.php";
use Phalcon\Mvc\Micro;



$app = new Micro();

$app->get('/api/posts', function () {
    
	
	$api = new RestClient(array(
    'base_url' => "vinkovic.riteh.hexis.hr", 
    'format' => "json"
	));
	
	$result = $api->get("/api/posts");
	$decoded = $result->decode_response();
	
	//echo json_encode($result->decode_response());
	//echo "<br />";
	$obj = new display_entries;
	$obj->displ($decoded);
});
/*
$app->get('/api/post/{param}', function ($param) {
    //echo "<h1>Welcome!</h1>";
	
	$api = new RestClient(array(
    'base_url' => "vinkovic.riteh.hexis.hr", 
    //'format' => "json"
	));
	
	$result = $api->post("/api/post", array('naslov' => $param));
	
	$obj = new display_entries;
	$obj->displ(json_encode($result->decode_response()));
	
	
	
	
});
*/


$app->handle();

