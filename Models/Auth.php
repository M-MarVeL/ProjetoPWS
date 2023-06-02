<?php

Class Auth {

  function __construct(){
    if(session_status() != 2) { session_start(); };
  }


  public function authCheck($username, $password){

    $user = User::find_by_username_and_passoword($username, $password);

    if(!is_null($user)){
      setSession($user);
      return true;      
    }

    return false;

  }

  private function setSession($user){
      $_SESSION['auth']['username'] = $user->username;
      $_SESSION['auth']['userid'] = $user->id;
      $_SESSION['auth']['role'] = $user->role;
  }

  function isLoggedin(){
    return isset($_SESSION['auth']);

  }

  public function Logout(){
    // session_unset($_SESSION['auth']);
    session_destroy();
  }

  public function getUsername(){
    if($this->isLoggedin()) { return $_SESSION['auth']['username']; }

    return '';

  }


  public function getUserId(){
    if($this->isLoggedin()) { return $_SESSION['auth']['userid']; }

    return '';
  } 

  public function getUserRole(){
    if($this->isLoggedin()) { return $_SESSION['auth']['role']; }

    return '';
  }

  public function isLoggedInAs($roles=[]){
    if($this->isLoggedin()){ 
      $userRole = $this->getUserRole();
      return in_array($userRole, $roles);
    }
  }
}

