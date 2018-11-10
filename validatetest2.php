<?php
session_start();

require('smarty/Smarty.class.php');
require('technik/config.php');

$smarty = new Smarty();

$smarty->template_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/templates';
$smarty->compile_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/templates_c';
$smarty->cache_dir = 'C:/xampp/htdocs/gewinnspiel/smarty/cache';
$smarty->config_dir = 'C:/xampp/htdocs/gewinnsiel/smarty/configs';


$allfieldsvalidformTWO = 'allfieldsvalid';
$userid = $_SESSION['userid'];
$smarty->assign('userid', $userid);

if (empty($_POST)) {
    
    // display form
    $smarty->display('form2.tpl');
    
} else {

    //----------------------------------------------------------------------------------------------------
    //-----------------------------------------------------------------------------Form Zwei Validierungen
        
    $strasse = $_POST['strasse'];
    $ort = $_POST['ort'];
    $plz = $_POST['plz'];
    $geburtsdatum = $_POST['geburtsdatum'];
     /**/
    
    $strasselaenge = strlen($strasse);
    if ($strasselaenge <2 || $strasselaenge >64){
        
        $smarty->assign('strasseemptyornot', "red");
        $smarty->assign('strassevalue', $strasse);
        $allfieldsvalidformTWO = 'notallfieldsvalid';
    } else {
        $smarty->assign('strasseemptyornot', "black");
        $smarty->assign('strassevalue', $strasse);
    }
    
    $ortlaenge = strlen($ort);
    if ($ortlaenge <2 || $ortlaenge >64){
        
        $smarty->assign('ortemptyornot', "red");
        $smarty->assign('ortvalue', $ort);
        $allfieldsvalidformTWO = 'notallfieldsvalid';
    } else {
        $smarty->assign('ortemptyornot', "black");
        $smarty->assign('ortvalue', $ort);
    }
    
    $plzlaenge = strlen($plz);
    if ($plzlaenge != 5){
        
        $smarty->assign('plzemptyornot', "red");
        $smarty->assign('plzvalue', $plz);
        $allfieldsvalidformTWO = 'notallfieldsvalid';

    } else if (is_numeric($plz) ){
        $smarty->assign('plzemptyornot', "black");
        $smarty->assign('plzvalue', $plz);
    } else {
        $smarty->assign('plzemptyornot', "red");
        $smarty->assign('plzvalue', $plz);
        $allfieldsvalidformTWO = 'notallfieldsvalid';
    }
    

    
    //----------------------------------------------------------------------------------------------------
    //---------------------------------------------Form Zwei Werte Abspeichern oder Form Zwei neu aufrufen
    if ($allfieldsvalidformTWO == "allfieldsvalid"){
        //daten in der datenbank updaten
        updateUser($userid,$strasse,$ort,$plz,$geburtsdatum);
        
        //$smarty->assign('userid', $_SESSION['userid']);
        
        // display form2
        $smarty->display('form3.tpl');
    } else {
        // display form
        $smarty->display('form2.tpl');
    }

    
}



function updateUser($u,$s,$o,$p,$g) {
    
    $dbconnection = db_connect();
    if(!$dbconnection) error_message(sql_error());
    
    $sql = "UPDATE personen SET strasse = '".$s."',
                                plz = '".$p."',
                                ort = '".$o."',
                                geburtsdatum = '".$g."'
				   WHERE pkid = '".$u."'";
    
    /* 
     $time = date("H-i-s");
     $file = fopen('debug.txt', 'w');
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