<?php

require_once './Models/Servico.php';
require_once './Controllers/Controller.php';

class servicoController extends Controller {

  public function index(){
    $this->renderView('servico', 'index', [], 'bolayout');
  }

  public function create(){
    $this->renderView('servico', 'create', [], 'bolayout');
  }

  public function store(){
    $nome = $this->getHTTPPOSTParam('nome');
    $descricao = $this->getHTTPPOSTParam('descricao');
    $preco = $this->getHTTPPOSTParam('preco');
    $imagem = $this->getHTTPPOSTParam('imagem');

    $servico = new Servico();

    if($servico->store($nome, $descricao, $preco, $imagem)){
      $this->redirectToRoute('bo', 'index');
    } else {
      $this->redirectToRoute('servico', 'create');
    }
  } 

  public function edit(){
    $id = $this->getHTTPGETParam('id');

    $servico = new Servico();

    $servico = $servico->getServico($id);

    $this->renderView('servico', 'edit', ['servico' => $servico], 'bolayout');
  }

  public function update(){
    $id = $this->getHTTPPOSTParam('id');
    $nome = $this->getHTTPPOSTParam('nome');
    $descricao = $this->getHTTPPOSTParam('descricao');
    $preco = $this->getHTTPPOSTParam('preco');
    $imagem = $this->getHTTPPOSTParam('imagem');

    $servico = new Servico();

    if($servico->update($id, $nome, $descricao, $preco, $imagem)){
      $this->redirectToRoute('bo', 'index');
    } else {
      $this->redirectToRoute('servico', 'edit');
    }
  } 

  public function delete(){
    $id = $this->getHTTPGETParam('id');

    $servico = new Servico();

    if($servico->delete($id)){
      $this->redirectToRoute('bo', 'index');
    } else {
      $this->redirectToRoute('servico', 'edit');
    }
  }

}
