<?php

class Lang {

    static function strLang($str) {
        include $_COOKIE['lang'].'/main.php';
        return $lang[$str];
    }

}