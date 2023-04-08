<?php
session_start();

?>
<?php if($_SESSION['del_real_status']=="NO"):?>
	<script>
		alert("delete failed");
		location.href="http://dev2.daum.net/admin/view_real_user.php";
	</script>
<?php elseif($_SESSION['del_real_status']=="YES"):?>
	<script>
		alert("delete Success!");
		location.href="http://dev2.daum.net/admin/view_real_user.php";
	</script>
<?php endif ?>