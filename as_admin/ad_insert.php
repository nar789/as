<?
	include ("dblib.php");
	$pfurl=$_POST['pfurl'];
	$url=$_POST['url'];
	$prob=$_POST['prob'];

	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	echo "insert into ad values(null,'$pfurl','$url',$prob)";
	$result=mysqli_query($conn,"insert into ad values(null,'$pfurl','$url',$prob)");
	mysqli_close($conn);
?>