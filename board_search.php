<?php
session_start();


$gu=$_GET['gu'];
$type=$_GET['type'];
$deposit=$_GET['deposit'];
$rad=$_GET['rad']; #up, under
$_SESSION['wantgu']=$gu;
if($gu=="gangnam"){
	include_once('./conf.php');
}
else if($gu=="seocho"){
	include_once('./conf2.php');
}

$mysqli=new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);
if(mysqli_connect_error()){
	exit('Connect Error!!');
}

if($rad=="up"){
	$q="select * from boardTB where type='$type' and deposit>=$deposit";
}
else if($rad=="under"){
	$q="select * from boardTB where type='$type' and deposit<=$deposit";
}

$result=$mysqli->query($q);
if($result==false){
	echo mysqli_error($mysqli);
}


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
        <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/board/board_view.php?doc_idx=<?php echo $data['regnum']; ?>"><?php echo $data['address']; ?><?php $_SESSION['regnum']=$data['regnum'];?></a></td>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['type']?></td>
    </tr>   
<?php endwhile ?>


