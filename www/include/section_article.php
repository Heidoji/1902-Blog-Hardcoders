<?php
    include_once './bdd/db_connexion.php';

    $numero_article = isset($_GET['numero_article']) ? $_GET['numero_article'] : "";
    $numero_article = mysqli_real_escape_string($connexion_a_la_bdd, $numero_article);

    $sql = 'SELECT * FROM tbl_article a INNER JOIN tbl_color c ON c.id_color = a.id_color ORDER BY date_article LIMIT ' . ($numero_article) . ',1';
    $result = mysqli_query($connexion_a_la_bdd, $sql);
    $data_article = mysqli_fetch_array($result);

    $sql = 'SELECT * FROM tbl_commentaire c INNER JOIN tbl_utilisateur u ON u.id_utilisateur = c.id_utilisateur WHERE id_article="' . $numero_article . '";';
    $result = mysqli_query($connexion_a_la_bdd, $sql);
?>
    <div class="rang" id="article_titre">
        <article>
            <img id="article" src="images/<?php echo($data_article[image_article]) ?> " alt="photo de l'article" />
            <img class="superpose" src="images/article_cadre_photo.png" alt="cadre de la photo de l'article" />
            <img class="cadre" src="images/article_cadre.png" alt="cadre du titre" />
        </article>
    </div>
    <div class="rang" id="article_nav">
        <nav>
            <?php
                if ($numero_article > 0) { 
            ?>
                    <a href="article.php?numero_article=<?php echo ($numero_article - 1) ?>"><img src="images/precedant.png" alt="page precedante" /></a>
            <?php
                }
                else {
            ?>
                    <img id="article" src="images/icone_defaut.png" alt="icone par defaut" />
                    <img class="superpose" src="images/cadre_defaut.png" alt="cadre" />
            <?php
                }
            ?>
        </nav>
        <nav>
            <a href="article.php?numero_article=<?php echo ($numero_article + 1) ?>"><img src="images/suivant.png" alt="page suivante" /></a>
        </nav>
    </div>
    <div class="rang" id="article_corps">
        <article>
            <img id="article" src="images/article_bordure_top.png" alt="bordure du haut" />
            <img class="cadre" src="images/article_cadre.png" alt="cadre du titre" />
        </article>
    </div>
    <div class="rang" id="article_text">
	<?php 
	    echo $data_article['texte_article'];
	?>
    </div>
     <div class="rang" id="cadre_bas">
        <img src="images/article_bordure_bottom.png" alt="bordure du bas" />
    </div>
    <div class="rang" id="article_nav">
        <nav>
            <img src="images/pseudo.png" alt="Auteur de l'article" />
        </nav>
        <nav>
            <img src="images/date.png" alt="Date de l'article" />
        </nav>
    </div>
    <div class="rang" id="article_corps">
        <article>
            <img id="article" src="images/article_bordure_top.png" alt="bordure du haut" />
            <img class="cadre" src="images/article_commentaire.png" alt="cadre du titre" />
        </article>
    </div>
    <div class="rang" id="article_text">
	<?php 
	    while ($data_commentaire = mysqli_fetch_array($result)) {
		echo '<p>';
		echo $data_commentaire['pseudo_utilisateur'] . " le " . date('d/m/Y H:m:s', strtotime($data_commentaire['date_commentaire']));
		echo '</p>';
		echo '<p>';
		echo $data_commentaire['texte_commentaire'];
		echo '</p>';
		echo '<br />';
	    }
	?>
    </div>
     <div class="rang" id="cadre_bas">
        <img src="images/article_bordure_bottom.png" alt="bordure du bas" />
    </div>
    <footer class="rang" id="article_about">
        <?php include "footer.php" ?>
    </footer>
