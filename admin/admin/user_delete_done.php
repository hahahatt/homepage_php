<?php
session_start();

?>
<?php if($_SESSION['del_status']=="NO"):?>
	<script>
		alert("delete failed");
		location.href="http://dev2.daum.net/admin/view_nor_user.php";
	</script>
<?php elseif($_SESSION['del_status']=="YES"):?>
	<script>
		alert("delete Success!");
		location.href="http://dev2.daum.net/admin/view_nor_user.php";
	</script>
<?php endif ?>