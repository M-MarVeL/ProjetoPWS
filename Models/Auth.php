<?php

Class Auth(){
  
function __construct(){
  session_start();
}


function authCheck(){

// $user = User::
  if(){
    $_SESSION['username'] = 'username';
    return true;
  }
  
  return false;

}

function checkRole(){

  }

function index(){
  if(authCheck($username, $password)){
    redirect('');
  }
}

function isLoggedin(){
  if($_SESSION['username']){
    return true;
  }

  return false;

}

function Logout(){
  session_unset($_SESSION['username']);
}


static function redirect($url){
  header('Location: ' . $url);
  exit();
}

}

