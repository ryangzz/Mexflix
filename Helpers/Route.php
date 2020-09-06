<?php
class Route{
    public $route;

    public function __construct($route){
        session_start();
        $view_controller = new ViewController();
        if(empty($_SESSION)){  $_SESSION["status"] = false;}
        if($_SESSION["status"]){
            $view_controller->load_view("home");
        }else{
            #codigo de login y acceso a la app
            if(isset($_POST["email"]) && isset($_POST["pass"])){
                $sesioncontroller = new SessionController();
                $session = $sesioncontroller->login($_POST);
                if(empty($session)){
                    $view_controller->load_view("login");
                }else{
                    $_SESSION["status"]     = true;
                    $_SESSION["user_id"]    = $session["user_id"];
                    $_SESSION["user_name"]  = $session["name"];
                    $_SESSION["user_email"] = $session["email"];
                    $_SESSION["user_date_bith"] = $session["date_bith"];
                    $_SESSION["user_pass"]  = $session["pass"];
                    $_SESSION["user_role"]  = $session["role"];
                    header("Location: ./");
                }
            }else{
                $view_controller->load_view("login");
            }
        }
    }
}