<?php 
require_once('../config/config.php');

class ArticleRepository {

    private $pdo;

    public function __construct() {
        // ouverture de la classe et retour du fichier conerné dans le tableau
        $Dbconnexion = new Dbconnexion();
        $this->pdo = $Dbconnexion -> connect();
    }

    public function findArticle($method) {

        // permet de faire une requête SELECT (lire les données du fichier product) sans parametres
        $stmt = $this->pdo->query("SELECT * FROM article ".$method);

        // retourne dans un tableau tous les produits 
        $articles =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $articles;
    }
    public function Add($title,$content,$date) {
        // Préparer la requête d'insertion de la table  (le : permet de définir des paramètres)
        $sql = "INSERT INTO article (title, content, date) VALUES (:title, :content, :date)";
        $stmt = $this->pdo->prepare($sql);
        
        // fonction qui permet de s assurer qu'il n'y a pas de code SQL saisi
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':date', $date);
    
        // Exécuter la requête et message de retour
        return ($stmt->execute());
    }

    public function supprArticle($id) {
         // Préparer la requête de suppression de la table  
         $sql = "DELETE FROM article WHERE `article`.`id` =".$id;
        $stmt = $this->pdo->prepare($sql); 
        
        // Exécuter la requête et message de retour
        return ($stmt->execute());
    }

}


?>
