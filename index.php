<?php

  // Include initialisation file
  require_once('inc/initialize.php');
  
  $smarty->debugging = 0;
         
  // Switch statement for page navigation
  if (empty($_GET['q'])) $_GET['q'] = NULL;
  
  switch ($_GET['q']) {
      
  	//****************************
    // Catalogue selection page
    //****************************
    case NULL:
      $smarty->assign('PageTitle', 'TRGB :: Online Parts Shop :: Select Catalogue');     
      // Display page
      $smarty->display('index.tpl');
    break;  
  
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
        $i[] = $data;
      }
      $smarty->assign('Categories', $i);
      
      // Get Parts
      $query = "SELECT part_number, part_name, part_price FROM parts WHERE part_categoryid = 1";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['part_pricevat'] = ($data['part_price'] * 1.2);
        $i[] = $data;
      }
      $smarty->assign('Parts', $i);   
      // Display page
      $smarty->display('results.tpl');
    break; 
  
  }
?>