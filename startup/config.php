<?php
require './vendor/autoload.php';
define('APP_NAME', 'Credit App');
define('INVALID_ACCESS_ROUTE', 'index.php?c=home&a=index');

ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('./models');
    $cfg->set_connections(
        array(
            'development' => 'mysql://root@localhost/appdb',
        )
    );
});
?>