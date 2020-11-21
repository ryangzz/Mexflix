<?php
require_once("Model.php");

class UserModel extends Model{
    protected $user_id;
    protected $user_name;
    protected $user_euser;
    private $table = "proy_user";
    public function create($user = []){
        $sql = "INSERT INTO ".$this->table." (name, email, date_bith, pass, role, status)
                VALUE ('{$user["name"]}', '{$user["eamil"]}', '{$user["date_bith"]}', '{$user["pass"]}', '{$user["role"]}', '{$user["status"]}')";
        $this->query=$sql;
        $this->set_query();
    }
    public function update($user=[]){
        $sql = "UPDATE ".$this->table." SET name='{$user["name"]}', email ='{$user["email"]}', date_bith='{$user["date_btih"]}'
                pass='{$user["pass"]}', role='{$user["role"]}' WHERE user_id = {$user['user_id']}";
        $this->query=$sql;
        $this->set_query();
    }
    public function delete($id = ""){
        $where = ($id =="") ? "" : " WHERE user_id = $id";
        $sql = "DELETE ".$this->table." ".$where;
        $this->query=$sql;
        $this->set_query();
    }
    public function read($campos ="*", $conditions =""){
        $this->query = "SELECT $campos FROM ".$this->table." $conditions";
        return $this->get_query();
    }
    public function validate_user($data){
        $sql = "SELECT * FROM ".$this->table." WHERE email='{$data["email"]}' AND pass='{$data["pass"]}'";
        $this->query = $sql;
        return $this->get_query()[0];
    }
}