<?php
	$today = date("d-m-Y");
	ini_set('error_log', 'Error_log/'.$today.'-weather_forecast-error.log'); 
	include "common_cookie_state_check.php";

	$apiKey = WEATHER_API_KEY;
    $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=Bhawanipatna&lang=en&units=metric&APPID=".$apiKey;

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);

    curl_close($ch);
    $data = json_decode($response,true);
	error_log('data: '.var_export($data,true));
	$smarty->assign("data",$data);
    $currentTime = time();
	$smarty->assign("current_time",date("l g:i a", $currentTime));
	$smarty->assign("current_date",date("jS F,Y", $currentTime));
	$smarty->assign("weather_description",ucwords($data['weather'][0]['description']));
    $smarty->assign("title", "Krushak Sathi | Weather Forecast");
	$smarty->display("weather_forecast.tpl");
?>