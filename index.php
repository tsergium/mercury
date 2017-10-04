<?php
require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function (Request $req,  Response $res, $args = []) {
    return $res->withStatus(200)->write('Hello World');
});