<?php
require_once './Controllers/authController.php';
require_once './Controllers/FoController.php';
require_once './Controllers/BoController.php';
require_once './Controllers/servicoController.php';
require_once './Controllers/empresaController.php';
require_once './Controllers/ivaController.php';
require_once './Controllers/utilizadoresController.php';

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
      'delete' => ['GET', 'empresaController', 'delete'],
      'show' => ['POST', 'empresaController', 'show'],
    ],
    'servico' => [
      'index' => ['GET', 'servicoController', 'index'],
      'create' => ['GET', 'servicoController', 'create'],
      'store' => ['POST', 'servicoController', 'store'],
      'edit' => ['GET', 'servicoController', 'edit'],
      'update' => ['POST', 'servicoController', 'update'],
      'delete' => ['GET', 'servicoController', 'delete'],
      'show' => ['POST', 'servicoController', 'show'],
    ],
    'iva' => [
      'index' => ['GET', 'ivaController', 'index'],
      'create' => ['GET', 'ivaController', 'create'],
      'store' => ['POST', 'ivaController', 'store'],
      'edit' => ['GET', 'ivaController', 'edit'],
      'update' => ['POST', 'ivaController', 'update'],
      'delete' => ['GET', 'ivaController', 'delete'],
      'show' => ['POST', 'ivaController', 'show'],
    ],
    'utilizadores' => [
      'index' => ['GET', 'utilizadoresController', 'index'],
      'create' => ['GET', 'utilizadoresController', 'create'],
      'store' => ['POST', 'utilizadoresController', 'store'],
      'edit' => ['GET', 'utilizadoresController', 'edit'],
      'update' => ['POST', 'utilizadoresController', 'update'],
      'delete' => ['GET', 'utilizadoresController', 'delete'],
      'show' => ['POST', 'utilizadoresController', 'show'],
    ],
    'folha' => [
      'index' => ['GET', 'folhaController', 'index'],
      'create' => ['GET', 'folhaController', 'create'],
      'store' => ['POST', 'folhaController', 'store'],
      'edit' => ['GET', 'folhaController', 'edit'],
      'update' => ['POST', 'folhaController', 'update'],
      'delete' => ['GET', 'folhaController', 'delete'],
      'show' => ['POST', 'folhaController', 'show'],
    ],
]
?>
