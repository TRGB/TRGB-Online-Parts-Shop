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
  
  function rTrimString($string, $num) {
    $array = str_split($string);
    while ($num > 0) {
      array_pop($array);
      $num--;
    }
    $string = '';
    foreach ($array as $key => $value) {
      $string.= $value;
    }
    return $string;
  }
  
  function lTrimString($string, $num) {
    $array = str_split($string);
    while ($num > 0) {
      array_shift($array);
      $num--;
    }
    $string = '';
    foreach ($array as $key => $value) {
      $string.= $value;
    }
    return $string;
  }
  

  function encrypt($string, $key=ENCRYPTION_KEY) 
  { 
      return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
  } 

  function decrypt($string, $key=ENCRYPTION_KEY) 
  { 
      return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
  } 
  
  
?>