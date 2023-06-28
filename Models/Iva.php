<?php

class Iva extends ActiveRecord\Model {
  $table -> 'iva';
  $primary_key = 'id';

  static $has_many = array(
    array('servicos')
  );

}
