<?php 
class RutasAmigables{
    public $parametro1;
    public $parametro2;
    public $parametro3;

    public function __construct(bool $_parametro1, bool $_parametro2, bool $_parametro3){
        $this->parametro1 = ($_parametro1) ? "home": $_GET["param1"];
        $this->parametro2 = ($_parametro2) ? "vacio"    : $_GET["param2"];
        $this->parametro3 = ($_parametro3) ? "vacio"    : $_GET["param3"];
    }
}