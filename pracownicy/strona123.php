<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1 class="name">Jakub Erfurt nr1</h1>
    <a href="https://github.com/JakubErfurt/sql-php-pierwsza_strona-JakubErfurt" class="github-link">github</a>
    <br>
    <nav class="nav">
         <a href="index.php">Pracownicy</a>
        <a href="pracownicy/funkAgregujaca.php">Funkcje agregujące</a>
        <a href="pracownicy/praciorg.php">Organizacja i pracownicy</a>
        <a href="pracownicy/dataczas.php">Data i czas</a>
        <a href="pracownicy/formularz.html">Formularz</a>
        <a href="pracownicy/danedobazy.html">Dane do bazy</a>
	<a href="biblioteka/lista.html">Lista</a>
	<a href="biblioteka/ksiazki.php">Ksiazki</a>
    </nav><br>
</body>
</html>
<?php
	echo("jesteś na stronie.php");
	
	echo("<ul>");
	
	echo("<li>".$_POST["firstname"]);
		
	echo("<ul>");
?>
