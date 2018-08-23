<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
<?php
$files=$_SERVER['DOCUMENT_ROOT'] . '/user_data/mpolyakov/PHP-HTTP/exams';
echo $files;
$arrayfiles=scandir($files); ?>
<ol>
<?php foreach ($arrayfiles as $value) {
	if ($value == '.' || $value == '..'){
		continue;
	}?>
	<li><?php echo $value?>;</li>
<?php } ?>
</ol>

<form action="test.php" method="GET">
	<div><input type="text" name="number" placeholder="Введите номер"></div>
	<input type="submit" value="Отправить">
</form>     

</body>
</html>
