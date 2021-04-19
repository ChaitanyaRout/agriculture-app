<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-developer-error.log'); 
	include "common_cookie_state_check.php";

    $smarty->assign("title", "Krushak Sathi | Developer");
	$smarty->display("developer.tpl");
?>