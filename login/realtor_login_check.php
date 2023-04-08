<?php
session_start();

extract($_POST);

$gu=$_POST['user_gu'];
############like gangnam....###########


###################
#include_once('../common_2.php');

if($gu=="gangnam"){
	include_once('../conf.php');
	echo "This...?";
	
}
if($gu=="seocho"){
	include_once('../conf2.php');
	echo "This...?";
	
}
#############select DB#################




#########Under code is select user_id to login########
$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);

if(mysqli_connect_error())
{
	exit('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());

}

$q="select * from realtorTB where id='$user_id'";
$result=$mysqli->query($q);


if($result->num_rows==1){
	$encryped_pass=sha1($user_pass);
	$rows=$result->fetch_array(MYSQLI_ASSOC);
	if($rows['pw']==$encryped_pass){
		$_SESSION['is_logged']='YES';
		$_SESSION['user_id']=$user_id;
		$_SESSION['user_pass']=$user_pass;
		$_SESSION['level']=$rows['level'];
		$_SESSION['user_gu']=$rows['region'];
		header("Location:realtor_login_done.php");
		exit();


	}
	else
	{
		$_SESSION['is_logged']='NO';
		$_SESSION['user_id']='';

		
		#header("Location:login_done.php");
		echo "wrong password";

		exit();
		
	}
}
else {
	echo "<br>No ID...<br>";

}




$result->free();
$mysqli->close($mysqli);



?>


