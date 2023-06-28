<?php

class Servico extends ActiveRecord\Model {
    static $table_name = 'servico';
    static $primary_key = 'id';
  
  static $has_many = array(
    array('ivas_id' => 'Iva')
  );

}
