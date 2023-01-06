<?php
$commentaire = null;
$commentaire_id= null;

if(!empty($_POST['$commentaire_id'])){
    if(ctype_digit($_POST['$commentaire_id'])){
        $commentaire_id= $_POST['$commentaire_id'];
    }
    else{
        echo "arret ça";
    }
}

if(!empty($_POST['commentaire']) && !empty($commentaire_id)){
    $commentaire = $_POST['commentaire'];

    require_once("pdo.php");
    $request = $pdo->prepare('INSERT INTO commentaire SET commentaire = :commentaire, commentaire_id= :commentaire_id ');

    $request->execute([
        "commentaire"=>$commentaire,
        "commentaire_id"=>$commentaire_id
    ]);

    header('Location: post.php?id='.$commentaire_id);

}



