<?php

Class Empresa extends ActiveRecord\Model {
    static $table_name = 'empresa';
    static $primary_key = 'id';

  static $validates_presence_of = array(
    array('designacao', 'message' => 'não pode estar em branco!'),
    array('morada', 'message' => 'não pode estar em branco!'),
    array('codigopostal', 'message' => 'não pode estar em branco!'),
    array('localidade', 'message' => 'não pode estar em branco!'),
    array('telefone', 'message' => 'não pode estar em branco!'),
    array('email', 'message' => 'não pode estar em branco!'),
    array('nif', 'message' => 'não pode estar em branco!'),
    array('capital', 'message' => 'não pode estar em branco!')
  );

  public function getEmpresas() {
    $empresas = Empresa::all();
    return $empresas;
  }
  
  public function getEmpresa($id) {
    $empresa = Empresa::find($id);
    return $empresa;
  }

  public function createEmpresa($designacao, $morada, $codigopostal, $localidade, $telefone, $email, $nif, $capital) {
    $empresa = Empresa::create(array(
      'designacao' => $designacao,
      'morada' => $morada,
      'codigopostal' => $codigopostal,
      'localidade' => $localidade,
      'telefone' => $telefone,
      'email' => $email,
      'nif' => $nif,
      'capital' => $capital
    ));
    return $empresa;
  }

}
