<html>
<head>
	<title>
		naebang
	</title>
	<link rel="stylesheet" href="./css/nav_css.css">
</head>

<body>
<?php
session_start();
$user_con=$_SESSION['is_logged'];
?>
	<?php if($user_con=="NO")?>
		<nav id="nav">
			<a href="./">Naebang</a>
			<ul>
				<li><a href="./login/login.html">apart</a></li>
				<li><a href="./login/login.html">villa</a></li>
				<li><a href="./login/login.html">oneroom</a></li>
				<li><a href="./login/login.html">officetel</a></li>
				<li><a href="./login/login.html">ofiice</a></li>
				<li><a href="./board/board_list.php">board</a></li>
				<?php if($user_con=="YES"):?>
					<li><a href="./login/logout.php">logout</a></li>
				<?php else :?>
					<li><a href="./login/login.html">login</a></li>
				<?php endif; ?>
				<li><a href="./signup/signup.html">signup</a></li>
			</ul>
		</nav>
	
	
	<p>search zone</p>
	<br><br>

<form name="board_search" method="get" action="./board_search.php">
	Select Gu<br>
	<select name="gu">
		<option value="">----chose type----</option>
		<option value="gangnam">gangnam</option>
		<option value="seocho">seocho</option>
		<option value="songpa">songpa</option>
	</select>
	<br>
	Select Type<br>
	<select name="type">
		<option value="">----chose type----</option>
		<option value="apart">apart</option>
		<option value="oneroom">oneroom</option>
		<option value="villa">villa/tworoom</option>
		<option value="office">office</option>
		<option value="officetel">officetel</option>
	</select>
	<br>
	price<br>
	<input type="number" name="deposit"><br>
	up
	<input type="radio" name="rad" value="up" checked="checked" />
	under
	<input type="radio" name="rad" value="under" /><br>
	<input type="submit" value="search">
</form>




</body>
</html>
