<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>https://github.com/MihailPolyakov/PHP-HTTP.php
</head>
<body>
	
<form enctype="multipart/form-data" action=" " method="POST">
	<!--<div><input type="text" name="Введите число"></div>-->
	<div><input type="file" name="tests[]"></div>
	<div><input type="submit" value="Отправить"></div>
</form>

<?php if (!empty($_FILES)) {
    $files=$_SERVER['DOCUMENT_ROOT'] . '/user_data/mpolyakov/PHP-HTTP/exams';
    $arrayfiles=scandir($files);
    foreach ($arrayfiles as $value) {
        if ($value == $_FILES['tests'] ['name'] ['0']) {
	    echo "Такое имя уже существует";
        }else{
	    $newfl = 'exams/' . $_FILES['tests'] ['name'] ['0'];
	    move_uploaded_file($_FILES['tests'] ['tmp_name'] ['0'], $newfl);
	    header('Location:list.php');
	    exit;
        }	
    }	
} else{
	http_response_code(404);
}?>
</body>
</html>
