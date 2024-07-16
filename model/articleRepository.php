<?php 
require_once('../config/config.php');

class ArticleRepository {
    public function findArticle() {

    // ouverture de la classe et retour du fichier conerné dans le tableau
    $Dbconnexion = new Dbconnexion();
    $pdo = $Dbconnexion -> connect();

    // permet de faire une requête SELECT (lire les données du fichier product) sans parametres
    $stmt = $pdo->query("SELECT * FROM article");

    // retourne dans un tableau tous les produits 
    $articles =  $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $articles;
    }
}
?>
