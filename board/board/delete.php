<?php
session_start();

$user_gu=$_SESSION['user_gu'];

if($user_gu=="gangnam"){
	include_once('../conf.php');
}
else if($user_gu=="seocho"){
	include_once('../conf2.php');
}

$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);
if(mysqli_connect_error()){
	echo mysqli_error($mysqli);
	exit('Connect error!');

}
$regnum=$_SESSION['regnum'];

$q="delete from boardTB where regnum=$regnum";
$result=$mysqli->query($q);
if($result==false){
	echo mysqli_error($mysqli);
	$_SESSION['deleted']="NO";
}
else{
	$_SESSION['deleted']="YES";
}

$mysqli->close();

header('Location:delete_done.php');

?>





