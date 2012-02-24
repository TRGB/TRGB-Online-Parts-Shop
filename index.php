<?php

  // Include initialisation file
  require_once('inc/initialize.php');
  
  $smarty->debugging = 0;
  
  //$i = explode('/', $_GET['q']); print_r($i); exit;
  
  // Parse URI
  $uri = new URIParser($_GET['q']);
  
  //****************************
  // Catalogue selection page
  //****************************          
  if ($uri->is_index) {

    // SEO Settings
    $smarty->assign('PageTitle', 'TRGB :: Online Parts Shop :: Select Catalogue');
    $smarty->assign('MetaDescription', '');
    $smarty->assign('MetaKeywords', '');  

    // Display page
    $smarty->display('index.tpl');

    exit();
  }
  
  //****************************
  // TR Catalogue
  //****************************          
  if ($uri->catalogue === 'tr-catalogue') {

    // SEO Settings
    $smarty->assign('PageTitle', 'TRGB :: Online Parts Shop :: Triumph TR4, TR4A, TR250, TR5 & TR6 Catalogue');
    $smarty->assign('MetaDescription', '');
    $smarty->assign('MetaKeywords', '');

    // Build Category Array 
    $db = new Database();
    $query = "SELECT category_name FROM categories";
    $results = $db->Query($query);
    $i = array();
    while ($data = mysqli_fetch_assoc($results)) {
      $data['category_permalink'] = to_permalink($data['category_name']);
      $i[] = $data;
    }
    $smarty->assign('Categories', $i);
    unset($i);

    // Get Results
    if (empty($uri->category)) {
      // What will the default category be?
    } else {
      $category_id = $uri->GetCategoryIdFromURI();
      $query = "SELECT part_number, part_name, part_price FROM parts WHERE part_categoryid = $category_id";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['part_permalink'] = to_permalink($data['part_name']);
        $data['part_pricevat'] = ($data['part_price'] * 1.2);
        $i[] = $data;
      }
      $smarty->assign('Parts', $i);
    }

    // Display page
    $smarty->display('results.tpl');
  }

  /*
  
  switch ($_GET['q']) {
      

  
  	//****************************
    // Results page
    //****************************
    case 'tr-catalogue/':
      $smarty->assign('PageTitle', 'TRGB :: Online Parts Shop :: Triumph TR4, TR4A, TR250, TR5 & TR6 Catalogue');     
      
      // Get List of Categories
      $db = new Database();
      $query = "SELECT category_name FROM categories";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['category_permalink'] = to_permalink($data['category_name']);
        $i[] = $data;
      }
      $smarty->assign('Categories', $i);
      
      // Get Parts
      $query = "SELECT part_number, part_name, part_price FROM parts WHERE part_categoryid = 1";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['part_permalink'] = to_permalink($data['part_name']);
        $data['part_pricevat'] = ($data['part_price'] * 1.2);
        $i[] = $data;
      }
      $smarty->assign('Parts', $i);   
      // Display page
      $smarty->display('results.tpl');
    break; 

  }*/
?>