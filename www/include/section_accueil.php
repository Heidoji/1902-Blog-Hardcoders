<?php 
    $page = 1;
    
    $sql = 'SELECT * FROM tbl_article a INNER JOIN tbl_color c ON c.id_color = a.id_color WHERE id_article = "' . ($page - 1) * 10 + 1 . '";';
    $result = mysqli_query($connexion_a_la_bdd, $sql);
    $data_rang1 = mysqli_fetch_array($result);
?>

<div class="rang">
	<article>
	    <img id="article" src="images/vignette/article1.png" alt="Cisco 1941" />'
	    <img class="superpose" src="images/filtre_cadre/cadre_reseau.png" alt="Cadre Serveur" />
	    <a href="article.php?numero_article=1"><img class="superpose filter" src="images/filtre_cadre/filtre_reseau.png" alt="Filtre Serveur" /></a>
	    <img class="tag" src="images/article1_tag.png" alt="Tag - Cisco" />
	</article>
</div>
<div class="rang" id="rang_2">
	<article>
	    <img id="article" src="images/vignette/article2.png" alt="Albert Camus - Le premier homme" />
	    <img class="superpose" src="images/filtre_cadre/cadre_livre.png" alt="Cadre Livre" />
	    <a href="article.php?numero_article=2"><img class="superpose" src="images/filtre_cadre/filtre_livre.png" alt="Filtre Livre" /></a>
	    <img class="tag" src="images/article2_tag.png" alt="Tag - Camus" />
	</article>
	<article>
	    <img id="article" src="images/vignette/article3.png" alt="Le clavier avec l'arduino" />
	    <img class="superpose" src="images/filtre_cadre/cadre_electro.png" alt="Cadre Electronique" />
	    <a href="article.php?numero_article=3"><img class="superpose" src="images/filtre_cadre/filtre_electro.png" alt="Filtre Electronique" /></a>
	    <img class="tag" src="images/article3_tag.png" alt="Tag - Clavier" />
	</article>
	<article>
	    <img id="article" src="images/vignette/article4.png" alt="Le système KNX" />
	    <img class="superpose" src="images/filtre_cadre/cadre_domo.png" alt="Cadre Domotique" />
	    <a href="article.php?numero_article=4"><img class="superpose" src="images/filtre_cadre/filtre_domo.png" alt="Filtre Domotique" /></a>
	    <img class="tag" src="images/article4_tag.png" alt="Tag - KNX" />
	</article>
</div>
<div class="rang" id="rang_3">
	<nav>
	    <img src="images/precedant.png" alt="page precedante" />
	</nav>
	<article>
	    <img id="article" src="images/vignette/article5.png" alt="Serveur DNS avec le Rapsberry Pi 3" />
	    <img class="superpose" src="images/filtre_cadre/cadre_reseau.png" alt="Cadre Serveur" />
	    <a href="article.php?numero_article=5"><img class="superpose" src="images/filtre_cadre/filtre_reseau.png" alt="Filtre Serveur" /></a>
	    <img class="tag" src="images/article5_tag.png" alt="Tag - Rapsberry" />
	</article>
	<article>
	    <img src="images/numero_page.png" alt="numéro de la page" />
	</article>
	<article>
	    <img id="article" src="images/vignette/article6.png" alt="ALU" />
	    <img class="superpose" src="images/filtre_cadre/cadre_electro.png" alt="Cadre Electronique" />
	    <a href="article.php?numero_article=6"><img class="superpose" src="images/filtre_cadre/filtre_electro.png" alt="Filtre Electronique" /></a>
	    <img class="tag" src="images/article6_tag.png" alt="Tag - ALU" />
	</article>
	<nav>
	    <img src="images/suivant.png" alt="page suivante" />
	</nav>
</div>
<div class="rang" id="rang_2">
	<article>
	    <img id="article" src="images/vignette/article7.png" alt="Joseph Kessel - L'équipage" />
	    <img class="superpose" src="images/filtre_cadre/cadre_livre.png" alt="Cadre Livre" />
	    <a href="article.php?numero_article=7"><img class="superpose" src="images/filtre_cadre/filtre_livre.png" alt="Filtre Livre" /></a>
	    <img class="tag" src="images/article7_tag.png" alt="Tag - L'équipage" />
	</article>
	<article>
	    <img id="article" src="images/vignette/article8.png" alt="Test de la toupie" />
	    <img class="superpose" src="images/filtre_cadre/cadre_bois.png" alt="Cadre Bois" />
	    <a href="article.php?numero_article=8"><img class="superpose" src="images/filtre_cadre/filtre_bois.png" alt="Filtre Bois" /></a>
	    <img class="tag" src="images/article8_tag.png" alt="Tag - Toupie" />
	</article>
	<article>
	    <img id="article" src="images/vignette/article9.png" alt="Robert Merle - La mort est mon métier" />
	    <img class="superpose" src="images/filtre_cadre/cadre_livre.png" alt="Cadre Livre" />
	    <a href="article.php?numero_article=9"><img class="superpose" src="images/filtre_cadre/filtre_livre.png" alt="Filtre Livre" /></a>
	    <img class="tag" src="images/article9_tag.png" alt="Tag - R. Merle" />
	</article>
	<article>
	    <img id="article" src="images/vignette/article10.png" alt="DTH22 - Test" />
	    <img class="superpose" src="images/filtre_cadre/cadre_electro.png" alt="Cadre Electronique" />
	    <a href="article.php?numero_article=10"><img class="superpose" src="images/filtre_cadre/filtre_electro.png" alt="Filtre Electronique" /></a>
	    <img class="tag" src="images/article10_tag.png" alt="Tag - DTH22" />
	</article>
</div>
