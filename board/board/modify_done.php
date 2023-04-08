<?php
session_start();
?>
<?php if($_SESSION['modified']=="YES"):?>
	<script>
		alert("modified done..!!");
		location.href="http://dev2.daum.net/board/board_list.php";
	</script>
<?php endif; ?>
<?php if($_SESSION['modified']=="NO"):?>
	<script>
		alert("modified failed..!");
		location.href="http://dev2.daum.net/board/board_list.php";
	</script>
<?php endif; ?>
