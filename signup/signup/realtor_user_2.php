
<html>
<head>
<title>Sign Up page</title>
<meta charset="utf-8">
</head>
<body>
signup.php - Sign Up page<br />
<hr />
<?php
	session_start();


?>

<form name="signup_form" method="post" action="realtor_check.php">

	<br>
	ID: <input type="text" name="user_id"><br>
	PASSWORD: <input type="password" name="user_pass"><br>
	REPASSWORD: <input type="password" name="user_pass2"><br>
	Email: <input type="text" name="user_email"><br>
	Business Registration: <input type="text" name="user_regi"><br>
	<select name="user_gu">
		<option value="">---Choose---</option>
		<option value="gangnam">Gangnam-Gu</option>
		<option value="seocho">Seocho-Gu</option>
		<option value="songpa">Songpa-Gu</option>
		<option value="gangnam">Gangnam-Gu</option>
		<option value="gangnam">Gangnam-Gu</option>
		<option value="gangnam">Gangnam-Gu</option>
	</select>

	<input type="submit" value="Create Account">
	<br>
</form>


</body>


</html>