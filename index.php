<?php
require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function ($request, $response, $args) {
   echo 'Hello homepage';
});
$app->get('/{name}', function ($request, $response, $args) {
    echo "Hello, " . $args['name'];
});
