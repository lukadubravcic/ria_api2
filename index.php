<?php

include "restclient.php";
use Phalcon\Mvc\Micro;

$app = new Micro();

$app->get('/api/posts', function ($name) {
    echo "<h1>Welcome $name!</h1>";
	
	$api = new RestClient(array(
    'base_url' => "vinkovic.riteh.hexis.hr", 
    'format' => "json"
	));
	
	$result = $api->post("/api/posts", array('naslov' => "mirovanje"));
	
	echo $result->decode_response();
	
	
});

$app->handle();