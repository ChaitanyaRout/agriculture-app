<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-weather_forecast-error.log'); 
	include "common_cookie_state_check.php";

	$data = false;

	$obj_states = new ModelStates();
	$obj_states->setStateName($cookie_state);
	$state_details = $obj_states->getStateDetailByName();
	if($state_details)
	{
		$capital = explode(", ",$state_details['capital']);
		$data = $helper->getCapitalWeather(WEATHER_API_KEY, $capital[0]);
	}

	error_log('data: '.var_export($data,true));
	if($data)
	{
		$smarty->assign("data",$data);
		$currentTime = time();
		$smarty->assign("current_time",date("l g:i a", $currentTime));
		$smarty->assign("current_date",date("jS F,Y", $currentTime));
		$smarty->assign("weather_description",ucwords($data['weather'][0]['description']));
	}
	else
		$smarty->assign("data",$data);
    $smarty->assign("title", "Krushak Sathi | Weather Forecast");
	$smarty->display("weather_forecast.tpl");
?>