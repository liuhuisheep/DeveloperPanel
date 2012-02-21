<?php

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Developer Panel</title>
		<link href="./stylesheets/dp.css#<?php echo rand() ?>" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="container">
			<div id="header">
				<?php include "./header.php" ?>
			</div>
			<div id="content">
				<link href="./stylesheets/regform.css#<?php echo rand() ?>" rel="stylesheet" type="text/css" />
				<div id="reg_wrapper">
					<form id="reg_form" method="post" action="./doregister.php" onSubmit="">
						<fieldset class="fieldsetwrap">
							<legend>Register</legend>
							<table width="800px" border="0" cellspacing="2" cellpadding="5">
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
													echo 'Fail to register !';
												}
												else if($_GET['info'] == 'closed'){
													echo 'Sorry ! Registration is closed . Please contact webmaster .';
												}
												else {
													//echo 'Welcome! You are guest!';
												}
											?>
										</label>
									</td>
								</tr>
								<tr>
									<td width="400px" align="right" valign="baseline">
										<label>User_ID:</label>
									</td>
									<td width="400px" align="left" valign="baseline">
										<input id="user_id" name="user_id" type="text" class="textfield" size="20" />
									</td>
								</tr>
								<tr>
									<td width="400px" align="right" valign="baseline">
										<label>Password:</label>
									</td>
									<td width="400px" align="left" valign="baseline">
										<input id="user_pwd" name="user_pwd" type="password" class="textfield" size="20" />
									</td>
								</tr>
								<tr>
									<td width="400px" align="right" valign="baseline">
										<label>Re-enter Password:</label>
									</td>
									<td width="400px" align="left" valign="baseline">
										<input id="user_pwd2" name="user_pwd2" type="password" class="textfield" size="20" />
									</td>
								</tr>
								<tr>
									<td width="400px" align="right" valign="baseline">
										<label>Email:</label>
									</td>
									<td width="400px" align="left" valign="baseline">
										<input id="user_email" name="user_email" type="text" class="textfield" size="20" />
									</td>
								</tr>
								<tr>
									<td align="center" colspan="2">
										<input id="submit" name="submit" type="submit" class="button" value="Register" />
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="emptyline"></div>
									</td>
								</tr>
							</table>
						</fieldset>
					</form>
				</div>
			</div>
			<div id="footer">
				<?php include "./footer.php" ?>
			</div>
		</div>
	</body>
</html>