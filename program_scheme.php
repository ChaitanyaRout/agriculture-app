<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-program_scheme-error.log'); 
	include "common_cookie_state_check.php";

    $smarty->assign("title", "Krushak Sathi | Program & Scheme");
	$smarty->display("program_scheme.tpl");
?>