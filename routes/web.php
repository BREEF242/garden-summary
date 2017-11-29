<?php
  require_once __DIR__ . '/../app/Helpers/functions.php';
  
  $router->get('/', ['as' => 'home', function () use ($router) {
      return view('home');
  }]);
