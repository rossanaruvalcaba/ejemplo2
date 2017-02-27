<?php 
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hola', function() use($app) {
    return 'Hola';
});

$app->get('/rutaconjson', function() use($app) {
   //Los comentarios en PHP inician con "//"
//Este es un arreglo asociativo en PHP
$arreglo = ['hola'=>'mundo'];
//Para devolver un json, siempre ocupamos arreglos. En JSON
//este arreglo debe verse como {'hola':'mundo'}
return $app->json($arreglo);
});

$app->run();
?>
