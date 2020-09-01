<?php
abstract class Model{
    private static $db_host = "localhost";
    private static $db_user = "root";
    private static $db_pass = "";
    private static $db_charset = "utf8";
    private $con;
    protected $db_name = "mexflix";
    protected $query;
    protected $rows =[];

    abstract protected function create();
    abstract protected function update();
    abstract protected function delete();
    abstract protected function read();

    private function db_open(){
        $this->con = new mysqli(self::$db_host, 
                                self::$db_user, 
                                self::$db_pass, 
                                $this->db_name);
        $this->con->set_charset(self::$db_charset);
    }
    private function db_close(){
        $this->con->close();
    }

    protected function set_query(){
        $this->db_open();
        $this->con->query($this->query);
        $this->db_close();
    }

    protected function get_query(){
        $this->db_open();
        $result = $this->con->query($this->query);
        while($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->db_close();
        array_pop($this->rows);
        return $this->rows;
    }
}