<?php
use core\Router;
$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/language/{lang}', 'LanguageController@set');
$router->get('/categories/{id}', 'CategoriesController@index');

// Continue to: Filtro com atualização (3/3)