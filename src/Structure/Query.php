<?php

namespace App\Structure;

class Query{

    private $connection;
    public $result;

    function __construct(){
//        $this->connect("db-server:3306", "root", 'password');
//        $this->selectDB('prac_db');
    }

    public function toArray(){
        $fetchedData = array();
        while($row = $this->result->fetch_assoc()){
            array_push($fetchedData, $row);
        }
        return $fetchedData;
    }

    public function connect($host, $user, $password){
        $this->connection = @mysqli_connect($host, $user, $password);
    }

    public function selectDB($db){
        mysqli_select_db($this->connection,$db);
    }

    public function run($query){
        try{
            $sql = mysqli_query($this->connection, $query);
            $this->result = $sql;
            return $sql;
        }
        catch(\Exception $e){
            die("Error appeared while executing query $query \n" . $e);
        }
    }
}