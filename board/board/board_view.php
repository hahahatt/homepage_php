<?php
session_start();
$user_gu=$_SESSION['user_gu'];

$url=$_SERVER['QUERY_STRING'];
list($val,$index)=explode("=",$url);

$_SESSION['regnum']=$index;
#<!-- session start zone-->

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
$regnum=$_SESSION['regnum'];
$q="select * from boardTB where regnum=$regnum";
$result=$mysqli->query($q);
$data=$result->fetch_array();
?>
<table>
	<tr>
		<td>
			title
		</td>
		<td>
			<?php echo $data['type']; ?>
		</td>
	</tr>
	<tr>
		<td>
			writer
		</td>
		<td>
			<?php echo $data['id']; ?>
		</td>
	</tr>
	<tr>
		<td>
			content
		</td>
		<td>
			<?php echo $data['content']; ?>
		</td>
	</tr>
</table>

<?php

echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/board/board_list.php" class="btn">list</a>';
if($_SESSION['user_id']==$data['id'] || $_SESSION['level']==2){
	echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/board/modify.php?doc_idx='.$data['regnum'].'">update</a>';
}
if($_SESSION['user_id']==$data['id'] || $_SESSION['level']==2){
	echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/board/delete.php?doc_idx='.$data['regnum'].'">delete</a>';
}
?>

