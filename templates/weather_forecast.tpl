{include file="header.tpl"}
{include file="menu.tpl"}
<div class="container body-content" style="padding: 40px !important">
    {if $data['cod'] == 200}
        <div class="report-container">
            <h2>{$data['name']} Weather Status</h2>
            <div class="time">
                <div>{$current_time}</div>
                <div>{$current_date}</div>
                <div>{$weather_description}</div>
            </div>

            <div class ="weather-forecast">
                <img src="http://openweathermap.org/img/w/{$data['weather'][0]['icon']}.png" class="weather-icon"/>
                <strong>{$data['main']['temp_max']}&deg;C</strong>
                <span class="min-temperature">{$data['main']['temp_min']}&deg;C</span>
            </div>
            <div class="time">
                <div>Humidity: {$data['main']['humidity']} %</div>
                <div>Wind: {$data['wind']['speed']} km/h</div>
            </div>
        </div>
    {/if}
</div>
{include file="footer.tpl"}