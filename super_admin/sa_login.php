<?php
    $today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-super-admin-login-error.log'); 

	$check_sa_session = $helper->isSuperAdminSessionStart();

	if ($check_sa_session)
	{
		$helper->redirect_link('sa_dashboard');
	}
	else
	{
		$notice = $helper->getNoticeSession('notice');
		$helper->setNoticeSession();
		$smarty->assign('notice', $notice);

		$error = $helper->getErrorSession('error');
		$helper->setErrorSession();
		$smarty->assign('error', $error);

		$smarty->display('sa_login.tpl');
	}
?>