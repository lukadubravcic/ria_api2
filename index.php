<?php

include "restclient.php";
use "display.php";
use Phalcon\Mvc\Micro;



$app = new Micro();

$app->get('/api/posts', function () {
    echo "<h1>Welcome!</h1>";
	
	$api = new RestClient(array(
    'base_url' => "vinkovic.riteh.hexis.hr", 
    'format' => "json"
	));
	
	$result = $api->get("/api/posts");
	
	$obj = new display_entries;
	$obj->displ(json_encode($result->decode_response()));
	
	
	
});

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


$app->handle();

