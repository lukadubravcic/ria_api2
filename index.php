<?php

use Phalcon\Mvc\Micro;

$app = new Micro();

$app->get('{name}', function ($name) {
    echo "<h1>Welcome $name!</h1>";
});

$app->handle();