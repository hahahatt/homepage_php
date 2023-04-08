<?php

session_start();
$user_gu=$_SESSION['user_gu'];

#<!-- session start zone-->
extract($_POST);

$address=$_POST['board_address'];
$tradetype=$_POST['board_tradetype'];
$deposit=$_POST['board_deposit'];
$rent=$_POST['board_rent'];
$size=$_POST['board_size'];
$floor=$_POST['board_floor'];
$id=$_POST['board_id'];
$type=$_POST['board_type'];
$content=$_POST['board_content'];
$regnum=$_SESSION['regnum'];

if($user_gu=="gangnam" || $_SESSION['wantgu']=="gangnam"){
	include_once('../conf.php');
}
else if($user_gu=="seocho" || $_SESSION['wantgu']=="seocho"){
	include_once('../conf2.php');
}
$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);
if(mysqli_connect_error()){
	exit('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}

$q="update boardTB set address='$address',tradetype='$tradetype',deposit='$deposit',rent='$rent',size='$size',floor='$floor',id='$id',type='$type',content='$content'where regnum=$regnum";

$result=$mysqli->query($q);

if($result==false){
	$_SESSION['modified']="NO";
	echo mysqli_error($mysql);
}
else{
	$_SESSION['modified']="YES";
}

$mysqli->close();

header('Location:http://dev2.daum.net/board/modify_done.php');
exit();


?>