<?php
session_start();

?>

<?php if($_SESSION['deleted']=="YES") :?>
	<script>
		alert("Delete Done.!!");
		location.href="http://dev2.daum.net/board/board_list.php";
	</script>
<?php else:?>
	<script>
		alert("Delete fail...");
		location.href="http://dev2.daum.net/board/board_list.php";
	</script>

<?php endif; ?>





