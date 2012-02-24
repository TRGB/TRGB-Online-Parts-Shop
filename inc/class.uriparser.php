<?php
require_once(INC_PATH.DS."class.database.php");
require_once(INC_PATH.DS."functions.php");

class URIParser {

  private $db;
  private $exploded_uri;
  
  public $is_index = FALSE;
  public $catalogue;
  public $category;
  public $subcategory;
  public $partname;
  
  
/**
* The constructor 
*/     
  function __construct($uri) {
  
    if (empty($uri)) {
      $this->is_index = TRUE;
    } 
    else {
      // Create new Database object
      $this->db = new Database(); 
      // Explode URI into array
      $this->exploded_uri = explode('/', $uri);
      // Get Catalogue
      $this->GetCatalogue();
      // Get Category
      $this->GetCategory();
      // Get Subcategory
      $this->GetSubcategory();
      // Get Part Name
      $this->GetPartName();
    }
    
  }
  
/**
* Get Catalogue
*/ 
  function GetCatalogue() {
    switch ($this->exploded_uri[0]) {
        case 'tr-catalogue':
          $this->catalogue = 'tr-catalogue';
          break;
        case 'herald-spitfire-vitesse-gt6-catlogue':
          $this->catalogue = 'herald-spitfire-vitesse-gt6-catlogue';
          break;
        default:
          // TODO: Log request & do something better that 404-ing them.
          header('HTTP/1.0 404 Not Found');
    }
  }
  
/**
* Get Category
*/ 
  function GetCategory() {
    if (isset($this->exploded_uri[1])) {
      $category_from_exploded_uri = $this->exploded_uri[1];
      // Build array of categories
      $query = "SELECT category_name FROM categories";
      $results = $this->db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $i[] = $data;
      }
      // Convert to permalinks
      $category_permalinks = array();
      foreach ($i as $category) {
        $category_permalinks[] = to_permalink($category['category_name']);
      }
      // Check array to make sure category in uri is valid.
      if (in_array($category_from_exploded_uri, $category_permalinks)) {
        $this->category = $category_from_exploded_uri;
      } else {
        // TODO: Log request & do something better that 404-ing them.
        header('HTTP/1.0 404 Not Found');
      }

    }
  }
  
/**
* Get Subcategory
*/ 
  function GetSubcategory() {

  }
  
/**
* Get Part Name
*/ 
  function GetPartName() {

  }

/**
* Get Category Id 
*/ 
  function GetCategoryIdFromURI() {
    if (isset($this->exploded_uri[1])) {
      $category_from_exploded_uri = $this->exploded_uri[1];
      // Build array of categories
      $query = "SELECT category_name, category_id FROM categories";
      $results = $this->db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $i[] = $data;
      }
      foreach ($i as $categories) {
        if (to_permalink($categories['category_name']) === $category_from_exploded_uri) {
          return $categories['category_id'];
        }
      }
    }
  }



}