<?php

// Full path to Smarty.class.php
require_once(SITE_ROOT.DS.'/configs/libs/Smarty.class.php');

// Create new Smarty object
$smarty = new Smarty();

// Configure directories
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$smarty->cache_dir = 'cache';
$smarty->config_dir = 'configs';

// Force Smarty to compile templates everytime 
// (Should be true when in development)
$smarty->force_compile = true;

// MAKE SURE THAT THERE ARE NO NEW LINES UNDER HERE AS IT WILL BREAK REDIRECTS
?>