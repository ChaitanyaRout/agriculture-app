<?php
    $today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-super-admin-dashboard-error.log');
    
    $p = $helper->getValue('p');

	$check_sa_session = $helper->isSuperAdminSessionStart();

	if (!$check_sa_session)
		$helper->redirect_link('sa_login');
	else
	{

		$notice = $helper->getNoticeSession('notice');
		$helper->setNoticeSession();
		$smarty->assign('notice', $notice);

		$error = $helper->getErrorSession('error');
		$helper->setErrorSession();
		$smarty->assign('error', $error);

		$smarty->assign('check_sa_session', $check_sa_session);

		$email = $helper->getSession('email');
		$smarty->assign('email', $email);

		$smarty->display('sa_dashboard.tpl');
	}
?>