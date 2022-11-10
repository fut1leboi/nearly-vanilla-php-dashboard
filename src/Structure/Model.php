<?php
namespace App\Structure;

use App\Structure\Query;

class Model{

    protected $table;
    protected $fields;
    protected $query_control;

    function __construct(){
        $this->query_control = new Query();
        $this->query_control->connect("db-server:3306", "root", 'password');
        $this->query_control->selectDB('prac_db');
    }

    public function get($condition = null){
        $query = "SELECT * FROM " . $this->table;
        if($condition !== null){
            $processed_condition = array();
            foreach($condition as $key=>$value){
                array_push($processed_condition, "$key='$value'");
            }
            $query .= ' WHERE '. implode(', ', $processed_condition);

        }
        $this->query_control->run($query);
        return $this->query_control->toArray();
    }

    public function remove($id = null){

        $query = "DELETE FROM " .$this->table . " WHERE id=$id";

        $this->query_control->run($query);
        return $this->query_control->result;
    }

    public function insert($data){

        foreach($data as $key=>$item){
            $data[$key] = "'" . $item . "'";
        }

        $query = 'INSERT INTO ' . $this->table . ' (' . implode(', ', $this->fields) . ') VALUES (' . implode(', ', $data) . ')';
        $this->query_control->run($query);
    }

    public function find($id){
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id=' . $id;
        $this->query_control->run($query);
        return $this->query_control->result->fetch_assoc();
    }

    public function update($data, $id = null){
        $new_data = array();
        foreach($data as $field=>$new_value){
            array_push($new_data,"`$field` = '$new_value'");
        }
        $query = 'UPDATE ' . $this->table . ' SET ' . implode(', ',$new_data) . ' WHERE ';
        $query .= $id === null ? 1 : "id=$id";
        return $this->query_control->run($query);
    }
}