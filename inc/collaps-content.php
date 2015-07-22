<?php
	include 'inc/bdd.php';

	if (isset($_GET['c'])) {
		$req = $bdd -> prepare("SELECT * FROM bug_content WHERE id = ?");
		$req -> execute(array($_GET['c']));
		$donnees = $req -> fetch();
		?>
		<div class="mdl-grid demo-content marge-content">
			<div class="mdl-card mdl-shadow--2dp demo-card-wide">
				<div class="mdl-card__title">
					<h2 class="mdl-card__title-text"><?php echo $donnees['titre']; ?></h2>
				</div>
				<div class="mdl-card__supporting-text">
					<?php echo $donnees['content']; ?>
				</div>
				<div class="mdl-card__supporting-text">
					<a href="<?php echo $donnees['link']; ?>"><?php echo $donnees['link']; ?></a>
				</div>
				<div class="mdl-card__supporting-text div-width">
					<img class="img-width" src="images/<?php echo $donnees['linkimg']; ?>">
				</div>
			</div>
		</div>
	<?php } else if (isset($_GET['cd'])) { 
		$req = $bdd -> prepare("SELECT * FROM demand_content WHERE id = ?");
		$req -> execute(array($_GET['cd']));
		$donnees = $req -> fetch();
		?>
		<div class="mdl-grid demo-content marge-content">
			<div class="mdl-card mdl-shadow--2dp demo-card-wide">
				<div class="mdl-card__title">
					<h2 class="mdl-card__title-text"><?php echo $donnees['titre']; ?></h2>
				</div>
				<div class="mdl-card__supporting-text">
					<?php echo $donnees['content']; ?>
				</div>
			</div>
		</div>
	<?php }
?>