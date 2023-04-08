<?php
session_start();

?>

<?php if($_SESSION['level']!=2):?>
	<script>
		alert("You are not admin..!!");
		location.href="http://dev2.daum.net";
	</script>
<?php endif; ?>

<html>
<head>
	<title>admin page</title>
</head>
<body>
	<a href="http://dev2.daum.net/admin/view_nor_user.php">
	normal user page
	</a><br>
	<a href="http://dev2.daum.net/admin/view_real_user.php">realtor user page</a><br>
	<a href="http://dev2.daum.net">naebang page</a><br>
</body>
</html>


