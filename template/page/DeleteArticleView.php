<!-- ouverture du header -->
<?php require_once('../template/partial/header.php');?>

<main>
    <section class="affichage">

        <h1 class="titreh1">Liste des articles existants</h1>
        <!-- affichage des données du fichier -->
            <div class="deleteArt">
                <?php foreach ($articles as $article) { ?>
                    <article>
                    <?php   echo "<p>".$article['id']."</p>";
                            echo "<p>".$article['title']."</p>";
                            echo "<p>".$article['content']."</p>";
                            $createDate= new DateTime($article['date']);
                            echo "<p> date : ".$createDate->format("l d F Y")."</p>"; ?>
                    </article>
                <?php } ?>
            </div>

    </section>
    <section>
         <!-- sélection de l'article à supprimer -->
         <h1 class="titreh1">Quel numéro d'article voulez vous supprimer ?</h1>

         <form  method="post">
            <div>
                <label > Article à supprimer
                <input type="text" name="suppression">
                </label>
                </div>
            <div>
            <input type="submit" value="supprimer cet article">
            </div>
        </form>

    </section>

   
    
    
</main>

 <!-- ouverture du footer -->  
<?php require_once('../template//partial/footer.php');?>