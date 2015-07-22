<?php 
session_start();

if (isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])) {
	extract($_POST);

	require("../auth.php");
	$pass = Auth::cryptPass($pass);

	include '../bdd.php';

	$req = $bdd -> prepare("SELECT id FROM user WHERE login = ? AND pass = ?");
	$req -> execute(array($login, $pass));
	if($req->rowCount()>0) {
		$_SESSION['Auth'] = array('login' => $login, 'pass' => $pass);
		header("Location: ../../index.php");
	} else {
		header("Location: ../../index.php?err");
	}
}

?>