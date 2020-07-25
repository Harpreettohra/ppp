<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;



<?php include_once(“home.html”); ?>

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->run();
