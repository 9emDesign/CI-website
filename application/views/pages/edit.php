<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<style>
		* {
			font-family: Roboto, sans-serif;
		}

		th {
			width: 200px;
			background-color: darkslateblue;
			color: snow;
			border-collapse: separate;
			margin: 0;


		}

		td {
			text-align: left;
			border-collapse: separate;
		}
	</style>
	<h3>Update User Information</h3>
	<?php
	$i = 1;
	foreach ($data as $row) {
	?>
		<form method="post">
			<table width="600" border="1" cellspacing="5" cellpadding="5">

				<tr>
					<td width="230">Enter Your Name </td>
					<td width="329"><input type="text" name="name" value="<?php echo $row->name; ?>" /></td>
				</tr>
				<tr>
					<td>Enter Your Email </td>
					<td><input type="text" name="email" value="<?php echo $row->email; ?>" /></td>
				</tr>
				<tr>
					<td>Enter Your Password </td>
					<td><input type="text" name="password" value="<?php echo $row->passwords; ?>" /></td>
				</tr>
				<tr>
					<td>Enter Your Mobile </td>
					<td><input type="text" name="mobile" value="<?php echo $row->mobile; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="update" value="Update Records" />
					</td>
				</tr>
			</table>
		</form>
	<?php } ?>

</body>

</html>
