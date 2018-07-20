<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	
<form enctype="multipart/form-data" action=" " method="POST">
	<!--<div><input type="text" name="Введите число"></div>-->
	<div><input type="file" name="tests[]"></div>
	<div><input type="submit" value="Отправить"></div>
</form>

<?php if (!empty($_FILES)) {
	$extension = 'json';
	$filename = uniqid() . '.' . $extension;
	$newfl = 'exams/' . $filename;
	move_uploaded_file($_FILES['tests'] ['tmp_name'] ['0'], $newfl);
	echo 'Файлы успешно загружены, можно закгрузить еще =)';
} else{
	echo 'К сожалению файлы не загружены, повторите загрузку';
}?>
</body>
</html>