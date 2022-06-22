<?php require 'funciones.php';
$conection = connect('gallery_pagination' , 'root' , '');

if(!$conection){
    header('Location: error.php');
    die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
    $check = @getimagesize($_FILES['file']['tmp_name']);
    if($check !== false){
        $carpetaDestino = 'IMG/';
        $fileUploades = $carpetaDestino . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'] , $fileUploades);

        $statement = $conection->prepare("INSERT INTO urls(id , title , description , url) VALUES (null , :title , :description , :url) ");
        $statement->execute(array(':title' => $_POST['title'] , ':description'=> $_POST['description'] , ':url'=> $_FILES['file']['name'] ));
    }
}


require 'views/upload.view.php';
?>