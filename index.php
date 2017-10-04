<?php
require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/{name}', function ($request, $response, $args) {
    echo "Hello, " . $args['name'];
});