<?php

include "restclient.php";
use Phalcon\Mvc\Micro;

$app = new Micro();

$app->get('/api/posts', function () {
    echo "<h1>Welcome!</h1>";
	
	$api = new RestClient(array(
    'base_url' => "vinkovic.riteh.hexis.hr", 
    'format' => "json"
	));
	
	$result = $api->get("/api/posts", array('name' => "test123"));
	
	echo $result->decode_response();
	
	
});

$app->handle();