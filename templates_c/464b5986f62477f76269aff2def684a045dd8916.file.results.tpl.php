<?php /* Smarty version Smarty-3.0.7, created on 2012-02-24 11:46:43
         compiled from "templates/results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20840534654f4778a3ebbaf1-74415579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '464b5986f62477f76269aff2def684a045dd8916' => 
    array (
      0 => 'templates/results.tpl',
      1 => 1330081424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20840534654f4778a3ebbaf1-74415579',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en-gb">

  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->getVariable('PageTitle')->value;?>
</title>
    <meta name="description" content="">
    <meta name="author" content="Andrew Phillips <andrew@cbtech.co.uk>">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/trgbstyle.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
  </head>

  <body>
    
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#" style="line-height: 30px;">
            TRGB Online Parts Shop
          </a>
            <a class="btn pull-right" href="#" style="margin-top: 10px;"><i class="icon-shopping-cart"></i> Shopping Cart</a>           
        </div>
      </div>
    </div>
        
    <div class="container" style="margin-top: 70px;">
    
    <div class="row">
      <div class="span12">
        <ul class="breadcrumb">
          <li>
            <a href="/">Home</a> <span class="divider">/</span>
          </li>
          <li class="active">
            <a href="/tr-catalogue/">Triumph TR4, TR4A, TR250, TR5 &amp; TR6</a>
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
          <?php  $_smarty_tpl->tpl_vars['Category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('Categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['Category']->key => $_smarty_tpl->tpl_vars['Category']->value){
?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['Category']->value['category_permalink'];?>
"><?php echo $_smarty_tpl->tpl_vars['Category']->value['category_name'];?>
<i class="icon-chevron-right pull-right"></i></a></li>
          <?php }} ?>     
        </ul>
      </div><!--/span6-->
        
      <div class="span9">
        <!--Body content-->
        <table class="table table-striped table-bordered">
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['Part'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('Parts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['Part']->key => $_smarty_tpl->tpl_vars['Part']->value){
?>
            <tr>
              <td class="image" style="width: 100px;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['Part']->value['part_permalink'];?>
"><img src="http://placehold.it/80x80&text=TRGB" alt="" class="thumbnail" style="margin: 0px auto;"></a>
              </td>
              <td class="description" style="font-family: 'Open Sans', sans-serif; line-height: 30px; padding-left: 20px; padding-top: 20px; font-size: 130%; position: relative;"><a href="<?php echo $_smarty_tpl->tpl_vars['Part']->value['part_permalink'];?>
" style="color:#222;"><?php echo $_smarty_tpl->tpl_vars['Part']->value['part_name'];?>
<span style="font-size: 80%; position: absolute; left: 20px; bottom: 20px;">Part #: <?php echo $_smarty_tpl->tpl_vars['Part']->value['part_number'];?>
</span></a></td>
              <td style="padding-top: 20px; text-align: center; font-size: 130%; position:relative;">&pound;<?php echo $_smarty_tpl->tpl_vars['Part']->value['part_price'];?>
<span style="color: #555; font-size:70%; position: absolute; left: 10%; top: 50%;">&pound;<?php echo $_smarty_tpl->tpl_vars['Part']->value['part_pricevat'];?>
<br />(inc. VAT)</span></td>
              <td style="vertical-align: middle; text-align: center; font-size: 150%;"><a class="btn btn-success" href="#"><i class="icon-shopping-cart icon-white"></i> Add</a></td>
            </tr>
          <?php }} ?>
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
