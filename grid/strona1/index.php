<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css">
    <title>Erfurt</title>
  </head>
  <body>
    <div class="container">
      <div class="a">
        <div class="tab1">
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM pracownicy";
    $result = mysqli_query($conn, $sql);

    echo('<table border="1">');
        echo('<th>id</th><th>Pracownik</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
        </div>
      </div>
            <div class="b">
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM pracownicy";
    $result = mysqli_query($conn, $sql);

    echo('<table border="1">');
        echo('<th>id</th><th>Pracownik</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </div>
            <div class="c">
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM pracownicy";
    $result = mysqli_query($conn, $sql);

    echo('<table border="1">');
        echo('<th>id</th><th>Pracownik</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </div>
            <div class="d">
              <h1>TEMAT</h1>
      </div>
            <div class="e">
      <form action="insert.php" method="POST">
        <input type="text" name="id">
        <input type="text" name="imie">
        <input type="text" name="dzial">
        <input type="text" name="zarobki">
        <input type="submit" name="dodaj">
              </form>

      </div>
    </div>
  </body>
</html>


