<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UserController@index');
$router->delete('users', 'UserController@delete{id}');
$router->post('users', 'UserController@store');
