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
        <a href="../pracownicy/danedobazy.php">Dane do bazy</a>
	<a href="../biblioteka/lista.php">Lista</a>
	<a href="../biblioteka/ksiazki.php">Ksiazki</a>
    </nav>
</body>
</html>
<?php
    require_once("connect.php");

    $sql = "SELECT SUM(zarobki) as suma FROM pracownicy, organizacja WHERE id_org = dzial";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
         echo "<li>ok";
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

    echo("<h1>Zadanie 1</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Suma</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['suma']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

?>
