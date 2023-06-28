<?php

require_once  './Models/User.php';
require_once './Controllers/Controller.php';

class utilizadoresController extends Controller{ 

  public function index(){
    $this->renderView('utilizadores', 'index', [], 'bolayout');
  }

}
