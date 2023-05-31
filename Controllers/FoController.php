<?php
require_once './Models/Auth.php';
require_once './Controllers/Controller.php';
class FoController extends Controller {

  public function index(){
    $this->renderView('fo', 'index');
  }

}
