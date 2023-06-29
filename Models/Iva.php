<?php

class Iva extends ActiveRecord\Model {
    static $table_name = 'iva';
    static $primary_key = 'id';
  
  static $belongs_to = array(
    array('servico')
  );

    static $validates_presence_of = array(
      array('percentagem', 'message' => 'Percentagem não pode ser vazio'),
      array('descricao', 'message' => 'Descrição não pode ser vazio'),
      array('emvigor', 'message' => 'Em vigor não pode ser vazio'),
    );

}
