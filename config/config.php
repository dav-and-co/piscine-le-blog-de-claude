<?php

//    permet de donner des infos si erreur
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//    permet de donner un temps max pour les sessions
session_set_cookie_params(3600);

class Dbconnexion{

    private $dsn;
    private $username;
    private $password;

    function __construct(){
        $this->dsn = 'mysql:host=localhost:3306;dbname=piscine_blog_php';
        $this->username = 'root';
        $this->password = 'root'; 
    }

    public function connect(){
        // connexion à la base de donnée avec nom user et mot de passe
        // permet de retourner un message d erreur si pb de connexion au serveur
        
        try {
            $pdo = new PDO($this->dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
}
?>