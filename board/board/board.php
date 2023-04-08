<html>

<head>
<title>
	board page
</title>
</head>

<body>
<?php session_start(); ?>

<form name="write_form" method="post" action="./board_check.php">
<input type="hidden" name="user_id" value="<?php echo$_SESSION['user_id']?>">
<table>
	<tr>
		<td>
			address
		</td>
		<td>
			<input type="text" name="board_address" size="90">
		</td>
	</tr>
	<tr>
		<td>
			tradetype
		</td>
		<td>
			<input type="text" name="board_tradetype" size="90">
		</td>
	</tr>
	<tr>
		<td>
			deposit
		</td>
		<td>
			<input type="number" name="board_deposit" size="90">
		</td>
	</tr>
	<tr>
		<td>
			rent
		</td>
		<td>
			<input type="number" name="board_rent" size="90">
		</td>
	</tr>
	<tr>
		<td>
			size
		</td>
		<td>
			<input type="number" name="board_size" size="90">
		</td>
	</tr>
	<tr>
		<td>
			floor
		</td>
		<td>
			<input type="number" name="board_floor" size="90">
		</td>
	</tr>
	<tr>
		<td>
			id
		</td>
		<td>
			<textarea name="board_id" size="90"><?php echo $_SESSION['user_id'];?></textarea>
		</td>
	</tr>
	<tr>
		<td>
			type
		</td>
		<td>
			<input type="text" name="board_type" size="90">
		</td>
	</tr>
	<tr>
		<td>
			content

		</td>
		<td>
			<textarea name="board_content" cols="100" rows="10"></textarea>
		</td>
	</tr>
</table>
<div>
	<input type="submit" value="save">
</div>

</form>



</body>

</html>
