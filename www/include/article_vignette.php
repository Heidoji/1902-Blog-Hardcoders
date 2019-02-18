<?php
    $sql = 'SELECT * FROM tbl_article a INNER JOIN tbl_color c ON c.id_color = a.id_color ORDER BY date_article LIMIT ' . ($numero_article) . ',' . ($nombre_article);
    $result = mysqli_query($connexion_a_la_bdd, $sql);
    

    for ($i = 0; $i < $nombre_article; $i++) {
        $data_rang = mysqli_fetch_array($result);

        if(isset($data_rang)) {
?>
            <article>
                <img id="article" src="images/<?php echo($data_rang[vignette_article]) ?>" alt="<?php echo($data_rang[nom_article]) ?>" />
                <img class="superpose" src="images/<?php echo($data_rang[cadre_color]) ?>" alt="Cadre" />
                <a href="article.php?numero_article=<?php echo($numero_article) ?>"><img class="superpose filter" src="images/<?php echo($data_rang[filter_color]) ?>" alt="Filtre" /></a>
                <img class="tag" src="images/<?php echo($data_rang[imageTag_article]) ?>" alt="Tag - <?php echo($data_rang[tag_article]) ?>" />
            </article>
<?php
        }
        else {
?>
            <article>
                <img id="article" src="images/icone_defaut.png" alt="icone par defaut" />
                <img class="superpose" src="images/cadre_defaut.png" alt="Cadre" />
            </article>
<?php
        }

        $numero_article += 1;
    }
?>