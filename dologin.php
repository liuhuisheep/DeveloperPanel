<?php
	session_start();
	
	//log out
	if($_GET['action'] == "logout"){
		unset($_SESSION['userid']);
		unset($_SESSION['username']);
		header("./index.php");
		exit;
	}
	
	//log in	
	if(!isset($_POST['submit'])){
		header("Location:./index.php");
		exit('Invalid Access !');
	}
	
	$username = htmlspecialchars($_POST['login_id']);
	$password = MD5($_POST['password']);
	
	//connect to database
	include('./conn.php');
	
	$check_query = mysql_query("select uid from users where username='$username' and password='$password' limit 1");
	if($result = mysql_fetch_array($check_query)){
		//log in successfully
		$_SESSION['userid'] = $result['uid'];
		$_SESSION['username'] = $username;
		
		header("Location:./panel.php");
		exit;
	}
	else{
		header("Location:./index.php?info=fail");
		exit;
	}
?>