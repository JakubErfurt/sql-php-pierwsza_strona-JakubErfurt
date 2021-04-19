
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Prosty Formuarz</title>
</head>
<body>
	<h1 class="name">Jakub Erfurt nr1 nr1</h1>
    <a href="https://github.com/JakubErfurt/sql-php-pierwsza_strona-JakubErfurt" class="github-link">github</a>
    <br>
    <nav class="nav">
         <?php include"menu.php" ?>
    </nav><br>
<h1>operacje CRUD</h1>
<h3>dodawanie pracownika</h3>
<form action="insert.php" method="POST">
	    <input type="text" name="imie">
			<input type="number" name="dzial"></br>
			<input type="number" name="zarobki"></br>
			<input type="date" name="data_urodzenia"></br>
			<input type="submit" value="dodaj pracownika">
</form>
<h3>usuwanie pracownika</h3>
<form action="delete.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="Zapisz w zmiennej $_POST['id']">
</form>

</body>
</html>
