<?php
session_start();

require('smarty/Smarty.class.php');
require('technik/config.php');

$smarty = new Smarty();

$smarty->template_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/templates';
$smarty->compile_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/templates_c';
$smarty->cache_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/cache';
$smarty->config_dir = 'C:/xampp/htdocs/gewinnsiel/smarty/configs';




$userid = $_SESSION['userid'];

if (empty($_POST)) {
   
    // display form
    $smarty->display('form3.tpl');
    
} else {

    //----------------------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------------------Form Drei
    
    if (isset($_POST['angebote'])) {
        $angebot = $_POST['angebote'];
        
        if($angebot == "Angebot 1"){
            $angebotnr = '1';
            saveangebotchoice($userid,$angebotnr);
            $smarty->assign('angebot', $angebot);
            $smarty->display('form4.tpl');
            
        } else if ($angebot == "Angebot 2"){
            $angebotnr = '2';
            saveangebotchoice($userid,$angebotnr);
            $smarty->assign('angebot', $angebot);
            $smarty->display('form4.tpl');
            
        } else if ($angebot == "Angebot 3"){
            $angebotnr = '3';
            saveangebotchoice($userid,$angebotnr);
            $smarty->assign('angebot', $angebot);
            $smarty->display('form4.tpl');
            
        }
    } else {
         $smarty->display('form3.tpl');
     }
     
     
}



function saveangebotchoice($u,$a) {
    
    $dbconnection = db_connect();
    if(!$dbconnection) error_message(sql_error());
    
    $sql = "INSERT INTO personen2angebote (personid, angebotid)
				   VALUES ('".$u."','".$a."')";
    
    /*
     $time = date("H-i-s");
     $file = fopen('debugchoice.txt', 'w');
     fwrite($file, "stelle 1: ".$time." : ".$sql."\r\n");
     fclose($file);
    */
    
    if (!mysqli_query($dbconnection, $sql)) {
        //error handling
    } else {
        //success handling
        
    }
    
}





?>