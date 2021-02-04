
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
         <a href="index.php">Pracownicy</a>
        <a href="../pracownicy/funkAgregujaca.php">Funkcje agregujące</a>
        <a href="../pracownicy/praciorg.php">Organizacja i pracownicy</a>
        <a href="../pracownicy/dataczas.php">Data i czas</a>
        <a href="../pracownicy/formularz.html">Formularz</a>
        <a href="../pracownicy/danedobazy.html">Dane do bazy</a>
	<a href="../biblioteka/lista.php">Lista</a>
	<a href="../biblioteka/ksiazki.php">Ksiazki</a>
    </nav>
	/body>
</html>

	<?php
 	require_once("connect.php");
	$sql = "SELECT autor from biblAutor_biblTytul, biblAutor WHERE biblAutor_id=biblAutor.id";
	$result = mysqli_query($conn, $sql);
 
	while($result=mysql_fetch_row($sql))
	{
	echo'<option value="2">'.$sql['Henryk Sienkiewicz'].'</option>';
		echo'<option value="3">'.$z['Adam Mickiewicz'].'</option>';
		echo'<option value="4">'.$z['Tolkien'].'</option>';
		echo'<option value="6">'.$z['Rafał Kusik'].'</option>';
		echo'<option value="7">'.$z['Aleksander Fredro'].'</option>';
	}
	?>
