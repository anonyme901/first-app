<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<ul>
<?php

$sql = "SELECT * from postes";
$bdd = new PDO("mysql:host=127.0.0.1;dbname=forum;charset=utf8", "root", "");
$request = $bdd->query($sql);
while ($row = $request->fetch()){

    ?>
        <li><?php echo stripslashes($row["titre"]) ?></li>
        <li><?php echo stripslashes($row["contenu"]) ?></li>
        <li><?php echo stripslashes($row["date_time_publication"]) ?></li>
        <li><?php echo stripslashes($row["contacte"]) ?></li>
    <?php
}
?>
</ul>
</body>
</html>
