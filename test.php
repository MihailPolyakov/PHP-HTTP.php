	<form action="" method="GET">
		<div><input type="text" name="number" placeholder="Введите номер"></div>
		<input type="submit" value="Отправить">
	</form>     

<?php	if (!empty($_GET)) {
			$array=[];
			$test = 0;
			$files='C:/xampp/htdocs/example/exams';
			$arrayfiles=scandir($files);
			shuffle($arrayfiles);
			foreach ($arrayfiles as $value) {
				if ($value == '.' || $value == '..'){
					continue;
				}
				$test = file_get_contents("exams/$value");
				break;
			}	
			$array =json_decode($test);
			$qcount = 0;
		?>

		<form action="" method="POST">

        <?php foreach ($array as $key => $value) {
        	++$qcount;
        	?>
          <fieldset>

            <legend> <?php echo $key ?></legend>
            <?php foreach ($value as $asks) {?>
            <label><input type="radio" name="q<?php echo $qcount?>"> <?php echo $asks ?> </label>  
            <?php } ?>
          </fieldset> 
        <?php } ?>
        <input type="submit" value="Отправить">  
      </form>
      	<?php } 
	var_dump($_POST);