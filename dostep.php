<?php
session_start();
 include_once("common.php");
try{
		include_once "src/facebook.php";
	}catch(Exception $e){
		error_log($e);
	}
		mysqlc();		
//		$nazwa=$_GET['nazwa'];
  //$czas= 0;
	if ( $nazwa == "12345")
	{
	
  	$uzyt = GetSQLValueString($_SESSION['user'], "text");
	echo $_SESSION['user'];
  	$query = sprintf("SELECT * FROM newmember WHERE email = %s",$uzyt);
		$res = mysql_query($query) or die('Query failed1: ' . mysql_error() . "<br />\n$sql");
		$row = mysql_fetch_array($res);
 		$iquery = sprintf("UPDATE newmember SET dostep = '%s' WHERE email = '%s'","yes",$_SESSION['user']);
		$res = mysql_query($iquery) or die('Query failed2: ' . mysql_error() . "<br />\n$sql");
		  	$uzyt = GetSQLValueString($_SESSION['user'], "text");
	echo $_SESSION['user'];
  	$query = sprintf("SELECT * FROM newmember WHERE email = %s",$uzyt);
		$res = mysql_query($query) or die('Query failed1: ' . mysql_error() . "<br />\n$sql");
		$row = mysql_fetch_array($res);
		echo $row['dostep'];
		exit();*/



include_once('index_soz.php');
	
?>