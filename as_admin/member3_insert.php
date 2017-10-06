<?
	include ("dblib.php");
	$pfurl=$_POST['pfurl'];
	$phone=$_POST['phone'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if(!$conn)echo "error!";
	echo "insert into as_user3 values(null,'$phone','$title','$content','$pfurl')";
	$result=mysqli_query($conn,"insert into as_user3 values(null,'$phone','$title','$content','$pfurl')");
	mysqli_close($conn);
?>