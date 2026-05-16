<?php
$autor = "Patrik Balija";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$autor"; ?></title>
</head>

<body style="background-color: <?php 
    if(empty($_COOKIE["cookieBoja"])){
        echo "white";
    } else{
        echo $_COOKIE["cookieBoja"];
    }
 ?>;">
    <h3>Odaberite boju:</h3>
    <form action="postaviKolacic.php" method="POST">
        <input type="color" name="boja"><br><br>
        <label>
            <input type="checkbox" name="promjeni">
            Želim promijeniti boju
        </label><br><br>
        <button type="submit">Promjeni boju</button>
    </form>
</body>

</html>