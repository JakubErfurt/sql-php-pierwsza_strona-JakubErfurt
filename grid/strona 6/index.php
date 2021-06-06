<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <title>CSS Grid</title>
    <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container">
            <div class="a">
                <h1 class="tyt">Tytuł</h1>
            </div>
            <div class="b">
                <?php
                    require_once("../../connect.php");
    $sql = "SELECT * FROM pracownicy where id_org=dzial";
    $result = mysqli_query($conn, $sql);
    echo('<table border="1">');
        echo('<th>id</th><th>imie</th><th>dzial</th><th>zarobki</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
                ?>
            </div>
            <div class="c"></div>
            <div class="d">
            <form action="insert1.php" method="POST">
                    <input type="text" name="imie">
                    <input type="number" name="dzial"></br>
			        <input type="number" name="zarobki"></br>
                </form>
            </div>
            <div class="e"></div>
            <div class="f"></div>
    </body>
</html>
