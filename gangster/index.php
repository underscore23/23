<?php
$no_visible_elements=true;
include('header.php');
?>
            <div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to Admin Panel</h2>
				</div><!--/span-->
			</div><!--/row-->

			<div class="row-fluid" id='remember'>
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Please login with your Email Id and Password.
					</div>
					<form class="form-horizontal" action="signin.php" method="post">
						<fieldset>
							<div class="input-prepend" title="Email Id" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="semail" id="semail" type="text" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="spass" id="spass" type="password"  />
							</div>
							<div class="clearfix"></div>


							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
							<br /><br />
							<a href="#" onclick="$('#forgot').show();$('#remember').hide()">Forgot Password</a>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->

			<div class="row-fluid" id='forgot' style='display:none;'>
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Kindly enter the registered email id to reset password.
					</div>
					<form class="form-horizontal" action="#" method="post">
						<fieldset>
							<div class="input-prepend" title="Email Id" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="" />
							</div>
							<p class="center span5">
							<button type="submit" class="btn btn-primary">Reset Password</button>
							<br /><br />
							<a href="#" onclick="$('#forgot').hide();$('#remember').show()">I know the credentials.</a>
							</p>
						</fieldset>
					</form>
				</div>
			</div>
<?php
include('footer.php');
?>