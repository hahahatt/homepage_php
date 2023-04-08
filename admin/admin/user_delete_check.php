<?php
session_start();
$id=$_SESSION['want_del_user_id'];

include_once('../conf_user.php');

$q="delete from userTB where id='$id'";
$result=$mysqli->query($q);

if($result==false){
	echo "what..?<br>";
	$_SESSION['del_status']="NO";
	header('Location:./user_delete_done.php');
	exit();
}
else{
	echo "why..??<br>";
	$_SESSION['del_status']="YES";
	echo $_SESSION['del_status'];
	header('Location:./user_delete_done.php');
	exit();
}

?>