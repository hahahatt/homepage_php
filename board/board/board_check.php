<?php

session_start();

if($_SESSION['user_gu']=="gangnam"){
	include_once('../conf.php');
}
else if($_SESSION['user_gu']=="seocho"){
	include_once('../conf2.php');
}

$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);
if(mysqli_connect_error()){
	exit('Connect error!!');
}
$address=$_POST['board_address'];
$tradetype=$_POST['board_tradetype'];
$deposit=$_POST['board_deposit'];
$rent=$_POST['board_rent'];
$size=$_POST['board_size'];
$floor=$_POST['board_floor'];
$id=$_POST['board_id'];
$type=$_POST['board_type'];
$content=$_POST['board_content'];

$q="insert into boardTB(address,tradetype,deposit,rent,size,floor,id,type,content,realtorTB_id) values('$address','$tradetype','$deposit','$rent','$size','$floor','$id','$type','$content','$id')";

$result=$mysqli->query($q);

if($result==false){
	echo mysqli_error($mysqli);
}
$mysqli->close();

header('Location:http://dev2.daum.net/board/board_list.php');

?>
