<?php
use PHPMailer\PHPMailer\PHPMailer;

	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-home-error.log'); 
	include "common_cookie_state_check.php";
	// try{
	// 	$helper->phpMailer("solankiakram92@gmail.com","test","test",false,"Akram Solanki","routjulu@gmail.com","chaitanyarout1997@gmail.com",false);
	// }
	// catch(Exception $e)
	// {
	// 	error_log("e: ".var_export($e,true));
	// }
	$smarty->display("home.tpl");
	
?>