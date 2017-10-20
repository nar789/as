<html>
<head>
	<meta charset="UTF-8">
	<title>ad</title>
	<link rel="stylesheet" type="text/css" href="css/ad.css">
</head>

<body>
	<?
		include ("dblib.php");
		$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
		if(!$conn)echo "db connect error.";
		$result=mysqli_query($conn,"select * from ad");
		$rn=mt_rand(1,100);
		$until=0;
		while($row=mysqli_fetch_array($result))
		{
			$until=$until+$row['prob'];
			if($until>=$rn)//bingo.
			{
				echo "<img src=\"".$row['pfurl']."\" onclick=imgclick(\"".$row['url']."\")>";
				break;
			}
		}
	?>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/ad.js"></script>
</body>
</html>