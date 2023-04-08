<?php
session_start();

echo "<br> Session value :";
var_dump($_SESSION);
echo "<br>".$_SESSION['user_id'];
echo "<br> POST value: ";
var_dump($_POST);
echo "<br>";

$user_id=$_POST['user_id'];
$user_gu=$_POST['user_gu'];
echo "<br> User_id :";
echo $user_id.'<br>';
echo $user_gu.'<br>';


if($user_gu=="gangnam"){
	include_once('./conf.php');
	echo "This...?";
	
}


$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);

if(mysqli_connect_error())
{
	exit('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());

}
else {
	echo "<br>connect Success!!";
}
echo "here...?<br>";
$q="select * from realtorTB where id='$user_id'";
$result=$mysqli->query($q);
echo "this....????";
if($result->num_rows==1){
	$encryped_pass=sha1($user_pass);
	$rows=$result->fetch_array(MYSQLI_ASSOC);
	if($rows['pw']==$encryped_pass){
		$_SESSION['is_logged']='YES';
		$_SESSION['user_id']=$user_id;
		$_SESSION['user_pass']=$user_pass;
		echo '<br>';
		echo $rows['level'].'<br>';
		echo "success".'<br>';
		#echo $realtor_gu.'<br>';
		#header("Location:realtor_login_done.php");
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
	echo "<br>last else..<br>";

}



?>