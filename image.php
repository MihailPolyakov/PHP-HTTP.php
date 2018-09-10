<?php
if (!empty($_POST)){
	$array = explode(',', $_POST['string']);
	$i=0;
	$count=0;
	$name=0;	
		foreach ($array as $value) {
			++$i;
			$key = 'q' . $i;	
			if ($value == $_POST[$key]) {
				++$count;
			}
		}

	$text = $_POST['name'] . ',' . 'You are' . ' ' . $count . ' ' . 'mark';
	$image=imagecreatetruecolor(300, 200);
	$textfront=imagecolorallocate($image, 200, 100, 100);
	$background=imagecolorallocate($image, 150, 150, 150);
	$im = __DIR__ . '/image.jpg';
	if (!file_exists($im)) {
		echo "Файл не найден";
		exit;
	}
	$imagefront=imagecreatefromjpeg($im);
	
	$inimage=imagefill($image, 10, 10, $background);
	imagecopy($image, $imagefront, 10, 10, 10, 10, 400, 200);
	$fontfile=__DIR__ . '/12136.ttf';
	if (!file_exists($fontfile)) {
		echo "Файл не найден";
		exit;
	}
	imagettftext($image, 20, 0, 0, 20, $textfront, $fontfile, $text);
	
	header('Content-Type: image/jpeg');
	imagejpeg($image);
	}	