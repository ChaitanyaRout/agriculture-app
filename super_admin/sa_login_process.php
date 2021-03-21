<?php
    $today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-super-admin-login-process-error.log'); 
    
    $email = $helper->getValue('sa_email');
	$password = $helper->getValue('sa_pass');
    
    if ($helper->checkMethod('POST'))
	{
		$email = $helper->getValue('sa_email');
		$password = $helper->getValue('sa_pass');

		if ($email && $password)
		{
			$obj_sa = new ModelSaCredentials();
			$enc_password = $helper->encryptKey($email, $password);

			$obj_sa->setEmail($email);
			$obj_sa->setPassword($enc_password);
			$sa_details = $obj_sa->getSuperAdmin();

			if (!$sa_details)
			{
				$helper->setErrorSession(2);
				$helper->redirect_link('sa_login');
			}
			else
			{
				$sa_id = $sa_details['id'];
				$helper->setSuperAdminSession($email, $sa_id);
				$helper->redirect_link('sa_dashboard');
			}
		}
		else
		{
			$helper->setErrorSession(1);
			$helper->redirect_link('sa_login');
		}
	}
?>