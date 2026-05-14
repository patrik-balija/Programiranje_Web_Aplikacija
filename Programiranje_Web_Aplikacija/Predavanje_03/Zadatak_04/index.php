<?php
$autor = "Patrik Balija";

$odabir = isset($_POST["odabir"]) ? $_POST["odabir"] : NULL;
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
        <fieldset>
            <legend>Odaberite</legend>
            <input type="submit" name="odabir" value="Kamen">
            <input type="submit" name="odabir" value="Škare">
            <input type="submit" name="odabir" value="Papir">
        </fieldset>
    </form>
    <?php
    if (isset($_POST["odabir"])) {
        $randomBroj = rand(0, 2);
        if ($randomBroj == 0) {
            $botOdabir = "Kamen";
        } else if ($randomBroj == 1) {
            $botOdabir = "Škare";
        } else {
            $botOdabir = "Papir";
        }

        if ($odabir == "Kamen") {
            if ($botOdabir == "Kamen") {
                echo "<p style=\"color:blue;\">Izjednačeno!</p>";
            } else if ($botOdabir == "Škare") {
                echo "<p style=\"color:green;\">Pobjedili ste!</p>";
            } else {
                echo "<p style=\"color:red;\">Izgubili ste!</p>";
            }
        }

        if ($odabir == "Škare") {
            if ($botOdabir == "Kamen") {
                echo "<p style=\"color:red;\">Izgubili ste!</p>";
            } else if ($botOdabir == "Škare") {
                echo "<p style=\"color:blue;\">Izjednačeno!</p>";
            } else {
                echo "<p style=\"color:green;\">Pobjedili ste!</p>";
            }
        }

        if ($odabir == "Papir") {
            if ($botOdabir == "Kamen") {
                echo "<p style=\"color:green;\">Pobjedili ste!</p>";
            } else if ($botOdabir == "Škare") {
                echo "<p style=\"color:red;\">Izgubili ste!</p>";
            } else {
                echo "<p style=\"color:blue;\">Izjednačeno!</p>";
            }
        }
        echo "<p>Odabrali ste $odabir.</p>";
        echo "<p>Bot je odabrao $botOdabir.</p>";
    }
    ?>
</body>

</html>