<form action="install/post/install-post.php" method="post">
    <div class="mdl-grid demo-content marge">
        <div class="mdl-card mdl-shadow--2dp demo-card-wide">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Configuration du serveur web</h2>
            </div>
            <div class="mdl-card__supporting-text">
                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="text" id="sample3" name="site_url" value="<?php echo Url::curUrl(); ?>" required/>
                    <label class="mdl-textfield__label" for="sample3">Url du site</label>
                </div>
<!--                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">-->
<!--                    <input class="list mdl-textfield__input" list="database" required>-->
<!--                    <datalist id="database">-->
<!--                        <option value="MySQL"></option>-->
<!--                        <option value="PostgreSQL"></option>-->
<!--                    </datalist>-->
<!--                    <label class="mdl-textfield__label" for="database">Base de données utilisé</label>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <div class="mdl-grid demo-content marge">
        <div class="mdl-card mdl-shadow--2dp demo-card-wide">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Configuration de la base de données</h2>
            </div>
            <div class="mdl-card__supporting-text">
                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="text" id="sample3" name="db_host" value="localhost" required/>
                    <label class="mdl-textfield__label" for="sample3">Hôte</label>
                </div>
                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="text" id="sample3" name="db_user" required/>
                    <label class="mdl-textfield__label" for="sample3">Nom d'utilisateur</label>
                </div>
                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="password" id="sample3" name="db_pass" />
                    <label class="mdl-textfield__label" for="sample3">Mot de passe</label>
                </div>
                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="text" id="sample3" name="db_name" required/>
                    <label class="mdl-textfield__label" for="sample3">Nom de la base de donnée</label>
                </div>
                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="text" id="sample3" name="db_port" value="3306" required/>
                    <label class="mdl-textfield__label" for="sample3">Mot de passe</label>
                </div>
<!--                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">-->
<!--                    <input class="mdl-textfield__input" type="text" id="sample3" name="db_prefix"/>-->
<!--                    <label class="mdl-textfield__label" for="sample3">Préfixe de la table</label>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <div class="mdl-grid demo-content marge">
        <div class="mdl-card mdl-shadow--2dp demo-card-wide">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Configuration de la base de données</h2>
            </div>
            <div class="mdl-card__supporting-text">
                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="text" id="sample3" name="user" required/>
                    <label class="mdl-textfield__label" for="sample3">Nom d'utilisateur</label>
                </div>
                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="password" id="sample3" name="pass" required/>
                    <label class="mdl-textfield__label" for="sample3">Mot de passe</label>
                </div>
                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="password" id="sample3" name="cpass" required/>
                    <label class="mdl-textfield__label" for="sample3">Confirmer le mot de passe</label>
                </div>
                <div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" type="email" id="sample3" name="mail" required/>
                    <label class="mdl-textfield__label" for="sample3">Adresse mail</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mdl-grid demo-content marge last">
        <div class="mdl-card mdl-shadow--2dp demo-card-wide">
            <div class="center-login">
                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                    Installer
                </button>
            </div>
        </div>
    </div>
</form>
