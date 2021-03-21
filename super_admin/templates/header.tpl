<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../images/Logo.png"/>
  	<link rel="stylesheet" href="../css/index.css">
	  <link rel="stylesheet" href="css/super_admin.css">
	<link href="../fontawesome/css/all.css" rel="stylesheet">
	<script defer src="../fontawesome/js/all.js"></script>
	<link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
  	<link href="../fontawesome/css/brands.css" rel="stylesheet">
  	<link href="../fontawesome/css/solid.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<script defer src="../fontawesome/js/brands.js"></script>
  	<script defer src="../fontawesome/js/solid.js"></script>
  	<script defer src="../fontawesome/js/fontawesome.js"></script>
  	<script src="../js/popper.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Love+Ya+Like+A+Sister&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script defer src="../js/index.js"></script>
	{assign var="module_js" value="js/`$p_status`.js"}
	{if file_exists($module_js)}
    	<script type="text/javascript" src="{$module_js}"></script>      
	{/if}
	<title>{$title|default:"Agriculture Portal"}</title>
</head>
<body>
	<style>
		#footer
		{
			bottom: 0;
		}
		body {
			background: none;
		}
	</style>
	