<?php require 'inc/auth.php'; ?>

<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
	<header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
		<div class="mdl-layout__header-row">
			<span class="mdl-layout-title">
				<?php 
				if(!isset($_GET['r']) && !isset($_GET['n']) && !isset($_GET['c']) && !isset($_GET['cd']) && !isset($_GET['d']) && !isset($_GET['nd']) && !isset($_GET['li'])) {
					echo "Problème";
				} else if (isset($_GET['r'])) {
					echo "Problème résolu";
				} else if (isset($_GET['n'])) {
					echo "Ajouter";
				} else if (isset($_GET['c'])) {
					echo "Contenu du billet n°".$_GET['c'];
				} else if (isset($_GET['cd'])) {
					echo "Demande de contenu n°".$_GET['cd'];
				} else if (isset($_GET['d'])) {
					echo "Demande de contenu";
				} else if (isset($_GET['nd'])) {
					echo "Ajouter nouvelle demande";
				} else if (isset($_GET['li'])){
					echo "Connexion au panel";
				}
				?>
			</span>
			<div class="mdl-layout-spacer"></div>
			
			<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
				<i class="material-icons">more_vert</i>
			</button>
			<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
				<?php if(Auth::isLogged()) {?>
					<li class="mdl-menu__item"><a href="inc/authen/logout.php">Déconnexion</a></li>
				<?php } else {?>
					<li class="mdl-menu__item"><a href="index.php?li">Panel Administrateur</a></li>
				<?php } ?>
			</ul>
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
		if (!isset($_GET['r']) && !isset($_GET['n']) && !isset($_GET['c']) && !isset($_GET['cd']) && !isset($_GET['d']) && !isset($_GET['nd']) && !isset($_GET['li'])) { ?>
			<div class="mdl-grid demo-content">
				<?php include 'inc/table.php'; ?>
			</div>
		<?php } else if (isset($_GET['r'])) { ?>
			<div class="mdl-grid demo-content">
				<?php include 'inc/res-table.php'; ?>
			</div>
		<?php } else if (isset($_GET['n'])) { ?>
			<div class="mdl-grid demo-content">
				<?php include 'inc/new-form.php'; ?>
			</div>
		<?php } else if (isset($_GET['c'])) { ?>
			<div class="mdl-grid demo-content">
				<?php include 'inc/collaps-content.php'; ?>
			</div>
		<?php } else if (isset($_GET['cd'])) { ?>
			<div class="mdl-grid demo-content">
				<?php include 'inc/collaps-content.php'; ?>
			</div>
		<?php } else if (isset($_GET['d'])) { ?>
			<div class="mdl-grid demo-content">
				<?php include 'inc/table.php'; ?>
			</div>
		<?php } else if (isset($_GET['nd'])) { ?>
			<div class="mdl-grid demo-content">
				<?php include 'inc/new-form.php'; ?>
			</div>
		<?php } else if (isset($_GET['li'])) { ?>
			<div class="mdl-grid demo-content">
				<?php include 'inc/authen/login-form.php'; ?>
			</div>
		<?php } ?>
	</main>
</div>