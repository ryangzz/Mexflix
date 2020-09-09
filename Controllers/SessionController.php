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
        session_start();
        session_unset();
        session_destroy();
        header('Location: ./');
    }
}