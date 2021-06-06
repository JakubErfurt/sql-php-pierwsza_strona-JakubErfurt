<?php
require_once("../../connect.php");
$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki) 
     VALUES (null,'" .$_POST['imie']."', ".$_POST['dzial'].", ".$_POST['zarobki']."')";
?>
