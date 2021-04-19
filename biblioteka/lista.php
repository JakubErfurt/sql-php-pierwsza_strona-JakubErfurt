
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jakub Erfurt nr1</h1>
    <a href="https://github.com/JakubErfurt/sql-php-pierwsza_strona-JakubErfurt">github</a>
    <br>
    <nav class="nav">
          <?php include"../menu.php" ?>
    </nav>
	</body>
</html>


	<?php
 	require_once("connect.php");

mysql_select_db(baza) or die('Błąd: Nie można wybraż bazy danych!');

$sql = mysql_query ("SELECT autor FROM bibl_autor");

echo '<select name="autor">';

echo '<option value="">Wybierz Autora</option>';

while($option = mysql_fetch_assoc($sql)) {

echo '<option value="'.$option['autor'].'">'.$option['autor'].'</option>';

}

echo '</select>';

	?>
