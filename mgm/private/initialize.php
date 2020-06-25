<?php
    $path =  "https://www." . $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
    $root = substr($path,0, strlen($path)-19);
    define("ROOT", $root); //...mgm/
    define("PUBLIC", $root . "public/"); //...public/
    define("PRIVATE", $root . "private/"); //...private/
    define("SHARED", $root . "private/shared/"); //...private/shared/

    require_once('functions.php');
 ?>
