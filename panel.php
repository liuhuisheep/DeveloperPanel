<?php
	session_start();
	
	if(!isset($_SESSION['userid'])){
		header("Location:./index.php");
		exit;
	}
?>
<html>
	<head>
		
	</head>
	<body>
		1
	</body>
</html>