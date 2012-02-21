<?php

?>
<link href="<?php echo $domain ?>/stylesheets/login.css#<?php echo rand() ?>" rel="stylesheet" type="text/css" />
<script language="JavaScript">
	function InputCheck(LoginForm){
		if(LoginForm.login_id.value == ""){
			document.getElementById('error_msg').innerHTML = "Login_ID is empty !";
			LoginForm.login_id.focus();
			return false;
		}
		if(LoginForm.login_pwd.value == ""){
			document.getElementById('error_msg').innerHTML = "Password is empty !";
			LoginForm.login_pwd.focus();
			return false;
		}
	}
</script>

<div id="login_wrapper">
	<form id="login_form" method="post" action="./dologin.php" onSubmit="return InputCheck(this)">
		<fieldset class="fieldsetwrap">
			<legend>LOGIN</legend>
			<table width="300px" border="0" cellspacing="2" cellpadding="5">
				<tr>
					<td colspan="2">
						<div class="emptyline"></div>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<label id="error_msg" style="color: red">
							<?php
								if($_GET['info'] == 'fail'){
									echo 'Log in failed !';
								}
								else {
									echo 'Welcome! You are guest!';
								}
							?>
						</label>
					</td>
				</tr>
				<tr>
					<td width="70px" align="left" valign="baseline">
						<label>Login_ID:</label>
					</td>
					<td width="200px" align="right" valign="baseline">
						<input id="login_id" name="login_id" type="text" class="textfield" size="20" />
					</td>
				</tr>
				<tr>
					<td width="70px" align="left" valign="baseline">
						<label>Password:</label>
					</td>
					<td width="200px" align="right" valign="baseline">
						<input id="login_pwd" name="login_pwd" type="password" class="textfield" size="20" />
					</td>
				</tr>
				<tr valign="baseline" style="font-size:12px;">
					<td width="135px" align="center">
						<input id="keeplogged" name="keeplogged" type="checkbox" class="checkbox" />
						<label>Keep logged in</label>
					</td>
					<td width="135px" align="center">
						<label>Fogot password?</label>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2">
						<input id="submit" name="submit" type="submit" class="button" value="Log In" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="emptyline"></div>
					</td>
				</tr>
				<tr valign="baseline" style="font-size:12px;">
					<td width="200px" align="center">
						
					</td>
					<td width="70px" align="right">
						<label><a id="register" href="./register.php" target="_top">Register Now!</a></label>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>