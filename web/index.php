<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

// Debugging is on by default - you may wish to change this on a per-host basis
$app['debug'] = true;

// Routes
$app->get('/', function() use ($app) {
  return $app['twig']->render('index.html');
});

$app->run();
