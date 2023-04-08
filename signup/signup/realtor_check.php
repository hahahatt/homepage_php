<?php
session_start();
$user_gu=$_SESSION['user_gu'];
#gangnam, seocho, songpa....

if($user_gu=="gangnam"){
	include_once('../conf.php');

}
if($user_gu=="seocho"){
	include_once('../conf2.php');
	

}
$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);
	if (mysqli_connect_error()){

		exit('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
# DB connect

extract($_POST);

#echo $_POST;
echo $user_id.'<br>';
echo $user_pass.'<br>';
echo $user_pass2.'<br>';
echo $user_email.'<br>';
echo $user_gu.'<br>';
echo $DB['host'].'<br>';
echo $DB['db'].'<br>';
$encrypt_pass=sha1($user_pass);

$q="insert into realtorTB values('$user_id','$encrypt_pass','$user_email','$user_regi','$user_gu',1)";

$mysqli->query($q);


$mysqli->close();
header('Location:realtor_done.php');
exit();



?>




