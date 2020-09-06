<?php
class SessionController{
    private $session;
    public function __construct(){
        $this->session = new UserModel();
    }

    public function login($data){
        return $this->session->validate_user($data);
    }
    public function logaut(){

    }
}