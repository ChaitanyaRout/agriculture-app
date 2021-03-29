<?php
    $today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-super-admin-add-scheme-error.log');

    $p = $helper->getValue('p');

	$check_sa_session = $helper->isSuperAdminSessionStart();

	if (!$check_sa_session)
		$helper->redirect_link('sa_login');
	else
	{
		$id = $helper->getValue("id");
		error_log("id: ".$id);
		if($id)
		{
			$smarty->assign('id',$id);
			$obj_scheme = new ModelScheme();
			$obj_scheme->setId($id);
			$scheme = $obj_scheme->getSchemeById();
			error_log("scheme: ".var_export($scheme,true));
			$smarty->assign('scheme',$scheme);
		}
		else
		{
			$obj_state = new ModelStates();
			$states = $obj_state->getAllStates();
			$smarty->assign('states',$states);
		}

		$notice = $helper->getNoticeSession('notice');
		$helper->setNoticeSession();
		$smarty->assign('notice', $notice);
        
		$error = $helper->getErrorSession('error');
		$helper->setErrorSession();
		$smarty->assign('error', $error);
        
		$smarty->display('sa_add_scheme.tpl');
	}
?>