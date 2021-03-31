<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-program_scheme-error.log'); 
	include "common_cookie_state_check.php";

	$obj_states = new ModelStates();
	$obj_states->setStateName($cookie_state);
	$state = $obj_states->getStateDetailByName();

	$obj_scheme = new ModelScheme();
	$obj_scheme->setSateId($state['id']);
	$schemes = $obj_scheme->getSchemeByStateId();
	
	$smarty->assign('upload_path', UPLOAD_FILE_PATH);

	$smarty->assign("schemes", $schemes);

    $smarty->assign("title", "Krushak Sathi | Program & Scheme");
	$smarty->display("program_scheme.tpl");
?>