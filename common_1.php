<?php
$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);

if(mysqli_connect_error())
{
	exit('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());

}
?>