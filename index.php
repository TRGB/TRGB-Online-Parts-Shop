<?php

  // Include initialisation file
  require_once('inc/initialize.php');
  
  $smarty->debugging = 0;
        
  // Switch statement for page navigation
  if (empty($_GET['page'])) $_GET['page'] = NULL;
  
  switch ($_GET['page']) {
      
  	//************************
    // Home Page
    //************************
    case NULL:
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue');     
      // Display page
      $smarty->display('index.tpl');
    break;  
    
  	//************************
    // Accessories
    //************************
    case 'accessories':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Accessories');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 1";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Accessories');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;  
    
  	//************************
    // Books
    //************************
    case 'books':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Books');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 2";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Books');
      
      // Display Page
      $smarty->display('listings.tpl');
    break; 
    
  	//************************
    // Bumbers
    //************************
    case 'bumpers':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Bumpers');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 3";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Bumpers');
      
      // Display Page
      $smarty->display('listings.tpl');
    break; 
    
  	//************************
    // Cables
    //************************
    case 'cables':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Cables');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 4";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Cables');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Brake and Clutch Hydraulics
    //************************
    case 'brake-and-clutch-hydraulics':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Brake and Clutch Hydraulics');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 5";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Brake and Clutch Hydraulics');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Clips and Fasteners
    //************************
    case 'clips-and-fasteners':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Clips and Fasteners');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 6";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Clips and Fasteners');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
  
  	//************************
    // Chrome Mirrors and Fittings
    //************************
    case 'chrome-mirrors-and-fittings':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Chrome Mirrors and Fittings');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 7";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Chrome Mirrors and Fittings');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Engines and Components
    //************************
    case 'engines-and-components':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Engines and Components');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 8";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Engines and Components');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Re-Chroming Service
    //************************
    case 're-chroming-service':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Re-Chroming Service');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 9";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Re-Chroming Service');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Fuel System
    //************************
    case 'fuel-system':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Fuel System');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 10";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Fuel System');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Hoods, Hoodbags and Tonneaus
    //************************
    case 'hoods-hoodbags-and-tonneaus':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Hoods, Hoodbags and Tonneaus');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 11";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Hoods, Hoodbags and Tonneaus');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Interior Trim
    //************************
    case 'interior-trim':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Interior Trim');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 12";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Interior Trim');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Lights and Electrical
    //************************
    case 'lights-and-electrical':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Lights and Electrical');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 13";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Lights and Electrical');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Chassis and Bodywork
    //************************
    case 'chassis-and-bodywork':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Chassis and Bodywork');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 14";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Chassis and Bodywork');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Radiators and Cooling
    //************************
    case 'radiators-and-cooling':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Radiators and Cooling');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 15";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Radiators and Cooling');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Rubber Seals/Finishers
    //************************
    case 'rubber-seals-finishers':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Rubber Seals/Finishers');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 16";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Rubber Seals/Finishers');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Service Items
    //************************
    case 'service-items':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Service Items');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 17";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Service Items');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Steering and Suspension
    //************************
    case 'steering-and-suspension':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Steering and Suspension');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 18";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Steering and Suspension');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Starter/Dynamo/Alternator
    //************************
    case 'starter-dynamo-alternator':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Starter/Dynamo/Alternator');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 19";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Starter/Dynamo/Alternator');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Transmission and Clutch
    //************************
    case 'transmission-and-clutch':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Transmission and Clutch');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 20";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Transmission and Clutch');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Wipers, Washers and Glass
    //************************
    case 'wipers-washers-and-glass':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Wipers, Washers and Glass');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 21";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Wipers, Washers and Glass');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Exhausts
    //************************
    case 'exhausts':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Exhausts');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 22";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Exhausts');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Chemicals
    //************************
    case 'chemicals':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Chemicals');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 23";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Chemicals');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Badges and Motifs
    //************************
    case 'badges-and-motifs':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Badges and Motifs');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 24";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Badges and Motifs');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Wheels and Body Fittings
    //************************
    case 'wheels-and-body-fittings':
      $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Wheels and Body Fittings');     
      
      // Get Parts      
      $db = new Database();
      $query = "SELECT * FROM parts WHERE part_categoryid = 25";
      $results = $db->Query($query);
      $i = array();
      while ($data = mysqli_fetch_assoc($results)) {
        $data['serial'] = urlencode(encrypt($data['part_number']));
        $i[] = $data;
      }
      $smarty->assign('PartListings', $i);
      $smarty->assign('Heading', 'Wheels and Body Fittings');
      
      // Display Page
      $smarty->display('listings.tpl');
    break;
    
  	//************************
    // Basket
    //************************
    case 'basket':
      switch ($_GET['function']) {
      
        case 'add':
          $part_number = decrypt(lTrimString($_SERVER['REQUEST_URI'], 18));
          if (empty($_SESSION['basket']["$part_number"])) $_SESSION['basket']["$part_number"] = 1;
          else $_SESSION['basket']["$part_number"]++;
          // If this redirection doesn't work - check that the /basket/add rule is higher in priority than the
          // /basket rule in cherokee-admin
          header("Location: /parts/basket/");
        break;
        
        case 'remove':
          $part_number = decrypt(lTrimString($_SERVER['REQUEST_URI'], 21));
          if (!empty($_SESSION['basket']["$part_number"])) unset($_SESSION['basket']["$part_number"]);
          // If this redirection doesn't work - check that the /basket/add rule is higher in priority than the
          // /basket rule in cherokee-admin
          header("Location: /parts/basket/");
        break;
        
        case 'subtract':
          $part_number = decrypt(lTrimString($_SERVER['REQUEST_URI'], 23));
          if (!empty($_SESSION['basket']["$part_number"])) $_SESSION['basket']["$part_number"]--;
          // If this redirection doesn't work - check that the /basket/add rule is higher in priority than the
          // /basket rule in cherokee-admin
          header("Location: /parts/basket/");
        break;
        
        case 'view':
          $db = new Database();
          $ids = '';
          foreach ($_SESSION['basket'] as $key => $value) {
            $ids.= "'$key', ";
          }
          $ids = rTrimString($ids, 2);
          $query = "SELECT * FROM parts WHERE part_number IN ($ids) ORDER BY FIELD (part_number,$ids)";
          $results = $db->Query($query);
          $i = array();
          $price_total = 0;
          while ($data = mysqli_fetch_assoc($results)) {
            $data['quantity'] = $_SESSION['basket']["{$data['part_number']}"];
            $price_total = $price_total + ($data['part_price'] * $data['quantity']);
            $data['serial'] = urlencode(encrypt($data['part_number']));
            $i[] = $data;
          } 
          $vat_amount = ($price_total / 100) * 20;
          $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Your Basket'); 
          $smarty->assign('TotalPrice', number_format($price_total,2));
          $smarty->assign('VATAmount', number_format($vat_amount,2));
          $smarty->assign('TotalPlusVAT', number_format(($price_total + $vat_amount),2));  
          $smarty->assign('BasketContents', $i);
          $smarty->assign('Heading', 'Your Basket');
          $smarty->display('basket.tpl');
        break;
        
        case 'placeorder':
          $smarty->assign('PageTitle', 'TRGB Parts Catalogue - Place Order');
          $smarty->assign('Heading', 'Place Order');
          $smarty->display('placeorder.tpl');
        break;
        
        case 'submit':
        
          // Map Fields
          $first_name = $_POST['Field15'];
          $last_name = $_POST['Field16'];
          $address_line1 = $_POST['Field3'];
          $address_line2 = $_POST['Field4'];
          $city = $_POST['Field5'];
          $county = $_POST['Field6'];
          $postcode = $_POST['Field7'];
          $country = $_POST['Field8'];
          $email = $_POST['Field9'];
          $phone = $_POST['Field10'];
          
          $db = new Database();
          $ids = '';
          foreach ($_SESSION['basket'] as $key => $value) {
            $ids.= "'$key', ";
          }
          $ids = rTrimString($ids, 2);
          $query = "SELECT * FROM parts WHERE part_number IN ($ids) ORDER BY FIELD (part_number,$ids)";
          $results = $db->Query($query);
          $i = array();
          $price_total = 0;
          while ($data = mysqli_fetch_assoc($results)) {
            $data['quantity'] = $_SESSION['basket']["{$data['part_number']}"];
            $price_total = $price_total + ($data['part_price'] * $data['quantity']);
            $data['serial'] = urlencode(encrypt($data['part_number']));
            $i[] = $data;
          } 
          $vat_amount = ($price_total / 100) * 20;
          
            
          $text = "-------------------------------------------------------------\n";
          $text.= "                     TRGB Parts Order                        \n";
          $text.= "-------------------------------------------------------------\n";
          $text.= "\n";
          $text.= "  $first_name $last_name\n";
          $text.= "  $address_line1, $address_line2\n";
          $text.= "  $city, $county\n";
          $text.= "  $postcode, $country\n";
          $text.= "\n";
          $text.= "  Email: $email\n";
          $text.= "  Phone: $phone\n";
          $text.= "\n";
          $text.= "-------------------------------------------------------------\n";
          $text.= "                     Parts Requested                         \n";
          $text.= "-------------------------------------------------------------\n";
          $text.= "\n";
          foreach ($i as $key => $value) {
          $text.= "  Part Number: {$value['part_number']}\n";
          $text.= "  Description: {$value['part_name']}\n";
          $text.= "  Price:       {$value['part_price']} GBP\n";
          $text.= "  Quantity:    {$value['quantity']}\n";
          $text.= "\n";
          $text.= "-------------------------------------------------------------\n";
          $text.= "\n";
          }
          $text.= "\n";
          $text.= "******************************************\n";
          $text.= "  SUBTOTAL: $price_total GBP\n";
          $text.= "  VAT:      ".number_format($vat_amount,2)." GBP\n";
          $text.= "  TOTAL:    ".number_format(($price_total + $vat_amount),2)." GBP\n";
          $text.= "******************************************\n";        
         
          
          require_once '/var/www/inc/swiftmail/lib/swift_required.php';

          //Create the Transport
          $transport = Swift_SmtpTransport::newInstance('smtp.postmarkapp.com', 25)
            ->setUsername('83bf6dae-4df7-4d77-897a-2af7796a9a9e')
            ->setPassword('83bf6dae-4df7-4d77-897a-2af7796a9a9e')
            ;

          //Create the Mailer using your created Transport
          $mailer = Swift_Mailer::newInstance($transport);

          //Create a message
          $message = Swift_Message::newInstance('Website Order')
            ->setFrom(array('andrew@cbtech.co.uk' => 'Andrew Phillips'))
            ->setTo(array('andrew@cbtech.co.uk'))
            // ->setTo(array('trgbltd@btconnect.com'))
            ->setBody($text)
            ;
            
          //Send the message
          $result = $mailer->send($message);     
          $smarty->assign('Heading', 'Thank You');
          $smarty->display('thankyou.tpl');                  
          
        break;
      
      }
 
    break;
  
  }
?>