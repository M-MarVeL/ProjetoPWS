<?php

require_once './Models/iva.php';
require_once './Controllers/Controller.php';

class ivaController extends Controller {
    
    public function index(){
      $this->renderView('iva', 'index', [], 'bolayout');
    }
  
    public function add(){
      $iva = new iva();
  
      $iva->setIva($this->getHTTPPOSTParam('iva'));
      $iva->setFecha($this->getHTTPPOSTParam('fecha'));
  
      $iva->save();
  
      $this->redirectToRoute('iva', 'index');
    }
  
    public function edit(){
      $id = $this->getHTTPGETParam('id');
  
      $iva = new iva();
      $iva->load($id);
  
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
