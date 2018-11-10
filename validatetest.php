<?php
session_start();

require('smarty/Smarty.class.php');
require('technik/config.php');

$smarty = new Smarty();

$smarty->template_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/templates';
$smarty->compile_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/templates_c';
$smarty->cache_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/cache';
$smarty->config_dir = 'C:/xampp/htdocs/gewinnsiel/smarty/configs';


$allfieldsvalidformONE = 'allfieldsvalid';
$smarty->assign('agb1checked', "");
$smarty->assign('agb2checked', "");

if (empty($_POST)) {
   
    // display form
    $smarty->display('form.tpl');
    
} else {    

    //----------------------------------------------------------------------------------------------------
    //-----------------------------------------------------------------------------Form Eins Validierungen

    
    //class User {
    //private $username;
    //$this->username = $_POST['username'];

    
    $vorname = $_POST['vorname']; 
    $nachname = $_POST['nachname'];
    $email = $_POST['email'];
    
    
    $vornamelaenge = strlen($vorname);
    if ($vornamelaenge <2 || $vornamelaenge >64){
        $smarty->assign('vornameemptyornot', "red");
        $smarty->assign('vornamevalue', $vorname);
        $allfieldsvalidformONE = 'notallfieldsvalid';
    } else {
        $smarty->assign('vornameemptyornot', "black");
        $smarty->assign('vornamevalue', $vorname);
    }
    
    $nachnamelaenge = strlen($nachname);
    if ($nachnamelaenge <2 || $nachnamelaenge >64){
        $smarty->assign('nachnameemptyornot', "red");
        $smarty->assign('nachnamevalue', $nachname);
        $allfieldsvalidformONE = 'notallfieldsvalid';
    } else {
        $smarty->assign('nachnameemptyornot', "black");
        $smarty->assign('nachnamevalue', $nachname);
    }
    
    $emailvalidornot = validate_email($email);
    if ($emailvalidornot != 1){
        $smarty->assign('emailemptyornot', "red");
        $smarty->assign('emailvalue', $email);
        $allfieldsvalidformONE = 'notallfieldsvalid';
    } else {
        $smarty->assign('emailemptyornot', "black");
        $smarty->assign('emailvalue', $email);
    }
    
    if (isset($_POST['agb1'])){
        $agb1 = 'acc1';
        $smarty->assign('agb1sacceptedornot', "black");
        $smarty->assign('agb1checked', "checked");
    } else {
        $allfieldsvalidformONE = 'notallfieldsvalid';
        $smarty->assign('agb1sacceptedornot', "red");
        $smarty->assign('agb1checked', "");
    }
    
    if (isset($_POST['agb2'])){
        $agb2 = 'acc2';
        $smarty->assign('agb2sacceptedornot', "black");
        $smarty->assign('agb2checked', "checked");
    } else {
        $allfieldsvalidformONE = 'notallfieldsvalid';
        $smarty->assign('agb2sacceptedornot', "red");
        $smarty->assign('agb2checked', "");
    }
    

    //----------------------------------------------------------------------------------------------------
    //---------------------------------------------Form Eins Werte Abspeichern oder Form Eins neu aufrufen
    if ($allfieldsvalidformONE == "allfieldsvalid"){
        //daten in die datenbank abspeichern
        addUser($vorname,$nachname,$email,$agb1,$agb2);
        $smarty->assign('userid', $_SESSION['userid']);
        
        // display form2
        $smarty->display('form2.tpl');
    } else {
        // display form
        $smarty->display('form.tpl');
    }

}//if (empty($_POST))



function validate_email($e) {
    return (bool)preg_match("`^[a-z0-9!#$%&'*+\/=?^_\`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_\`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$`i", trim($e));
}


function addUser($v,$n,$e,$agbi,$agbii) {
    
     $dbconnection = db_connect();
     if(!$dbconnection) error_message(sql_error());

    $sql = "INSERT INTO personen (vorname, nachname, email, agb1, agb2)
				   VALUES ('".$v."','".$n."','".$e."','".$agbi."','".$agbii."')";

    if (!mysqli_query($dbconnection, $sql)) {
        //error handling
    } else {
        //success handling
        //pkid in session variable schreiben
        $_SESSION['userid'] = mysqli_insert_id($dbconnection);
    }

}



?>