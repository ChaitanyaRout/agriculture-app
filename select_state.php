<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-select-state-error.log'); 
	$obj_states = new ModelStates();
	$states = $obj_states->getAllStates();
	$smarty->assign("states",$states);
	$smarty->display("select_state.tpl");
?>