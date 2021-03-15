<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-home-error.log'); 
	$smarty->display("home.tpl");
?>