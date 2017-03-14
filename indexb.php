<?php 
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hola', function() use($app) {
    return 'Hola';
});

$app->get('/https://openweathermap.org/find?q=nezahualcoyotl', function() use($app) {
   //Los comentarios en PHP inician con "//"
//Este es un arreglo asociativo en PHP
$arreglo = ['Rossana 412098761'];
//Para devolver un json, siempre ocupamos arreglos. En JSON
//este arreglo debe verse como {'Rossana 412098761'}
return $app->json($arreglo);
});

$app->run();
?>