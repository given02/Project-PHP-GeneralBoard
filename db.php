<?php
	error_reporting(E_ALL);
    ini_set("display_errors", 1);

	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

	session_start();
	
	$db = new mysqli("localhost","root","111111","boardPHP", "3307");
	$db->set_charset("utf8");

	function mq($sql){
		global $db;
		return $db->query($sql);
	}

	function isLogin(){
		if(isset($_SESSION['userid'])){
			echo "<h5>{$_SESSION['userid']} 님 환영합니다.</h5>";
			echo '<a href="./logout.php"><input type="button" value="로그아웃" /></a>';
		} else {
			echo "<script> alert('잘못된 접근입니다.'); location.href='./login.php';</script>";
		} 
	}
?>