<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
</head>
<body>
	<style>
		table{
			border-collapse: collapse;
			border: 1px solid black;
		}
		td{
			border-collapse: collapse;
			border: 1px solid black;
		}
	</style>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=books", "Miha", "Qwerty123");

$sql = "SELECT * FROM books";?>

<form method="GET">
    <input type="text" name="isbn" placeholder="ISBN" value="" />
    <input type="text" name="name" placeholder="Название книги" value="" />
    <input type="text" name="author" placeholder="Автор книги" value="" />
    <input type="submit" value="Поиск" />
</form>

<table >
	<tr>
		<td>Название книги</td>
		<td>Автор</td>
		<td>Год</td>
		<td>Жанр</td>
		<td>STDN</td>
	</tr>
	<?php foreach ($pdo->query($sql) as $value) {?>
	<tr>
		<td><?php echo $value['name'];?></td>
		<td><?php echo $value['author'];?></td>
		<td><?php echo $value['year'];?></td>
		<td><?php echo $value['genre'];?></td>
		<td><?php echo $value['isbn'];?></td>
	<?php } ?>
	</tr>
</table>
</body>
</html>
