<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-home-error.log'); 
	$smarty->assign("name","Chaitanya Rout");
	$obj_states = new ModelStates();
	$obj_states->setId(33);
	$obj_states->setStateName("bihar");
	$obj_states->getErrorLog();
	error_log("obj_states object: ".var_export($obj_states,true));
	// error_log("id: ".$obj_states->getId()." states: ".$obj_states->getStateName());
	$smarty->display("home.tpl");
?>