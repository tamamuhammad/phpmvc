<?php 

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;
    private $db;
    private $result;
    private $rows;
    private $row;

    public function __construct(){
        $this->db = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
    }

    public function query($query){
        $this->result = mysqli_query($this->db, $query);
        return $this->result;
    }

    public function fetch(){
        $this->rows = [];
        while( $this->row = mysqli_fetch_assoc($this->result) ){
            $this->rows[] = $this->row;
        }
        return $this->rows;
    }

    public function single(){
        $this->row = mysqli_fetch_assoc($this->result);
        return $this->row;
    }

    public function rowCount(){
        return mysqli_affected_rows($this->db);
    }
}