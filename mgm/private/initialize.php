<?php
    $path =  "https://www." . $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
    $root = substr($path,0, strlen($path)-16);
    define("ROOT", $root, true); //...mgm/
    define("PUBLIC", $root . "public/", true); //...public/
    define("PRIVATE", $root . "private/", true); //...private/
    define("SHARED", $root . "private/shared/", true); //...private/shared/

    require_once('functions.php');
 ?>
