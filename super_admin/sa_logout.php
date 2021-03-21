<?php
    $today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-super-admin-logout-error.log'); 

	$p = $helper->getValue('p');
	$check_sa_session = $helper->isSuperAdminSessionStart();

	if (!$check_sa_session)
		$helper->redirect_link('sa_login');
	else
	{
		$helper->unsetSession('sa_key');
		$helper->closeSessionWrite();

		$helper->setNoticeSession(1);
		$helper->redirect_link('sa_login');
	}
?>