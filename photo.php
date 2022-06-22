<?php require 'funciones.php';
$conection = connect('gallery_pagination' , 'root' , '');

if(!$conection){
    header('Location: error.php');
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id){
    header('Location: gallery.php');
}

$statement = $conection->prepare('SELECT * FROM urls WHERE id = :id');
$statement->execute(array(':id' => $id));
$photo = $statement->fetch();

if(!$photo){
    header('Location: gallery.php');
}




require 'views/photo.view.php';
?>