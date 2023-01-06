<?php

// se connecter à la DB

//PDO
$adresseServeurMySQL = "localhost";
$nomDeDatabase = "blog";
$username = "bloggy";
$password = "]LhDx@cl6[0tZhxT";

$pdo = new PDO("mysql:host=$adresseServeurMySQL;dbname=$nomDeDatabase",
                    $username,
                    $password,
                    [
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
);

$request = $pdo->query("SELECT * FROM posts");

$posts = $request->fetchAll();

 //print_r($posts);



$input = "rien";

if( !empty($_GET['carotte']) ){

    $input = $_GET['carotte'];
}
ob_start();
require_once("template/posts.html.php");
$template= ob_get_clean();
require_once("template/index.html.php");