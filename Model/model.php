<?php

class Model{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_items;charset=utf8', 'root', '');
    }

    function getItems(){
        $sentencia = $this->db->prepare( "select * from db_item");
        $sentencia->execute();
        $items = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $items;
    }

    function getCategories(){
        $sentencia = $this->db->prepare( "select * from db_category");
        $sentencia->execute();
        $categories = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }   

    function insertItem($name,$description,$weight,$category){
        $sentencia = $this->db->prepare("INSERT INTO db_item(name_item,description_item, weight_item, category ) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($name,$description,$weight, $category ));
    }

}