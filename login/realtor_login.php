

<html>
<head>
	Login Page
<meta charset="utf-8">
</head>
<body>
<?php
#session_start();
?>

login.php -Login Page<hr>

<form name="login_form" method="post" action="realtor_login_check.php">
	ID: <input type="text" name="user_id"><br>
	Pass: <input type="password" name="user_pass">
	<select name="user_gu">
		<option value="">---Choose---</option>
		<option value="gangnam">Gangnam-Gu</option>
		<option value="seocho">Seocho-Gu</option>
		<option value="songpa">Songpa-Gu</option>
		<option value="gangnam">Gangnam-Gu</option>
		<option value="gangnam">Gangnam-Gu</option>
		<option value="gangnam">Gangnam-Gu</option>
		</select>
	<input type="submit" value="login">
</form>

</body>


</html>


