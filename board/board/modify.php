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

$q="select * from boardTB where regnum=$regnum";
$result=$mysqli->query($q);
if($result==false){
	echo mysqli_error($mysqli);
}

$data=$result->fetch_array();

?>


<form name="write_form" method="post" action="./modify_check.php">
<input type="hidden" name="user_id" value="<?php echo$_SESSION['user_id']?>">
<table>
	<tr>
		<td>
			address
		</td>
		<td>
			<input type="text" name="board_address" size="90" value="<?php echo $data['address'];?>">
		</td>
	</tr>
	<tr>
		<td>
			tradetype
		</td>
		<td>
			<input type="text" name="board_tradetype" size="90" value="<?php echo $data['tradetype'];?>">
		</td>
	</tr>
	<tr>
		<td>
			deposit
		</td>
		<td>
			<input type="number" name="board_deposit" size="90" value="<?php echo $data['deposit'];?>">
		</td>
	</tr>
	<tr>
		<td>
			rent
		</td>
		<td>
			<input type="number" name="board_rent" size="90" value="<?php echo $data['rent'];?>">
		</td>
	</tr>
	<tr>
		<td>
			size
		</td>
		<td>
			<input type="number" name="board_size" size="90" value="<?php echo $data['size'];?>">
		</td>
	</tr>
	<tr>
		<td>
			floor
		</td>
		<td>
			<input type="number" name="board_floor" size="90" value="<?php echo $data['floor'];?>">
		</td>
	</tr>
	<tr>
		<td>
			id
		</td>
		<td>
			<textarea name="board_id" size="90"><?php echo $_SESSION['user_id'];?></textarea>
		</td>
	</tr>
	<tr>
		<td>
			type
		</td>
		<td>
			<input type="text" name="board_type" size="90" value="<?php echo $data['type'];?>">
		</td>
	</tr>
	<tr>
		<td>
			content
		</td>
		<td>
			<textarea name="board_content" cols="100" rows="10"><?php echo $data['content'];?></textarea>
		</td>
	</tr>
</table>
<div>
	<input type="submit" value="save">
</div>

</form>




