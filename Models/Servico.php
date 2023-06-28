<?php

class Servico extends ActiveRecord\Model {
  $table -> 'servico';
  $primary_key = 'id';
  
  static $has_many = array(
    array('ivas_id' => 'Iva')
  );

}
