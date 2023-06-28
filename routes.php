<?php
require_once './Controllers/authController.php';
require_once './Controllers/FoController.php';
require_once './Controllers/BoController.php';

return [
   'defaultRoute' => ['GET', 'FoController', 'index'],
    'auth' => [
      'index' => ['GET', 'authController', 'index'],
      'login' => ['POST', 'authController', 'login'],
      'logout' => ['GET', 'authController', 'logout'],
    ],
    'fo' => [
      'index' => ['GET', 'FoController', 'index'],
    ],
    'bo' => [
      'index' => ['GET', 'BoController', 'index'],
    ],
    'empresa' => [
      'index' => ['GET', 'empresaController', 'index'],
      'create' => ['GET', 'empresaController', 'create'],
      'store' => ['POST', 'empresaController', 'store'],
      'edit' => ['GET', 'empresaController', 'edit'],
      'update' => ['POST', 'empresaController', 'update'],
      'delete' => ['POST', 'empresaController', 'delete'],
    ],
    'servico' => [
      'index' => ['GET', 'servicoController', 'index'],
      'create' => ['GET', 'servicoController', 'create'],
      'store' => ['POST', 'servicoController', 'store'],
      'edit' => ['GET', 'servicoController', 'edit'],
      'update' => ['POST', 'servicoController', 'update'],
      'delete' => ['POST', 'servicoController', 'delete'],
    ],
    'iva' => [
      'index' => ['GET', 'ivaController', 'index'],
      'create' => ['GET', 'ivaController', 'create'],
      'store' => ['POST', 'ivaController', 'store'],
      'edit' => ['GET', 'ivaController', 'edit'],
      'update' => ['POST', 'ivaController', 'update'],
      'delete' => ['POST', 'ivaController', 'delete'],
    ],
]
?>
