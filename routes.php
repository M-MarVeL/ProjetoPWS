<?php
require_once 'controllers/authController';
require_once 'controllers/FoController';

  'defaultRoute' => ['GET', 'FoController', 'index'],
    'auth' => [
      'index' => ['GET', 'AuthController', 'index'],
      'login' => ['POST', 'AuthController', 'login'],
      'logout' => ['GET', 'AuthController', 'logout'],
    ],
