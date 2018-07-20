<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
<?php
$files='C:/xampp/htdocs/example/exams';
$arrayfiles=scandir($files); ?>
<ol>
<?php foreach ($arrayfiles as $value) {
	if ($value == '.' || $value == '..'){
		continue;
	}?>
	<li><?php echo $value?>;</li>
<?php } ?>
</ol>

</body>
</html>