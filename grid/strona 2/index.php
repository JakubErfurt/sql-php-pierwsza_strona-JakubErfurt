<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style2.css">
    <title>CSS Grid</title>
  </head>
  <body>
    <div class="container">
      <header>
      <div class="tabela1">
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM lekarze";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>id</th><th>lekarz</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['lekarz'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
        </div>
      </header>
      <nav>
      2
      </nav>
      <main>
      <?php
    require_once("../../connect.php");
    $sql = "SELECT szpital.id, lekarz, pacjent FROM lekarze, szpital, pacjenci where lekarze.id=szpital.lekarz_id and pacjenci.id=szpital.pacjent_id";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>id</th><th>lekarz</th><th>pacjent</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['lekarz'].'</td><td>'.$row['pacjent'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
      </main>
      <footer>
      4
      </footer>
      <aside>
      <div class="tabela1">
      <?php
    require_once("../../connect.php");
    $sql = "SELECT * FROM pacjenci";
    echo("<br>");
    echo($sql);
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id</th><th>pacjent</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id'].'</td><td>'.$row['pacjent'].'</td>');
            echo('</tr>');
     }
        echo('</table>');
?>
        </div>
      </aside>
    </div>
  </body>
</html>
