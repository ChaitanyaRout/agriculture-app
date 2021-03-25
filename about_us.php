<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-about_us-error.log'); 
	include "common_cookie_state_check.php";

    $smarty->assign("title", "Krushak Sathi | About Us");
	$smarty->display("about_us.tpl");
?>