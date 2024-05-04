<?php

/*Router::define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php'
]);
*/



use App\Controllers\KategoriController;
use celyes\mvc\Router;

$router->get('', 'WelcomeController@index');
$router->get('kategori', 'KategoriController@index');
$router->get('product', 'ProductController@index');
$router->get('suplier', 'SuplierController@index');
$router->get('transaction', 'TransactionController@index');
