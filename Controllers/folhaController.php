<?php

require_once './Models/folha.php';
require_once './Controllers/Controller.php';

class folhaController extends Controller {
  
  public function index(){
    $this -> renderView('folha', 'index', [], 'bolayout');
  }

}
