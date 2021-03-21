<?php    
    $today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-super-admin-schemes-error.log');

	$check_sa_session = $helper->isSuperAdminSessionStart();

	if (!$check_sa_session)
		$helper->redirect_link('sa_login');
	else
	{
		$obj_scheme = new ModelScheme();
		$scheme = $obj_scheme->getAllScheme();

		$smarty->assign('schemes',$scheme);

		$notice = $helper->getNoticeSession('notice');
		$helper->setNoticeSession();
		$smarty->assign('notice', $notice);

		$error = $helper->getErrorSession('error');
		$helper->setErrorSession();
		$smarty->assign('error', $error);

		$smarty->display('sa_show_schemes.tpl');
	}
?>