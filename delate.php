<?php
echo("jestes w delete.php <br>");
echo $_POST['id'];


$servername = "remotemysql.com";
    $username = " OuuQyKjM5n";
    $password = "Xa5cSuc0AP";
    $dbname = "OuuQyKjM5n";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "DELETE FROM Pracownik WHERE" id= $_POST['id'];;

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
