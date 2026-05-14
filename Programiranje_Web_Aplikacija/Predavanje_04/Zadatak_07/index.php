<?php
$autor = "Patrik Balija";

$postanskiBrojevi = array("Zagreb" => 10000, "Split" => 21000, "Rijeka" => 51000, "Osijek" => "31000", "Zadar" => 23000, "Dubrovnik" => 20000);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $autor; ?></title>
</head>

<body>
    <?php 
        foreach($postanskiBrojevi as $grad => $broj){
            echo "<p>Poštanski broj za $grad je $broj.</p>";
        }
    ?>
</body>

</html>