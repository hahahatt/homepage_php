<a href="http://dev2.daum.net/admin/view_nor_user.php">
	normal user page
</a><br>
<a href="http://dev2.daum.net">
	naebang page
</a><br>
<br><br><hr/>	

<?php

session_start();

include_once('../conf_user.php');





$q="select * from userTB";
$result=$mysqli->query($q);
?>
<?php while($data=$result->fetch_array()):?>
    <tr>
        <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/admin/user_view.php?id=<?php echo $data['id'];?>"><?php echo $data['id']; ?></a></td>
    </tr>
    <br>
<?php endwhile ?>




<!-- <td><a href="http://<?php #echo $_SERVER['HTTP_HOST'];?>/board/board_view.php?doc_idx=<?php #echo $data['regnum'];?>"><?php #echo $data['address']; ?></a></td>
-->
<!--
	<td><button class="btn" onclick="location.href='./nor_delete.php'"><?php #$_SESSION['nu_id']=$data['id'] ?>delete
			</button></td>
-->