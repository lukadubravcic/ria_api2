<?php

use Phalcon\Mvc\Micro;

$app = new Micro();

$app->get('/say/{name}', function ($name) {
    echo "<h1>Welcome $name!</h1>";
});

$app->handle();