<!-- ouverture du header -->
<?php require_once('../template/partial/header.php');?>

<main>
    <section class="affichage">
        <div>  
        <h1 class="titreh1">Liste des articles existants</h1>
        <!-- affichage des données du fichier -->
            <div class="articles">
                <?php foreach ($articles as $article) { ?>
                    <article class="article">
                    <?php   echo "<h3>".$article['title']."</h3>";
                            echo "<p>".$article['content']."</p>";
                            $createDate= new DateTime($article['date']);
                            echo "<p> date : ".$createDate->format("l d F Y")."</p>"; ?>
                    </article>
                <?php } ?>
            </div>
        </div>
    </section> 
 </main>

 <!-- ouverture du footer -->  
<?php require_once('../template//partial/footer.php');?>