<?php

class Iva extends ActiveRecord\Model {
    static $table_name = 'iva';
    static $primary_key = 'id';
  
  static $belongs_to = array(
    array('servico')
  );

}
