<?php
	header('Content-Type:text/html; charset=UTF-8');
	header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');
	
	ini_set('session.gc_maxlifetime', 7200);
	
	session_start();
	ob_start();

	header('Set-Cookie: PHPSESSID='.session_id().'; SameSite=None; Secure');

	ini_set("display_errors", 0);

	// session_set_cookie_params(7200);

	//ini_set('session.save_path',realpath('session_manager'));

	ini_set("log_errors", 1);

	date_default_timezone_set('UTC');
	$today = date("d-m-Y");
	
	// ini_set("error_log", "Error_log/user_fall_error.log");
	// error_log($today." : user arrival");
	
	ini_set("error_log", "Error_log/".$today."-index php-error.log");

	// require 'vendor/autoload.php';
	require_once "config/defines.php";

	$helper = Helper::getHelper();
	$smarty = $helper->getSmarty();
	// $shopifyHelper = ShopifyHelper::getShopifyHelper();

	$p_value = $page_fall = $helper->getValue('p');
	
	if($page_fall)
	{
		if(file_exists($page_fall.".php"))
		{
			$smarty->assign("p_status",$page_fall);
			require_once $page_fall.".php";
		}
		else
		{
			$helper->redirect_link("404");
		}
	}
	else
	{
		$helper->redirect_link("select_state");
	}
	Db::disconnect();

?>