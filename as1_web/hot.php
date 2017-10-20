<html>
<head>
	<meta charset="UTF-8">
	<title>as</title>
	<link rel="stylesheet" type="text/css" href="css/hot.css">
</head>

<body>
	<table>
	<?
		include ("dblib.php");
		$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
		if(!$conn)echo "db connect error.";
		$result=mysqli_query($conn,"select * from as_user4");
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr class=row>";
			echo "<td><img class=profile src=".$row['pfimg']." onclick='imgclick(this)'></td>";
			echo "<td>";
			echo "<div class=title>".urldecode($row['title'])."</div>";
			echo "<div class=content>".urldecode($row['content'])."</div>";
			echo "</td>";
			echo "<td>";
			echo "<div class=install onclick='install(\"".$row['phone']."\")'>설치</div>";
			echo "</td>";
			echo "</tr>";
		}
	?>
	</table>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/hot.js"></script>
</body>
</html>