<?php
session_start();
$is_logged=$_SESSION['is_logged'];
if($is_logged=='YES'){

	$user_id=$_SESSION['user_id'];
	$message=$user_id.'is logged on';

}
else {
	
	$message='Failed to login';

}

?>
<html>
<head>
<title>
login page
</title>
</head>
<body>
login_done.php login done page<hr>

<?php
echo $message;
?>
<br>

<a href="http://dev2.daum.net/">first page</a><br>
</body>
</html>


