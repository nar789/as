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
			<td>프로필사진</td>
			<td>핸드폰</td>
			<td>제목</td>
			<td>내용</td>
			<td>저장</td>
		</tr>
		<tr>
			<td><form name="upload-form" action="upload3.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="25242880"/>
			<input type=file name=upload id=upload>
			<input type=submit value='이미지업로드'>
			</form><?
				$url=$_GET['url'];
				if($url)echo "<center><img class=profile src=\"".$url."\"></center>";
			?></td>
			<td><input type=text class='inputtext' id=phone></td>
			<td><input type=text class='inputtext' id=title></td>
			<td><textarea rows=5 cols=50 id=content></textarea></td>
			<td><a href=#><div class=btn onclick='save()'>저장</div></a></td>
		</tr>
	</table>
	<table id='mem'>
		<tr>
			<td>순번</td>
			<td>프로필사진</td>
			<td>핸드폰</td>
			<td>제목</td>
			<td>내용</td>
			<td>수정</td>
			<td>삭제</td>
		</tr>
			<?
				include ("dblib.php");
				$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
				if(!$conn)echo "db connect error.";
				$result=mysqli_query($conn,"select * from as_user3");
				$cnt=0;
				while($row=mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>".$row['no']."</td>";
					echo "<td>";
					echo "<form name=\"upload-form\" action=\"upload3.php?no=".$row['no']."\" method=\"post\" enctype=\"multipart/form-data\"><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"25242880\"/>
						<input type=file name=upload id=upload>
						<input type=submit value='이미지업로드'>
						</form>";
					echo "<img class=profile src=".$row['pfimg']." onclick='imgclick(this)'></td>";
					echo "<td><input type=text class=inputtext id=".$cnt."phone value=".$row['phone']."></td>";
					echo "<td><input type=text class='inputtext' id=".$cnt."title value=\"".urldecode($row['title'])."\"></td>";
					echo "<td><textarea rows=5 cols=50 id=".$cnt."content>".urldecode($row['content'])."</textarea></td>";
					echo "<td><center><a href=#><div class=btn onclick='update(".$row['no'].",".$cnt.")'>수정</div></a></center></td>";
					echo "<td><center><a href='#'><div class=btn onclick='del(".$row['no'].")'>삭제</div></a></center></td>";
					echo "</tr>";
					$cnt=$cnt+1;
				}
			?>
		
	</table>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/member3.js"></script>
</body>
</html>