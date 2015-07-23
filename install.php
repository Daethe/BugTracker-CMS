<?php require('install/class/Url.php'); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'inc/head.php'; ?>
        <link rel="stylesheet" href="install/install-style.css"/>
        <title>Installation du CMS</title>
    </head>
    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
                <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title">Installation du CMS</span>
                </div>
            </header>
            <main class="mdl-layout__content mdl-color--grey-100">
                <?php
                include 'install/form/site_form.php';
                ?>
            </main>
        </div>
        <script src="js/material.min.js"></script>
    </body>
</html>