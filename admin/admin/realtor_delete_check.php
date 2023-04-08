<?php
session_start();
$id=$_SESSION['want_del_user_id'];

if($_SESSION['view_gu']=="gangnam"){
	include_once('../conf.php');
}
else if($_SESSION['view_gu']=="seocho"){
	include_once('../conf2.php');
}

$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);


$q="delete from realtorTB where id='$id'";
$result=$mysqli->query($q);

if($result==false){
	$_SESSION['del_real_status']="NO";
	header('Location:./user_delete_done.php');
	exit();
}
else{
	$_SESSION['del_real_status']="YES";
	echo $_SESSION['del_real_status'];
	header('Location:./real_delete_done.php');
	exit();
}

?>