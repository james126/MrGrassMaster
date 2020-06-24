<?php
    function h($string) {    //encodes html reserved characters
      return htmlspecialchars($string);
    }
    function u($string) {
      return urlencode($string);//encodes reserved words in URL parameters
    }

    function is_post_request(){
        return $_SERVER['REQUEST_METHOD'] == 'POST'; //form has been submitted
    }
    function is_get_request(){
        return $_SERVER['REQUEST_METHOD'] == 'GET'; //form hasn't been submitted
    }

    function redirect_to($location) {
      header("Location: " . $location); //sends the contents inside the brackets inside next header file
      exit;
    }
 ?>
