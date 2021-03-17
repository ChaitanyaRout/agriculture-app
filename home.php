<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-home-error.log'); 
	include "common_cookie_state_check.php";
	$smarty->display("home.tpl");
?>