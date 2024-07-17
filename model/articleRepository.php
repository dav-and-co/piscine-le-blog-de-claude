<?php 
require_once('../config/config.php');

class ArticleRepository {

    private $pdo;

    public function __construct() {
        // ouverture de la classe et retour du fichier conerné dans le tableau
        $Dbconnexion = new Dbconnexion();
        $this->pdo = $Dbconnexion -> connect();
    }

    public function findArticle() {

        // permet de faire une requête SELECT (lire les données du fichier product) sans parametres
        $stmt = $this->pdo->query("SELECT * FROM article ORDER BY date DESC");

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
        if ($stmt->execute()) {
            $result = "Nouveau produit ajouté avec succès";
        } else {
            $result = "Erreur lors de l'ajout du produit";
        }
        return $result;
        }
}


?>
