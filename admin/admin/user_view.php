<?php
session_start();

$url=$_SERVER['QUERY_STRING'];
list($val,$index)=explode("=",$url);

$_SESSION['want_del_user_id']=$index;
$id=$_SESSION['want_del_user_id'];

include_once('../conf_user.php');

$q="select * from userTB where id='$id'";
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
</table>
<?php
if($_SESSION['level']==2){
	echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/admin/user_delete_check.php?id='.$data['id'].'">delete</a>';
}
?>


