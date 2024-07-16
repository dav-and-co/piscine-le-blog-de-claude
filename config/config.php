<?php

//    permet de donner des infos si erreur
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//    permet de donner un temps max pour les sessions
session_set_cookie_params(3600);


// connexion à la base de donnée avec nom user et mot de passe
$dsn = 'mysql:host=localhost:3306;dbname=piscine_blog_php';
$username = 'root';
$password = 'root';

// permet de retourner un message d erreur si pb de connexion au serveur
try {
    $pdo = new PDO($dsn, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

?>