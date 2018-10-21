<?php
	//error_reporting(0);
	//mysql_connect("localhost","root","")or die(mysql_error());
	//error_reporting(E_ALL ^ E_DEPRECATED);
	@mysql_connect('localhost','root','');
	mysql_select_db("test");
	session_start();
	//$con = mysqli_connect("localhost","root","","police");
	//include "function1.php";
?>
