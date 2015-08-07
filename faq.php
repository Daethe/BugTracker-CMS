<?php
	include 'inc/bdd.php';
	require 'lang/lang.php';
?>

<!doctype html>
<html lang="fr">
	<head>
		<?php include 'inc/head.php'; ?>
	</head>
<body>
	<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">
					Foire aux questions
				</span>
				<div class="mdl-layout-spacer"></div>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
			<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
				<a class="mdl-navigation__link" href="index.php">Problème</a>
				<a class="mdl-navigation__link" href="index.php?d">Demande de contenu</a>
				<a class="mdl-navigation__link" href="index.php?r">Problème résolu</a>
				<a class="mdl-navigation__link" href="faq.php">Foire aux questions</a>
			</nav>
		</div>
		<main class="mdl-layout__content mdl-color--grey-100">
			<?php
				$req = $bdd -> prepare("SELECT * FROM faq");
				$req -> execute();

				while ($donnees = $req->fetch()) {?>
				<div class="mdl-grid demo-content marge">
					<div class="mdl-card mdl-shadow--2dp demo-card-wide">
						<div class="mdl-card__title">
							<h2 class="mdl-card__title-text"><?php echo $donnees['question']; ?></h2>
						</div>
						<div class="mdl-card__supporting-text">
							<?php echo $donnees['answer']; ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</main>
	</div>
	<?php include 'inc/svg.php'; ?>
	<script src="js/material.min.js"></script>
</body>
</html>