<?php
    //File path constants
    define("PRIVATE_PATH", dirname(__FILE__));  // __FILE__ returns current file path
    define("PROJECT_PATH", dirname(PRIVATE_PATH));  // dirname() returns path to parent directory
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');

    //Root URL
    $public_start = strpos($_SERVER['SCRIPT_NAME'], 'mgm') +3;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_start);
    define("WWW_ROOT", $doc_root); // '/mgm'

    require_once('functions.php');
 ?>
