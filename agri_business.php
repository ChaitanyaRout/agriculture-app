<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-agri_business-error.log'); 
	include "common_cookie_state_check.php";

    $smarty->assign("title", "Krushak Sathi | Agri Business");
	$smarty->display("agri_business.tpl");
?>