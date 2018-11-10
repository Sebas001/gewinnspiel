<?php
session_start();

// you will need to setup Smarty if
// the defaults are not correct.

require('smarty/Smarty.class.php');
require('smarty/libs/SmartyValidate.class.php');

//$smarty =& new Smarty;
$smarty = new Smarty();


$smarty->template_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/templates';
$smarty->compile_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/templates_c';
$smarty->cache_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/cache';
$smarty->config_dir = 'C:/xampp/htdocs/gewinnsiel/smarty/configs';



if(empty($_POST)) {
    // new form, we (re)set the session data
    SmartyValidate::connect($smarty, true);
    // register our validators
    SmartyValidate::register_validator('fullname', 'FullName', 'notEmpty',
        false, false, 'trim');
    SmartyValidate::register_validator('phone', 'Phone', 'isNumber', true,
        false, 'trim');
    SmartyValidate::register_validator('expdate', 'CCExpDate', 'notEmpty',
        false, false, 'trim');
    SmartyValidate::register_validator('email', 'Email', 'isEmail', false,
        false, 'trim');
    SmartyValidate::register_validator('date', 'Date', 'isDate', true,
        false, 'trim');
    SmartyValidate::register_validator('password', 'password:password2', 'isEqual');
    // display form
    $smarty->display('monteohrt.tpl');
} else {    
   // validate after a POST
   SmartyValidate::connect($smarty);
   if(SmartyValidate::is_valid($_POST)) {
       // no errors, done with SmartyValidate
       SmartyValidate::disconnect();
       $smarty->display('success.tpl');
   } else {
       // error, redraw the form
       $smarty->assign($_POST);
       $smarty->display('monteohrt.tpl');
   }
}

?>
