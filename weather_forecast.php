<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-weather_forecast-error.log'); 
	include "common_cookie_state_check.php";

    $smarty->assign("title", "Krushak Sathi | Weather Forecast");
	$smarty->display("weather_forecast.tpl");
?>