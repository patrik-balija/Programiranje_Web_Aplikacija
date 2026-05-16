<?php
$autor = "Patrik Balija";

$auti = array("Audi", "BMW", "Renault", "Citroen");
$car = isset($_POST["auto"]) ? $_POST["auto"] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $autor; ?></title>
</head>

<body>
    <form method="POST">
        <label>Označi vozilo:</label><br>
        <?php
        foreach ($auti as $auto) {
            echo
                "<label>" .
                "<input type=\"radio\" name=\"auto\" value=\"$auto\"> $auto" .
                "<label><br>";
        }
        ?>
        <input type="submit" value="Pošalji">
    </form>
    <?php
        if(isset($car)){
            echo "<p>Odabrali ste: " . $car . "</p>";
        }
    ?>
</body>

</html>