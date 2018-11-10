<?php

// put full path to Smarty.class.php
include_once ('smarty/Smarty.class.php');
$smarty = new Smarty();

//$smarty->testInstall(); //testInstall() is only available in Smarty 3

/**/

                        //C:\xampp\htdocs\gewinnspiel\smarty\templates
$smarty->template_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/templates';
$smarty->compile_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/templates_c';
$smarty->cache_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/cache';
$smarty->config_dir = 'C:/xampp/htdocs/gewinnsiel/smarty/configs';


$smarty->assign('name', 'Ned');
$smarty->display('index.tpl');
















?>