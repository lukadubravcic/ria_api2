<?php

use Phalcon\Mvc\Micro;

$app = new Micro();

$app->get('/say/welcome/{name}', function ($name) {
    echo "<h1>Welcome $name!</h1>";
});

$app->handle();