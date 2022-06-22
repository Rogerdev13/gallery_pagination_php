<?php require 'funciones.php';

$conection = connect('gallery_pagination' , 'root' , '');

$page = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$postByPage = 8;
$start = ($page > 1) ? ($page * $postByPage - $postByPage) : 0;

$photos = $conection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM urls LIMIT $start , $postByPage ");
$photos->execute();
$photos  = $photos->fetchAll();

if(!$photos){
    header('Location: error.php');
    die();
}

$totalPhotos = $conection->query("SELECT FOUND_ROWS() as total");
$totalPhotos = $totalPhotos->fetch()['total'];

$totalPages = ceil($totalPhotos / $postByPage);




require 'views/gallery.view.php';
?>