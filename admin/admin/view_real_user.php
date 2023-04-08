<a href="http://dev2.daum.net/admin/view_nor_user.php">
	normal user page
</a><br>
<a href="http://dev2.daum.net">
	naebang page
</a><br>
<br><br>
<form name="selectgu" method="get" action="./view_real_user.php">
	<select name="wantgu">
		<option value="">-----choose-----</option>
		<option value="gangnam">gangnam</option>
		<option value="seocho">seocho</option>
	</select>
	<input type="submit" value="ok">
</form>




<hr/>	

<?php

session_start();

$_SESSION['view_gu']=$_GET['wantgu'];

$select_gu=$_SESSION['view_gu'];
if($select_gu=="gangnam"){
	include_once('../conf.php');
}
else if($select_gu=="seocho"){
	include_once('../conf2.php');
}


$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);

$q="select * from realtorTB";
$result=$mysqli->query($q);
?>

<?php while($data=$result->fetch_array()):?>
    <tr>
        <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/admin/realtor_view.php?id=<?php echo $data['id'];?>"><?php echo $data['id']; ?></a></td>
    </tr>
    <br>
<?php endwhile ?>	

