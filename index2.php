<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hola', function() use($app) {
   return 'hola';
});

$app->run();
?>