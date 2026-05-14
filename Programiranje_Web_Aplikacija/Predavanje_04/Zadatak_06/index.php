<?php
$autor = "Patrik Balija";

$auti = array("Audi", "BMW", "Renault", "Citroen");
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
        <label>Označi vozila:</label><br>
        <?php
        foreach ($auti as $auto) {
            echo
                "<label>" .
                "<input type=\"checkbox\" name=\"$auto\" value=\"$auto\"> $auto" .
                "<label><br>";
        }
        ?>
        <input type="submit" value="Pošalji">
    </form>
    <ul>
        <?php
        foreach ($auti as $auto) {
            if (isset($_POST[$auto])) {
                echo "<li>" . $auto . "</li>";
            }
        }
        ?>
    </ul>
</body>

</html>