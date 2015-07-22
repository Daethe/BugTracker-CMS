<?php 
include 'bdd.php';

$req = $bdd -> prepare("UPDATE bug_content SET resolve = 1 WHERE id = ?");

$tab = $_POST['resolve'];
foreach ($tab as $key => $data) {
	$req -> execute(array($key));
}

header("Location: ../index.php");

?>