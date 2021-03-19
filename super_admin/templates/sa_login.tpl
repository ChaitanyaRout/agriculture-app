{include file="header.tpl"}
{include file="menu.tpl"}
<div class="container">
    <div class="row">
		<div class="col-md-2 col-sm-2"></div>
		<div class="col-md-8 col-sm-8 col-xs-12">
			<div class="well fq-theme-bg fq-white-color">
				<h1 class="text-capitalize page-header">super admin login</h1>
				<form role="form" id="sa_login_form" class="fq-margin-topbtm-10" method="post" action="index.php?p=sa_login_process">
					<div class="row form-group full">
						<label for="sa_email" class="control-label text-capitalize col-md-2 text-right">email<span class="text-danger"> *</span></label>
						<div class="col-md-10">
							<input type="email" id="sa_email" name="sa_email" class="form-control" required="">
						</div>
					</div>
					<div class="row form-group full">
						<label for="sa_pass" class="control-label text-capitalize col-md-2 text-right">password<span class="text-danger"> *</span></label>
						<div class="col-md-10">
							<input type="password" id="sa_pass" name="sa_pass" class="form-control" required="">
						</div>
					</div>
					<div class="row full">
						<div class="col-md-7 col-md-offset-2">
							<div class="error text-danger"></div>
						</div>
						<div class="col-md-3">
							<div class="text-danger text-right">* Required fields</div>
						</div>
					</div>
					<div class="row full">							
						<div class="col-md-3 pull-right text-right">
							<button type="submit" class="btn btn-success text-uppercase full fq-text-lg" style="background-color: #2E8B57;">login</button>
						</div>	
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-2 col-sm-2"></div>
	</div>
</div>


<div class="notice">
	{if $notice == 1}
		Sucessfully logged out
	{/if}
</div>

<div class="fq-error">
	<span class="fq-error-msg">
		{if $error == 1}
			Fields can't be blank
		{else if $error == 2}
			Invalid email or password
		{/if}
	</span>
	<button type="button" class="close" data-dismiss="fq-error"><span aria-hidden="true">&times; <small>close</small></span></button>
</div>
{include file="footer.tpl"}