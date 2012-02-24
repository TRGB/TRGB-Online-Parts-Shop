<?php

	// Class autoload function

  function __autoload($class_name) {
    $class_name = strtolower($class_name);
    $path = INC_PATH.DS."class.{$class_name}.php";
    if (file_exists($path)) {
      require_once($path);
    } else {
      exit("Autoload error: The file $path could not be found.");
    }
  }
  


  function to_permalink($str) {
    if($str !== mb_convert_encoding( mb_convert_encoding($str, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32') )
     $str = mb_convert_encoding($str, 'UTF-8');
    $str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
    $str = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\\1', $str);
    $str = html_entity_decode($str, ENT_NOQUOTES, 'UTF-8');
    $str = preg_replace(array('`[^a-z0-9]`i','`[-]+`'), '-', $str);
    $str = strtolower( trim($str, '-') );
    return $str;
  }


  
  
?>