
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

    $sql = "SELECT * FROM biblAutor_biblTytul, biblAutor WHERE biblAutor_id=biblAutor.id";

    $result = mysqli_query($conn, $sql);


    echo("<table border='1'>");
    echo("<th>id</th><th>biblAutor_id</th><th>biblTytul_id</th><th>biblWypoz</th><th>id</th><th>autor</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id']."</td><td>".$row['biblAutor_id']."</td><td>".$row['biblTytul_id']."</td><td>".$row['biblWypoz']."</td><td>".$row['id']."</td><td>".$row['autor']."</td>");
            echo("</tr>");
        };
    echo("</table>");
?>
