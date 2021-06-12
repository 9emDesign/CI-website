<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php echo form_open() ?>
	<?php echo form_label('Name:', 'first name') . '<br/>'; ?>
	<?php echo form_input('name') . '<br/>'; ?>
	<?php echo form_label('Email:', 'email') . '<br/>'; ?>
	<?php echo form_input('email') . '<br/>'; ?>
	<?php echo form_label('Password:', 'password') . '<br/>'; ?>
	<?php echo form_password('password') . '<br/>'; ?>
	<?php echo form_label('Mobile:', 'mobile') . '<br/>'; ?>
	<?php echo form_input('mobile') . '<br/><br/>'; ?>
	<?php echo form_submit('save', 'save') ?>
	<?php echo form_close() ?>
</body>

</html>
