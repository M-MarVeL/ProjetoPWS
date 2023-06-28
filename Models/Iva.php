<?php

class Iva extends ActiveRecord\Model {
  $table -> 'iva';
  $primary_key = 'id';
  
  static $belongs_to = array(
    array('servico')
  );

}
