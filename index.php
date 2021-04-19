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
        <?php include"menu.php" ?>
      
    </nav>
    <?php
require_once("connect.php");
$hostname  =$_SERVER['HTTP_HOST']; 
        echo("<li> hostname : " .$hostname);
        ?>
</body>
</html>
