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
		$files='C:/xampp/htdocs/example/exams';
		$arrayfiles=scandir($files);
		foreach ($arrayfiles as $value) {
			if ($value == $_FILES['tests'] ['name'] ['0']) {
				echo "Такое имя уже существует";
			}else{
				$newfl = 'exams/' . $_FILES['tests'] ['name'] ['0'];
				move_uploaded_file($_FILES['tests'] ['tmp_name'] ['0'], $newfl);
				header('Location:http://localhost/example/list.php');
			}	
		}	
} else{
	echo 'К сожалению файлы не загружены, повторите загрузку';
}?>
</body>
</html>