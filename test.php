<?php	
if (!empty($_GET)) {
	$array=0;
	$newarray=[];
	$test = 0;
	$int =0;
	$fl=0;
	$files= $_SERVER['DOCUMENT_ROOT'] . '/user_data/mpolyakov/PHP-HTTP/exams';
	$arrayfiles=scandir($files, 1);
	if (array_key_exists($_GET['number'], $arrayfiles) == true) {
		$int = $_GET['number'];
		if ($arrayfiles[$int]=='.' || $arrayfiles[$int]== '..'){
			http_response_code(404);
			exit;
		} else {
			$fl=$arrayfiles[$int];
			$test = file_get_contents("exams/$fl");
			$array =json_decode($test);
			$qcount = 0;
			?>

			<form action="" method="POST">
		<?php 			        				        
			foreach ($array as $key => $value) {
				++$qcount;
				$i = 0;
				?>
			  <fieldset>
			    <legend> <?php echo $key ?></legend>
			    <?php foreach ($value as $asks) {
				if (is_array($asks)){		
						foreach ($asks as $value) {	
							++$i;?>			            						 
			    <label><input type="radio" name="q<?php echo $qcount?>" value = "<?php echo $i?>"> <?php echo $value ?></label>

			    <?php  }
				 } elseif (!is_array($asks)) {
					 $newarray[]=$asks;
				 }

				}?>	  
			  </fieldset> 
			<?php }

			}?>
			<div><input type="text" name="name" placeholder="Введите свое имя"></div>
		  <input type="submit" value="Отправить">  
		</form>
				
	   <?php } else {
		    http_response_code(404);
	            exit;
		}
		};
	
	if (!empty($_POST)){
	
	$i=-1;
	$count=0;
	$name=0;	
		foreach ($_POST as $value) {
			++$i;
			if (is_numeric($value)) {
				if ($value == $newarray[$i]) {
					++$count;
				}
			} else {
				$name=$value;
			}
	};
	
	$text = $name . ',' . 'You are' . ' ' . $count . 'mark';

	$image=imagecreatetruecolor(300, 150);
	$textfront=imagecolorallocate($image, 100, 100, 100);
	$background=imagecolorallocate($image, 150, 150, 150);
	$im = __DIR__ . '/image.jpg';
	if (!file_exists($im)) {
		echo "Файл не найден";
		exit;
	}
	$imagefront=imagecreatefromjpeg($im);
	
	$inimage=imagefill($image, 0, 0, $background);
	imagecopy($image, $imagefront, 0, 0, 0, 0, 200, 120);
	$fontfile=__DIR__ . '/12136.ttf';
	if (!file_exists($fontfile)) {
		echo "Файл не найден";
		exit;
	}
	imagettftext($image, 16, 0, 10, 10, $textfront, $fontfile, $text);
	header('Content-Type: image/jpeg');
	imagejpeg($image);
	
	}	
	
