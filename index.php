<?php
	//	Remote Server
	//$domain = "http://developer.fanaticalmelody.com";
	
	//	Test Server
	$domain = ".";
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Developer Panel</title>
		<link href="<?php echo $domain ?>/stylesheets/dp.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="container">
			<div id="header">
				<?php include "$domain/header.php" ?>
			</div>
			<div id="content">
				<?php include "$domain/content.php" ?>
			</div>
			<div id="footer">
				<?php include "$domain/footer.php" ?>
			</div>
		</div>
	</body>
</html>
