<?php
session_start();

$url=$_SERVER['QUERY_STRING'];
list($val,$index)=explode("=",$url);

$_SESSION['want_del_user_id']=$index;
$id=$_SESSION['want_del_user_id'];

if($_SESSION['view_gu']=="gangnam"){
	include_once('../conf.php');
}
else if($_SESSION['view_gu']=="seocho"){
	include_once('../conf2.php');
}

$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);

$q="select * from realtorTB where id='$id'";
$result=$mysqli->query($q);
$data=$result->fetch_array();
?>

<table>
	<tr>
		<td>
			id :
		</td>
		<td>
			<?php echo $data['id']; ?>
		</td>
	</tr>
	<tr>
		<td>
			pw : 
		</td>
		<td>
			<?php echo $data['pw']; ?>
		</td>
	</tr>
	<tr>
		<td>
			email :
		</td>
		<td>
			<?php echo $data['email']; ?>
		</td>
	</tr>
	<tr>
		<td>
			BR :
		</td>
		<td>
			<?php echo $data['BR']; ?>
		</td>
	</tr>
</table>
<?php
if($_SESSION['level']==2){
	echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/admin/realtor_delete_check.php?id='.$data['id'].'">delete</a>';
}
?>


