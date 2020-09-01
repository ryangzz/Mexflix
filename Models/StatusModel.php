<?php
require_once("Model.php");

class StatusModel extends Model{
    protected $status_id;
    protected $status_name;
    protected $status_estatus;
    private $table = "proy_status";
    public function create($status = []){
        $sql = "INSERT INTO ".$this->table." (nombre, status) VALUE ('{$status["nombre"]}', '{$status["status"]}')";
        $this->query=$sql;
        $this->set_query();
    }
    public function update($status=[]){
        $sql = "UPDATE ".$this->table." SET nombre='{$status["nombre"]}', status ='{$status["status"]}' WHERE id = {$status['id']}";
        $this->query=$sql;
        $this->set_query();
    }
    public function delete($id = ""){
        $where = ($id =="") ? "" : " WHERE id = $id";
        $sql = "DELETE ".$this->table." ".$where;
        $this->query=$sql;
        $this->set_query();
    }
    public function read($campos ="*", $conditions =""){
        $this->query = "SELECT $campos FROM ".$this->table." $conditions";
        return $this->get_query();
    }
}