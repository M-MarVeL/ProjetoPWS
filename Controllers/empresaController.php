<?php

require_once './Models/Empresa.php';
require_once './Controllers/Controller.php';

class empresaController extends Controller {
    
    public function index(){
      $this->renderView('empresa', 'index', [], 'bolayout');
    }
  
    public function create(){
      $this->renderView('empresa', 'create', [], 'bolayout');
    }
  
    public function store(){
      $designcao = $this->getHTTPPOSTParam('designcao');
      $endereco = $this->getHTTPPOSTParam('endereco');
      $codigopostal = $this->getHTTPPOSTParam('codigopostal');
      $localidade = $this->getHTTPPOSTParam('localidade');
      $telefone = $this->getHTTPPOSTParam('telefone');
      $email = $this->getHTTPPOSTParam('email');
      $nif = $this->getHTTPPOSTParam('nif');
      $capitalsocial = $this->getHTTPPOSTParam('capitalsocial');  
      
      $empresa = new Empresa();
  
      if($empresa->createEmpresa($designcao, $endereco, $codigopostal, $localidade, $telefone, $email, $nif, $capitalsocial)){
        $this->redirectToRoute('bo', 'index');
      } else {
        $this->redirectToRoute('empresa', 'create');
      }
    }
  
    public function edit(){
      $this->renderView('empresa', 'edit', [], 'bolayout');
    }
  
    public function update(){
      $this->renderView('empresa', 'update', [], 'bolayout');
    }
  
    public function delete(){
      $this->renderView('empresa', 'delete', [], 'bolayout');
    }
  
    public function show(){
      $this->renderView('empresa', 'show', [], 'bolayout');
    }
}

