<?php
session_start();

?>
<script>
	<?php if($_SESSION['level']==2):?>
		alert("You are Admin!!");
		location.href="http://dev2.daum.net";

	<?php endif; ?>
</script>