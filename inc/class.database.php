<?php
require_once(INC_PATH.DS."config.php");

class Database {
  
  public $link;
  
  private $error_reporting = TRUE;
  
/**
* The constructor 
*/     
  function __construct() {
    $this->Open();
  }

/**
* Connect to the database
*/ 
  function Open() {
    $link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    if ($link) $this->link = $link;
    else $this->HandleError();
  }

/**
* Query the database
*/ 

  function Query($query) {
    $result = mysqli_query($this->link, $query);
    if ($result) return $result;
    else $this->HandleError();
  }

/**
* Handle errors
*/ 
  function HandleError() {
    // This handles MySQL errors except connection errors
    if ($this->error_reporting == TRUE && $this->link != NULL) {
      echo "Error: " . mysqli_error($this->link);
    }
    // This handles connection errors
    elseif ($this->error_reporting == TRUE && $this->link == NULL) {
      echo "Error: " . mysqli_connect_error();
    }
    else {
      // Do something when an error occus but error_reporting is off
    }
  }

/**
* Close the database
*/ 
  function Close() {
    if (mysqli_close($this->link) == FALSE) {
      $this->HandleError();
    }
  }


}