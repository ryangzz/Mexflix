<?php
require_once("./Models/StatusModel.php");
class StatusController{
    private $model;

    public function __construct(){
        $this->model = new StatusModel();
    }

    public function create($status = []){
        return $this->model->create($status);
    }
    public function update($status = []){
        return $this->model->update($status);
    }
    public function delete($id = ""){
        return $this->model->delete($id);
    }
    public function read($campos = "*", $conditions=""){
        return $this->model->read($campos, $conditions);
    }
}