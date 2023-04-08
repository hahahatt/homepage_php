<?php

session_start();
$user_gu=$_SESSION['user_gu'];
#<!-- session start zone-->
?>
<html>
<head>
	<title>list page</title>
<link a href="../bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<form name="selectgu" method="get" action="./board_list.php">
	<select name="wantgu">
		<option value="">-----choose-----</option>
		<option value="gangnam">gangnam</option>
		<option value="seocho">seocho</option>
	</select>
	<input type="submit" value="ok">
</form>

<?php
$_SESSION['wantgu']=$_GET['wantgu'];
$want_gu=$_SESSION['wantgu'];
if($want_gu=="gangnam" || $user_gu=="gangnam"){
	include_once('../conf.php');
}
else if($want_gu=="seocho" || $user_gu=="seocho"){
	include_once('../conf2.php');
}
?>
<!-- select DB -->
<!--- up code has problem... view the list or select gu...-->
<!-- when user_gu==gangnam... -->


<!-- make button to write -->
<?php if($_SESSION['level']>=1) :?>
	<button class="btn" onclick="location.href='./board.php'">
		write board
	</button>
<?php endif; ?>
<!-- --------------- -->

<!-- show board list ---- -->

<!-- to show make function -->
<?php
$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);
if(mysqli_connect_error()){
	exit('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}


$q = "SELECT * FROM boardTB";
$result = $mysqli->query($q);
if($result==false){
	echo mysqli_error($mysqli);
}
$total_record = $result->num_rows;
?>


<?php if($total_record==0) :?>
    no list..<br>
<?php else :?>
<?php
if( isset($page) ) {
	$now_page = $page;
}
else {
   	$now_page = 1;
}

$record_per_page = 10;
$page_per_block=100;

$now_block=ceil($now_page / $page_per_block);

$start_record = $record_per_page*($now_page-1);
$record_to_get = $record_per_page;

if( $start_record+$record_to_get > $total_record) {
	$record_to_get = $total_record - $start_record;
}

$q = "SELECT * FROM boardTB WHERE 1 ORDER BY regnum DESC";

#$q = "SELECT * FROM boardTB WHERE 1 ORDER BY regnum DESC LIMIT $start_record, $record_to_get";

$result = $mysqli->query($q);

?>

<table class="table">
    <thead>
        <th>글번호</th>
        <th>제목</th>
        <th>작성자</th>
        <th>type</th>

    </thead>
<?php while($data = $result->fetch_array()) :?>
    <tr>
        <td><?php echo $data['regnum']?></td>
        <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/board/board_view.php?doc_idx=<?php echo $data['regnum'];?>"><?php echo $data['address']; ?></a></td>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['type']?></td>

    </tr>

   
<?php endwhile ?>
</table>
<!--
<div class="pagination">
    <ul>

        <?php
        $total_page=ceil($total_record / $record_per_page);
        $total_block=ceil($total_page / $page_per_block);

        if(1<$now_block){
            $pre_page=($now_block-1)*$page_per_block;
            echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/board/board_list.php?page='.$pre_page.'">before</a>';
        }

        $start_page=($now_block-1)*$page_per_block+1;
        $end_page=$now_block*$page_per_block;
        if($end_page>$total_page){
           $end_page=$total_page;
        }

        ?>

        <?php for($i=$start_page; $i<=$end_page;$i++) :?>
            <li><a href="./board_list.php?id=<?php echo $id; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endfor ?>
    
    	<?php
    	if($now_block < $total_block){
        	$post_page=($now_block)*$page_per_block+1;
        	echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/board_list.php?page'.$post_page.'">next</a>';
    	}
    	?>
    </ul>
</div>
-->
<?php endif?>






</body>
</html>