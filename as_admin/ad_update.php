<?
	include ("dblib.php");
	$no=$_POST['no'];
	$url=$_POST['url'];
	$prob=$_POST['prob'];
	
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if($conn)echo "error!";
	$result=mysqli_query($conn,"update ad set url='$url',prob=$prob where no=$no");
?>