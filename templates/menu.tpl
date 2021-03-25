<nav class="container navbar navbar-expand-sm bg-muted navbar-dark">
	<div class="text-center mt-2">
		<div class="logo_div_child">
			<a class="navbar-brand logo_div_child" href="index.php?p=select_state" id="logo"><img id ="brand-logo" src="images/Logo.png"></a>
		</div>
		<div class="logo_div_child">
			<p class="logo_div_child" id="brand-name">Krushak Sathi</p>
		</div>
	</div>
</nav>
{if $p_status != 'select_state'}
	<div class="menu-bar">
		<ul>
			<li class="active"><a href="index.php?p=home"><i class="fa fa-home"></i>  Home</a></li>
			<li><a href="index.php?p=program_scheme">Program & Scheme</a></li>
			<li><a href="index.php?p=major_crop">Major Crop</a></li>
			<li><a href="index.php?p=weather_forecast">Weather Forecast</a></li>
			<li><a href="index.php?p=agri_business">Agri Business</a></li>
			<li><a href="index.php?p=about_us">About us</a></li>
		</ul>
	</div>
{/if}