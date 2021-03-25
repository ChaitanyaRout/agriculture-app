<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-major_crop-error.log'); 
	include "common_cookie_state_check.php";

    $smarty->assign("title", "Krushak Sathi | Major Crop");
	$smarty->display("major_crop.tpl");
?>