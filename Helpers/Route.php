<?php
class Route{
    public $route;

    public function __construct($route){
        if(!isset($_SESSION)){  session_start(); $_SESSION["status"] = false;}
        if($_SESSION["status"]){
            #Codigo de la app
            echo "aqui";
        }else{
            #codigo de login
            echo "aca";
        }
    }
}