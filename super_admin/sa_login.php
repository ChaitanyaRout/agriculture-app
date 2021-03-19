<?php
    $today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-super-admin-login-error.log'); 
	$smarty->display("sa_login.tpl");
?>