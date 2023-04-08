<?php
session_start();

extract($_POST);
$user_pass=$_POST['user_pass'];
$user_id=$_POST['user_id'];
############like gangnam....###########


###################

#############select DB#################


include_once('../conf_normal.php');

#########Under code is select user_id to login########

$q="select * from userTB where id='$user_id'";
$result=$mysqli->query($q);


if($result->num_rows==1){
	$encryped_pass=sha1($user_pass);
	$rows=$result->fetch_array(MYSQLI_ASSOC);

	if($rows['pw']==$user_pass){
		$_SESSION['is_logged']='YES';
		$_SESSION['user_id']=$user_id;
		$_SESSION['user_pass']=$user_pass;
		$_SESSION['level']=$rows['level'];
		header("Location:http://dev2.daum.net/login/normal_login_done.php");
		exit();


	}
	else
	{
		$_SESSION['is_logged']='NO';
		$_SESSION['user_id']='';


		header("Location:http://dev2.daum.net/login/normal_login_done.php");
		

		exit();
		
	}
}
else {
	echo "<br>No ID...<br>";

}




$result->free();
$mysqli->close($mysqli);



?>


