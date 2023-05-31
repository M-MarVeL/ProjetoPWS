<?php
require_once './Controllers/authController.php';
require_once './Controllers/FoController.php';


return [
   'defaultRoute' => ['GET', 'FoController', 'index'],
    'auth' => [
      'index' => ['GET', 'AuthController', 'index'],
      'login' => ['POST', 'AuthController', 'login'],
      'logout' => ['GET', 'AuthController', 'logout'],
    ],
    'fo' => [
      'index' => ['GET', 'FoController', 'index'],
    ]
]
?>
