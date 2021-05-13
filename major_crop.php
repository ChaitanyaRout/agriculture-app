<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-major_crop-error.log'); 
	include "common_cookie_state_check.php";

	$obj_states = new ModelStates();
	$obj_states->setStateName($cookie_state);
	$state = $obj_states->getStateDetailByName();
	
	$obj_crop = new ModelCrop();
	$obj_crop->setStateId($state['id']);
	$crops = $obj_crop->getCropByStateId();

	$smarty->assign("crops", $crops);

    $smarty->assign("title", "Krushak Sathi | Major Crop");
	$smarty->display("major_crop.tpl");
?>