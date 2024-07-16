<?php require_once('../template/partial/header.php');?>

<main>
    <h1>Liste des matières</h1>
<!-- affichage des données du fichier -->
    <div class="articles">
        <?php foreach ($articles as $article) { ?>
                <article class="articles">
                <?php   echo "<h3>".$article['title']."</h3>";
                        echo "<p>".$article['content']."</p>";
                        $createDate= new DateTime($article['date']);
                        echo "<p> date : ".$createDate->format("l d F Y")."</p>"; ?>
                </article>
                <?php } ?>
</div>


</main>
   
<?php require_once('../template//partial/footer.php');?>