<?php

include "restclient.php";
include "display.php";
use Phalcon\Mvc\Micro;



$app = new Micro();

$app->get('/api/posts', function () {
    
	
	$api = new RestClient(array(
    'base_url' => "vinkovic.riteh.hexis.hr"
	));
	
	$result = $api->get("/api/posts");
	$decoded = $result->decode_response();
	
	displ($decoded);
});

$app->get('/api/post/{param}', function ($param) {
    
	$api = new RestClient(array(
    		'base_url' => "vinkovic.riteh.hexis.hr", 
    	));
	
	$result = $api->post("/api/post", array('naslov' => $param));
	
});


$app->handle();

