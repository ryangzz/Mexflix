<?php
class ViewController{
    private static $view_path = "./Views/";
    private static $view_path2= "../../Views/";

    public function load_view($view){
        require_once("./Views/templates/header.php");
        if(file_exists(self::$view_path.$view.".php"))      { require_once(self::$view_path.$view.".php");}
        if(file_exists(self::$view_path2.$view.".php"))      { require_once(self::$view_path2.$view.".php");}
    }
}