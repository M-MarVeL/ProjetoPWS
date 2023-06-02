<?php
require './vendor/autoload.php';
define('APP_NAME', 'Projeto PWS');
define('INVALID_ACESS_ROUTE', 'index.php?c=home&a=index');

ActiveRecord\Config::initialize(function($config){

  $config->set_model_directory('./Models');
  $config->set_connections(
    array(
        'development' => 'mysql://root@localhost/empresa',
    )
  );
});
