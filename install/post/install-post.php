<?php
require('../class/Url.php');
require('../../inc/auth.php');

$site_url = $_POST['site_url'];

$pass = Auth::cryptPass($_POST['pass']);
$cpass = Auth::cryptPass($_POST['cpass']);

if ($pass == $cpass) {
    $db_host = $_POST['db_host'];
    $db_user = $_POST['db_user'];
    $db_pass = $_POST['db_pass'];
    $db_name = $_POST['db_name'];
    $db_port = $_POST['db_port'];
//    $db_prefix = $_POST['db_prefix'];

    $user = $_POST['user'];

    $content = "<?php try { \$bdd = new PDO('mysql:host=".$db_host."; port=".$db_port."; dbname=".$db_name."; charset=utf8', '".$db_user."', '".$db_pass."');  } catch(Exception \$e) { die('Erreur : '.\$e->getMessage()); } ?>";
    $dest = $_SERVER['REQUEST_URI']."inc";
    $dest = str_replace("install/post/install-post.php", "", $dest);

    Url::cFile($dest, "bdd", "php", $content, "0777");

    include '../sql.php';

    $req = $bdd -> prepare("INSERT INTO `user` (`login`, `pass`) VALUES (?, ?)");
    $req -> execute(array($user, $pass));

    header("Location: ".$site_url."");
} else {
    header("Location: ".$site_url."install.php");
}
