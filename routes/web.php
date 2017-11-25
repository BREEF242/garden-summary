<?php

$router->get('/', ['as' => 'home', function () use ($router) {
    return view('home');
}]);
