<?php 

function connect($table , $name , $pass){
    try{
        $conection = new PDO("mysql:host=localhost;dbname=$table" , "$name" , "$pass");
        return $conection;
    }catch(PDOException $e){
        return false;
    }
}

?>