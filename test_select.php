<?php

include_once('./conf.php');

$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);
if(mysqli_connect_error()){
	exit('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}

$q="select * from boardTB";
$result=$mysqli->query($q);

?>
<?php while($data = $result->fetch_array()) :?>
    <tr>
        <td><?php echo $data['regnum']?></td>
        <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/board/board_view.php?doc_idx=<?php echo $data['regnum'];?>"><?php echo $data['address']; ?></a></td>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['type']?></td>

    </tr>
<?php endwhile ?>