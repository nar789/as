<html>
<head>
	<meta charset="UTF-8">
	<title>Member</title>
	<link rel="stylesheet" type="text/css" href="css/member.css">
</head>
<body>
	<?
		if($_GET['url'])
			echo "<script>var pfurl='".$_GET['url']."';</script>";
		else
			echo "<script>var pfurl='';</script>";
	?>
	<table id='gv'>
		<tr>
			<td>광고사진&nbsp;320X50</td>
			<td>저장</td>
		</tr>
		<tr>
			<td><form name="upload-form" action="upload5.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
			<input type=file name=upload id=upload>
			<input type=submit value='이미지업로드'>
			</form><?
				$url=$_GET['url'];
				if($url)echo "<center><img class=banner src=\"".$url."\"></center>";
			?></td>
			<td><a href=#><div class=btn onclick='save()'>저장</div></a></td>
		</tr>
	</table>
	<table id='mem'>
		<tr>
			<td>순번</td>
			<td>광고사진&nbsp;320X50</td>
		</tr>
			<?
				include ("dblib.php");
				$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
				if(!$conn)echo "db connect error.";
				$result=mysqli_query($conn,"select * from ad");
				$cnt=0;
				while($row=mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>".$row['no']."</td>";
					echo "<td><img class=banner src=".$row['pfurl']." onclick='imgclick(this)'></td>";
					echo "</tr>";
					$cnt=$cnt+1;
				}
			?>
		
	</table>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/ad.js"></script>
</body>
</html>