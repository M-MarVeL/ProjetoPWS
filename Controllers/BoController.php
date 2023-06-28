<?php

require_once './Models/Auth.php';
require_once './Controllers/Controller.php';

 class BoController extends Controller { 

   public function index(){
     $this->renderView('bo', 'index', [], 'bolayout');
   }
}
