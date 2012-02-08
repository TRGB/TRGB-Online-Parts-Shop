<!DOCTYPE html>
<html lang="en-gb">

  <head>
    <meta charset="utf-8">
    <title>TRGB :: Online Parts Shop</title>
    <meta name="description" content="">
    <meta name="author" content="Andrew Phillips <andrew@cbtech.co.uk>">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/trgbstyle.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
  </head>

  <body>
    
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#" style="font-family: 'Open Sans', sans-serif; line-height: 30px;">
            TRGB Online Parts Shop
          </a>
          <form class="navbar-search pull-right">
            <?php /*
            <input type="text" class="search-query" placeholder="Search">
            <i class="icon-search icon-white"></i>
            */ ?>
            <a class="btn" href="#" style="margin-bottom: 10px;"><i class="icon-shopping-cart"></i> Shopping Cart (5 items)</a>           
          </form>
        </div>
      </div>
    </div>
        
    <div class="container">
    
    <div class="row">
      <div class="span12">
        <ul class="breadcrumb">
          <li>
            <a href="#">Home</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">Triumph TR2, 3, 4, 4A, 5, 6</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">Accessories</a> <span class="divider">/</span>
          </li>
          <li class="active">
            <a href="#">DIS-CAR-NECT Battery Clamp (Instantly Disconnects Battery)</a>
          </li>
        </ul>
      </div>
    </div>
       
    <div class="row">
      <div class="span3"> 
        
              <form class="well form-search">
        <input type="text" class="input-small search-query" style="width: 55%" placeholder="Click to search...">
        <button type="submit" class="btn">Search</button>
      </form>
          
        <ul class="nav nav-tabs nav-stacked">
          <li><a href="/parts/accessories/">Special Offers<i class="icon-chevron-right pull-right"></i></a></li>
          <li><a href="/parts/accessories/">Accessories</a></li>
          <li><a href="/parts/books/">Books</a></li>
          <li><a href="/parts/bumpers/">Bumpers</a></li>
          <li><a href="/parts/cables/">Cables</a></li>
          <li><a href="/parts/brake-and-clutch-hydraulics/">Brake and Clutch Hydraulics</a></li>
          <li><a href="/parts/clips-and-fasteners/">Clips and Fasteners</a></li>
          <li><a href="/parts/chrome-mirrors-and-fittings/">Chrome Mirrors and Fittings </a></li>
          <li><a href="/parts/engines-and-components/">Engines and Components</a></li>
          <li><a href="/parts/re-chroming-service/">Re-Chroming Service</a></li>
          <li><a href="/parts/fuel-system/">Fuel System</a></li>
          <li><a href="/parts/hoods-hoodbags-and-tonneaus/">Hoods, Hoodbags and Tonneaus</a></li>
          <li><a href="/parts/interior-trim/">Interior Trim</a></li>
          <li><a href="/parts/lights-and-electrical/">Lights and Electrical</a></li>
          <li><a href="/parts/chassis-and-bodywork/">Chassis and Bodywork</a></li>
          <li><a href="/parts/radiators-and-cooling/">Radiators and Cooling</a></li>
          <li><a href="/parts/rubber-seals-finishers/">Rubber Seals/Finishers</a></li>
          <li><a href="/parts/service-items/">Service Items</a></li>
          <li><a href="/parts/steering-and-suspension/">Steering and Suspension</a></li>
          <li><a href="/parts/starter-dynamo-alternator/">Starter/Dynamo/Alternator</a></li>
          <li><a href="/parts/transmission-and-clutch/">Transmission and Clutch</a></li>
          <li><a href="/parts/wipers-washers-and-glass/">Wipers, Washers and Glass</a></li>
          <li><a href="/parts/exhausts/">Exhausts</a></li>
          <li><a href="/parts/chemicals/">Chemicals</a></li>
          <li><a href="/parts/badges-and-motifs/">Badges and Motifs</a></li>
          <li><a href="/parts/wheels-and-body-fittings/">Wheels and Body Fittings</a></li>
        </ul>
      </div><!--/span6-->
        
      <div class="span9">
        <!--Body content-->
        <table class="table table-striped table-bordered">
          <tbody>
          <?php 
            $i=1; while($i != 20) {
          ?>
            <tr>
              <td class="image" style="width: 100px;">
                <a href="#"><img src="http://placehold.it/80x80&text=TRGB" alt="" class="thumbnail" style="margin: 0px auto;"></a>
              </td>
              <td class="description" style="font-family: 'Open Sans', sans-serif; line-height: 30px; padding-left: 20px; padding-top: 20px; font-size: 130%; position: relative;"><a href="#" style="color:#222;">DIS-CAR-NECT Battery Clamp (Instantly Disconnects Battery)<span style="font-size: 80%; position: absolute; left: 20px; bottom: 20px;">Part #: A60</span></a></td>
              <td style="padding-top: 20px; text-align: center; font-size: 130%; position:relative;">&pound;6.95<span style="color: #555; font-size:70%; position: absolute; left: 10%; top: 50%;">&pound;8.34<br />(inc. VAT)</span></td>
              <td style="vertical-align: middle; text-align: center; font-size: 150%;"><a class="btn btn-success" href="#"><i class="icon-shopping-cart icon-white"></i> Add</a></td>
            </tr>
          <?php
          $i++;}
          ?>
          </tbody>
        </table>
      </div><!--/spansix-->
      </div><!--/row-->
      
      <div class="row">
        <div class="span12">
          <footer style="margin-bottom: 20px;"><h6 style="text-align:center;">&copy; 2012 TRGB Ltd, All Rights Reserved &ndash; Website created by <a href="http://www.aphillips.co.uk">Andrew Phillips</a></h6></footer>
        </div></div>
      
    </div><!--/container-->
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/google-code-prettify/prettify.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-button.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-collapse.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-carousel.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-typeahead.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/application.js"></script>
  
  </body>
  
</html>
