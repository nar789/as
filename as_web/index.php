<html>
<head>
	<meta charset="UTF-8">
	<title>as</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	<div id=header>
		<img id=logo src='img/logo.png'>
		<a href='#'><div class=menu id=m1 onclick='menuclick(this)'>폰팅</div></a>
		<a href='#'><div class=menu id=m2 onclick='menuclick(this)'>고민상담</div></a>
		<a href='#'><div class=menu id=m3 onclick='menuclick(this)'>운세</div></a>
		<a href='#'><div class=menu id=m4 onclick='menuclick(this)'>인기핫</div></a>
	</div>

	<div id=list>
	<iframe src=m1.php id=ifr></iframe>
	</div>

	<div id=ad>
	<iframe src=ad.php id=adifr></iframe>
	</div>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>