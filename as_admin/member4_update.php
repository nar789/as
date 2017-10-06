<?
	include ("dblib.php");
	$no=$_POST['no'];
	$phone=$_POST['phone'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	if($conn)echo "error!";
	$result=mysqli_query($conn,"update as_user4 set phone='$phone',title='$title',content='$content' where no=$no");
?>