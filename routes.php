<?php
require_once './Controllers/authController.php';
require_once './Controllers/FoController.php';


return [
   'defaultRoute' => ['GET', 'FoController', 'index'],
    'auth' => [
      'index' => ['GET', 'authController', 'index'],
      'login' => ['POST', 'authController', 'login'],
      'logout' => ['GET', 'authController', 'logout'],
    ],
    'fo' => [
      'index' => ['GET', 'FoController', 'index'],
    ]
]
?>
