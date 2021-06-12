<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter zano</title>
</head>

<body>
	<table border="0">
		<tr>
			<th align="left">Title</th>
			<th align="left">Body</th>
			<th>Date Created</th>
			<th>Time</th>
			<th colspan="3">Modify Entry</th>

		</tr>
		<?php foreach ($news as $row) { ?>

			<tr>
				<td><?php echo $row->Title; ?></td>
				<td><?php echo $row->Body; ?></td>
				<td><?php echo $row->Date_Created; ?></td>
				<td><?php echo $row->Time_Created; ?></td>
				<td><?php echo anchor('page/edit/' . $row->id, 'Edit'); ?></td>
				<td><?php echo anchor('page/delete/' . $row->id, 'Delete'); ?></td>
				<td><?php echo anchor('page/detail/' . $row->id, 'Detail');
				} ?></td>

			</tr>
	</table>

</body>

</html>
