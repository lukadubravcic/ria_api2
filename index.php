<?php

include "restclient.php";
use Phalcon\Mvc\Micro;


$app = new Micro();

$app->get('/api/posts', function () {
    echo "<h1>Welcome!</h1>";
	
	$api = new RestClient(array(
    'base_url' => "tic984.riteh.hexis.hr", 
    'format' => "json"
	));
	
	$result = $api->get("/api/posts");
	
	echo json_encode($result->decode_response());
	
	
});

$app->get('/api/post/{param}', function ($param) {
    echo "<h1>Welcome!</h1>";
	
	$api = new RestClient(array(
    'base_url' => "vinkovic.riteh.hexis.hr", 
    'format' => "json"
	));
	
	$result = $api->post("/api/post", array('naslov' => $param));
	
	if($result->info->http_code == 200)
		var_dump($result->decode_response());
	
	var_dump($result->decode_response());
	
	
});


$app->handle();

