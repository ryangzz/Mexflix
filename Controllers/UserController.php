<?php
require_once("./Models/UserModel.php");
class UserController{
    private $model;

    public function __construct(){
        $this->model = new UserModel();
    }

    public function create($user = []){
        return $this->model->create($user);
    }
    public function update($user = []){
        return $this->model->update($user);
    }
    public function delete($id = ""){
        return $this->model->delete($id);
    }
    public function read($campos = "*", $conditions=""){
        return $this->model->read($campos, $conditions);
    }
}