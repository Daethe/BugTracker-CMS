<?php 
	include '../bdd.php';

	if (isset($_GET['n'])) {
		$titre = $_POST['titre'];
		$link = $_POST['link'];
		$content = $_POST['content'];

		$oFile = $_FILES['filename']['name'];
		$elemDir = pathinfo($oFile);
		$extF = $elemDir['extension'];
		$rep = "../../images/";
		$nameDe = date("YmdHis").".".$extF;
		move_uploaded_file($_FILES["filename"]["tmp_name"], $rep.$nameDe);

		$req = $bdd -> prepare("INSERT INTO `bug_content` (`titre`, `link`, `content`, `linkimg`, `resolve`) VALUES (?, ?, ?, ?, 0)");
		$req -> execute(array($titre, $link, $content, $nameDe));

		header("Location: ../../index.php");

	} else if (isset($_GET['nd'])) {
		$titre = $_POST['titre'];
		$content = $_POST['content'];

		$req = $bdd -> prepare("INSERT INTO `demand_content` (`titre`, `content`) VALUES (?, ?)");
		$req -> execute(array($titre, $content));

		header("Location: ../../index.php?d");
	}
?>