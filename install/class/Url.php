<?php

class Url {

    static function curUrl() {
        $url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $url = str_replace("install.php", "", $url);
        return $url;
    }

    static function cFile($fChe, $fName, $fExt, $fContent, $droit="") {
        $fCheComplet = Url::root().$fChe."/".$fName;
        if($fExt!=""){
            $fCheComplet = $fCheComplet.".".$fExt;
        }

        $leFichier = fopen($fCheComplet, "wb");
        fwrite($leFichier,$fContent);
        fclose($leFichier);

        if($droit==""){
            $droit="0777";
        }

        $t_infoCreation['fichierCreer'] = false;
        if(file_exists($fCheComplet)==true){
            $t_infoCreation['fichierCreer'] = true;
        }

        $retour = chmod($fCheComplet,intval($droit,8));
        $t_infoCreation['permissionAppliquer'] = $retour;
    
        return $t_infoCreation;
    }

    static function root() {
        $a[] = explode("/", $_SERVER["DOCUMENT_ROOT"]);
        $d = "";
        for ($i = 0; $a[0][$i] != NULL; $i++) {
            if ($a[0][$i+1] != NULL) {
                $d .= $a[0][$i]."/";
            } else {
                $d .= "".$a[0][$i];
            }
        }
        return $d;
    }

}