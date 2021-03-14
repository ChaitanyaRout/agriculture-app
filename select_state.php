<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-home-error.log'); 
	$smarty->assign("name","Chaitanya Rout");
	$obj_states = new ModelStates();
	$states = $obj_states->getAllStates();
	$smarty->assign("states",$states);
	$smarty->display("select_state.tpl");
?>