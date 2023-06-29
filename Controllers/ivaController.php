<?php

require_once './Models/Iva.php';
require_once './Controllers/Controller.php';

class ivaController extends Controller {
    
    public function index(){
      $iva = Iva::find('all');
      $this->renderView('iva', 'index', ['iva' => $iva], 'bolayout');
    }

    public function create(){
      $this->renderView('iva', 'create', [], 'bolayout');
    }

    private function converterVigor($emvigor){
      if($emvigor == "on"){
        return 1;
      } else{
        return 0;
      }
    }

    public function store(){

      $percentagem = $this->getHTTPPOSTParam('percentagem');
      $descricao = $this->getHTTPPOSTParam('descricao');
      $emvigor = $this->converterVigor($this->getHTTPPOSTParam('emvigor'));

      $iva = new Iva();

      $iva->percentagem = $percentagem;
      $iva->descricao = $descricao;
      $iva->emvigor = $emvigor;

      $iva->save();
  
      $this->index();
    }
  
    public function edit($id){
      $id = $this->getHTTPGETParam('id');
      
      $iva = new Iva();

      $iva->find($id);
  
      $this->renderView('iva', 'edit', ['iva' => $iva], 'bolayout');
    }
  
    public function update(){
      $id = $this->getHTTPPOSTParam('id');
  
      $iva = new Iva();
      $iva->load($id);
  
      $iva->setpercentagem($this->getHTTPPOSTParam('percentagem'));
      $iva->setemvigor($this->getHTTPPOSTParam('fecha'));
      $iva->setdescricao($this->getHTTPPOSTParam('descricao')); 

      $iva->save();
  
      $this->redirectToRoute('iva', 'index');
    }
  
    public function delete(){
      $id = $this->getHTTPGETParam('id');
  
      $iva = new iva();
      $iva->load($id);
  
      $iva->delete();
  
      $this->redirectToRoute('iva', 'index');
    }
}
