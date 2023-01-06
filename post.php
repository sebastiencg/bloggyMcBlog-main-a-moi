<?php

$id = null;

if(!empty($_GET['id']) && ctype_digit($_GET['id']) ){
    $id = $_GET['id'];
}
if($id){

    require_once('pdo.php');

   $query= $pdo->prepare('SELECT * FROM posts WHERE id=:id');

   $query->execute(["id"=>$id]);

  $post = $query->fetch();


   if(!$post){
       header("Location: index.php");
   }
}
if ($id){
    require_once('pdo.php');

    $con= $pdo->prepare('SELECT * FROM commentaire WHERE commentaire_id=:id ');

    $con->execute(["id"=>$id]);

    $commentaires = $con->fetchAll();
}

ob_start();
require_once("template/post.html.php");
$template= ob_get_clean();
require_once ("template/index.html.php");