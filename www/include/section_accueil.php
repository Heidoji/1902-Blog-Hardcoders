<?php 
	$page = isset($_GET[page]) ? $_GET['page'] : 1;
	$numero_article = ($page - 1) * 10;
?>

<div class="rang">
	<?php
		$nombre_article = 1;
		include 'article_vignette.php';
	?>
</div>
<div class="rang" id="rang_2">
	<?php
		$nombre_article = 3;
		include 'article_vignette.php';
	?>
</div>
<div class="rang" id="rang_3">
	<nav>
		<?php
			if ($page > 1) { 
		?>
				<a href="index.php?page=<?php echo ($page - 1) ?>"><img src="images/precedant.png" alt="page precedante" /></a>
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
	<?php
		$nombre_article = 1;
		include 'article_vignette.php';
	?>
	<article>
	    <img src="images/numero_page.png" alt="numéro de la page" />
	</article>
	<?php
		include 'article_vignette.php';
	?>
	<nav>
		<a href="index.php?page=<?php echo ($page + 1) ?>"><img src="images/suivant.png" alt="page suivante" /></a>
	</nav>
</div>
<div class="rang" id="rang_2">
	<?php
		$nombre_article = 4;
		include 'article_vignette.php';
	?>
</div>
