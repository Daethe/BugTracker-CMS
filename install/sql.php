<?php
$sqlFileToExecute = '../init_sql.sql';

include '../../inc/bdd.php';

// read the sql file
$f = fopen($sqlFileToExecute,"r+");
$sqlFile = fread($f, filesize($sqlFileToExecute));
$sqlArray = explode(';',$sqlFile);
foreach ($sqlArray as $stmt) {
    if (strlen($stmt)>3 && substr(ltrim($stmt),0,2)!='/*') {
        $req = $bdd -> prepare($stmt);
        $result = $req -> execute();
    }
}
