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
	<h1>Dashboard</h1>
	<h3>User Information</h3>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Mobile</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
		$i = 1;
		foreach ($data as $row) {
			echo '<tr>';
			echo '<td>' . $row->name . '</td>';
			echo '<td>' . $row->email . '</td>';
			echo '<td>' . $row->passwords . '</td>';
			echo '<td>' . $row->mobile . '</td>';
			echo "<td><a href='deletedata?id=" . $row->id . "'>Delete</a></td>";
			echo "<td><a href='updatedata?id=" . $row->id . "'>Update</a></td>";
			echo '</tr>';
			$i++;
		}
		?>
	</table>
	<?php echo anchor('page/savedata', 'Register new User'); ?>
</body>

</html>
