<?php

$id_pracownicy=$_POST['id_pracownicy'];
$imie=$_POST['imie'];
$dzial=$_POST['dzial'];
$zarobki=$_POST['zarobki'];
if($id_pracownicy and $imie and $dzial and $zarobki) {
    

    

    

    
   


require_once("../../connect.php");

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki) 
     VALUES (null,'" .$_POST['imie']."', ".$_POST['dzial'].", ".$_POST['zarobki']."')";
$result=mysqli_query($conn, $sql);

if($result) echo "Rekord został dodany poprawnie";
    else echo "Błąd nie udało się dodać nowego rekordu";
      mysql_close($connection);
}
?>
