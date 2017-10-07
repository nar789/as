<?
	include ("dblib.php");
	$pfurl=$_POST['pfurl'];

	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	$result=mysqli_query($conn,"update ad set pfurl='$pfurl' where no=1");
	mysqli_close($conn);
?>