
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
	<a href="../biblioteka/lista.html">Lista</a>
	<a href="../biblioteka/ksiazki.php">Ksiazki</a>
    </nav>
</body>
</html>
    <select name="autor"  style="width:50px" >
	<?php
 
	$sql = mysqli_query("SELECT autor FROM biblAutor WHERE biblAutor_id=biblAutor.id");
	$result = mysqli_query($conn, $sql)
 
	while($biblAutor = mysql_fetch_array($result))
	{
	echo'
	<option value="2">'.$sql['Henryk Sienkiewicz'].'</option>';
		<option value="3">'.$sql['Adam Mickiewicz'].'</option>';
		<option value="4">'.$sql['Tolkien'].'</option>';
		<option value="6">'.$sql['Rafał Kusik'].'</option>';
		<option value="7">'.$sql['Aleksander Fredro'].'</option>';
	}
	?>
	</select>
