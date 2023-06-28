<?php
require_once './Models/Auth.php';
require_once './Controllers/Controller.php';
class authController extends Controller { 
  
  public function index(){
    $this->renderView('auth', 'index', [], 'loginlayout');
  }

  public function login(){
    $username = $this->getHTTPPOSTParam('username');
    $password = $this->getHTTPPOSTParam('password');

    $auth = new Auth();

    if($auth->authCheck($username, $password)){
      $this->redirectToRoute('bo', 'index');
    } else {
      $this->redirectToRoute('auth', 'index');
    }
  } 

  public function logout(){
    $plano = new Auth();

    $plano->logout();
    $this->redirectToRoute('auth', 'index');
  }

}



