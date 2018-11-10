<?php

require_once ('../technik/config.php');
$dbconnection = db_connect();
if(!$dbconnection) error_message(sql_error());



$insertquery="INSERT INTO personen
				  				(vorname,
                                 nachname,
				   				 email,
                                 agb1,
				   				 agb2
				   				)
	   		  VALUES
				  ('$vorname',
                   '$nachname',
				   '$email',
                   '$agb1',
				   '$agb2'
				   )";



















