<?php
class Autoload{
    public function __construct(){
        spl_autoload_register(function($class_name){
            $models_path      ="./Models/$class_name.php";
            $controllers_path ="./Controllers/$class_name.php";
            $helpers_path     ="./Helpers/$class_name.php";
            $models_path2     ="../../Models/$class_name.php";
            $controllers_path2="../../Controllers/$class_name.php";
            $helpers_path2    ="../../Helpers/$class_name.php";
            $apis_path        ="./Apis/$class_name.php";
            $apis_path2       ="./Apis2/$class_name/$class_name.php";
            if(file_exists($models_path))      { require_once($models_path);}
            if(file_exists($controllers_path)) { require_once($controllers_path);}
            if(file_exists($helpers_path))     { require_once($helpers_path);}
            if(file_exists($models_path2))     { require_once($models_path2);}
            if(file_exists($controllers_path2)){ require_once($controllers_path2);}
            if(file_exists($helpers_path2))    { require_once($helpers_path2);}
            if(file_exists($apis_path))        { require_once($apis_path);}
            if(file_exists($apis_path2))       { require_once($apis_path2);}
        });
    }
}
$autoload = new Autoload();