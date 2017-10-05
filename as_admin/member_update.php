<?
	include ("dblib.php");
	$no=$_POST['no'];
	$phone=$_POST['phone'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	
	$conn=mysql_connect($db_host,$db_user,$db_passwd) or die("fail");
	mysql_select_db($db_name,$conn);
	$result=mysql_query("update as_user set phone='$phone',title='$title',content='content' where no=$no");
?>