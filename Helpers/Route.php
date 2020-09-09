<?php
class Route{
    public $route;

    public function __construct($route){
        $this->route=$route;
        session_start();
        $view_controller = new ViewController();
        $sesioncontroller = new SessionController();
        if(empty($_SESSION)){  $_SESSION["status"] = false;}
        if($_SESSION["status"]){
            switch ($this->route->parametro1) {
                case 'movieserie':
                case 'actores':
                case 'directores':
                case 'generos':
                case 'paises':
                case 'estatus':
                default:
                    $view_controller->load_view("navbar");
                    $view_controller->load_view("layout");
                break;
            }
            switch ($this->route->parametro1) {
                case 'home':
                    $view_controller->load_view("home");
                break;
                case 'movieserie':
                    $view_controller->load_view("movieserie");
                break;
                case 'actores':
                    $view_controller->load_view("actores");
                break;
                case 'directores':
                    $view_controller->load_view("directores");
                break;
                case 'generos':
                    $view_controller->load_view("generos");
                break;
                case 'paises':
                    $view_controller->load_view("paises");
                break;
                case 'estatus':
                    $view_controller->load_view("estatus");
                break;
                case 'salir':
                    $sesioncontroller->logaut();
                break;
                default:
                    $view_controller->load_view("404");
                break;
            }
        }else{
            #codigo de login y acceso a la app
            if(isset($_POST["email"]) && isset($_POST["pass"])){
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
        require_once("./Views/templates/footer.php");
    }
}