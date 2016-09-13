<?php

// composer autoloader
require 'vendor/autoload.php';

// require configurations (config.example.php for GitHub example)
require 'config/config.php';

$app = new \Slim\App();

$app->get('/', function ($request, $response, $args) {
  $response = $response->withHeader('Content-type', 'application/json');

  $response->withJson(array('Facebook Verification Token' => Config::$fb_verified_token));

  return $response;
});

$app->run();
