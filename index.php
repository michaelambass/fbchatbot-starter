<?php

// composer autoloader
require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/videos', function ($request, $response, $args) {
  $response = $response->withHeader('Content-type', 'application/json');

  $reponse->withJson(array());

  return $response;
});

$app->run();
