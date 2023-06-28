<?php

class Servico extends ActiveRecord\Model {
  $table -> 'servico';
  $primary_key = 'id';
  
  static $belongs_to = array(
    array('iva')
  );

}
