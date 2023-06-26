<?php
require './vendor/autoload.php';
define('APP_NAME', 'Projeto PWS');
define('INVALID_ACESS_ROUTE', 'index.php?c=fo&a=index');

ActiveRecord\Config::initialize(function($cfg){

  $cfg->set_model_directory('./Models');
  $cfg->set_connections(
    array(
        'development' => 'mysql://root@localhost/empresa',
    )
  );
});
