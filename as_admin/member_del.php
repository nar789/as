<?
	include ("dblib.php");
	$no=$_POST['no'];
	$conn=mysql_connect($db_host,$db_user,$db_passwd) or die("fail");
	mysql_select_db($db_name,$conn);
	$result=mysql_query("delete from as_user where no=$no");
?>