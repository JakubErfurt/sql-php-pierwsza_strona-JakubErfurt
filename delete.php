<?php

$servername = "remotemysql.com";
    $username = "OuuQyKjM5n";
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
 header('Location: https://strona123.herokuapp.com/danedobazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
