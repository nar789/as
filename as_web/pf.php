<html>
<head>
	<meta charset="UTF-8">
	<title>pf</title>
	<link rel="stylesheet" type="text/css" href="css/pf.css">
</head>

<body>
	<table>
	<?
		include ("dblib.php");
		$no=$_GET['no'];
		$g=$_GET['g'];
		$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
		if(!$conn)echo "db connect error.";
		if($g==1){$result=mysqli_query($conn,"select * from as_user where no=$no");
		}else if($g==2){$result=mysqli_query($conn,"select * from as_user2 where no=$no");
		}else if($g==3){$result=mysqli_query($conn,"select * from as_user3 where no=$no");}


		$row=mysqli_fetch_array($result);
		echo "<img class=profile src=".$row['pfimg']." onclick='imgclick(this)'>";
		echo "<div class=title>".urldecode($row['title'])."</div>";
		echo "<b id=comment>내용</b><textarea readonly='readonly' rows=4 cols=60 class=content>".urldecode($row['content'])."</textarea>";
		echo "<div class=btn><center><img src='img/dcall.png' onclick='directcall(\"".$row['phone']."\")'></center></div>";
	?>
	</table>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/pf.js"></script>
</body>
</html>