<?php
    require 'inc/auth.php';
    require 'lang/lang.php';

    if (!isset($_COOKIE['lang'])) {setcookie("lang", "en", time() + 31536000);}
    if (isset($_GET['lang'])) {
        if ($_COOKIE['lang'] != $_GET['lang']) {
            setcookie("lang", $_GET['lang'], time() + 31536000);
            header("Location: index.php");
        }
    }
?>

<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
	<header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
		<div class="mdl-layout__header-row">
			<span class="mdl-layout-title">
				<?php 
				if(!isset($_GET['r']) && !isset($_GET['n']) && !isset($_GET['c']) && !isset($_GET['cd']) && !isset($_GET['d']) && !isset($_GET['nd']) && !isset($_GET['li'])) {
					echo Lang::strLang("act_pb");
				} else if (isset($_GET['r'])) {
                    echo Lang::strLang("res_pb");
				} else if (isset($_GET['n'])) {
                    echo Lang::strLang("add_btn");
				} else if (isset($_GET['c'])) {
                    echo Lang::strLang("bil_content").$_GET['c'];
				} else if (isset($_GET['cd'])) {
                    echo Lang::strLang("dmd_content_num").$_GET['cd'];
				} else if (isset($_GET['d'])) {
                    echo Lang::strLang("dmd_content");
				} else if (isset($_GET['nd'])) {
                    echo Lang::strLang("dmd_content_new");
				} else if (isset($_GET['li'])){
                    echo Lang::strLang("login_form");
				}
				?>
			</span>
			<div class="mdl-layout-spacer"></div>

            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon lang--icon" id="langbtn">
                <i class="material-icons flag-icons"><img src="lang/img/<?php echo $_COOKIE['lang']; ?>.png"/></i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="langbtn">
                <li class="mdl-menu__item flag"><img src="lang/img/en.png"/><a href="index.php?lang=en">English</a></li>
                <li class="mdl-menu__item flag"><img src="lang/img/fr.png"/><a href="index.php?lang=fr">Français</a></li>
            </ul>
			<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
				<i class="material-icons">more_vert</i>
			</button>
			<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
				<?php if(Auth::isLogged()) {?>
					<li class="mdl-menu__item"><a href="inc/authen/logout.php"><?php echo Lang::strLang("logout"); ?></a></li>
				<?php } else {?>
					<li class="mdl-menu__item"><a href="index.php?li"><?php echo Lang::strLang("padmin"); ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</header>
	<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">

		<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
			<a class="mdl-navigation__link" href="index.php"><?php echo Lang::strLang("act_pb"); ?></a>
			<a class="mdl-navigation__link" href="index.php?d"><?php echo Lang::strLang("dmd_content"); ?></a>
			<a class="mdl-navigation__link" href="index.php?r"><?php echo Lang::strLang("res_pb"); ?></a>
			<a class="mdl-navigation__link" href="faq.php"><?php echo Lang::strLang("faq"); ?></a>
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