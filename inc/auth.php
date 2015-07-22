<?php 
	class Auth {

		static function isLogged() {
			if (isset($_SESSION['Auth']) && isset($_SESSION['Auth']['login']) && isset($_SESSION['Auth']['pass'])) {
				extract($_SESSION['Auth']);

				include 'bdd.php';
				$req = $bdd -> prepare("SELECT id FROM user WHERE login = ? AND pass = ?");
				$req -> execute(array($login, $pass));
				if($req->rowCount()>0) {
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}

		static function cryptPass($p) {
			$p = sha1($p);
			$p = md5($p);
			$p = md5($p);
			$p = sha1($p);
			return $p;
		}
		
	}
?>