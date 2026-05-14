<?php
$autor = "Patrik Balija";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $autor; ?></title>
</head>

<body>
    <form action="izracun.php" method="POST">
        <fieldset>
            <legend>Checkout</legend>
            <label>
                Broj knjiga:
                <input type="number" name="brojKnjiga" min="1" required>
            </label><br>
            <label>
                Student:
                <input type="checkbox" name="student">
            </label><br>
            <label>
                Član:
                <input type="checkbox" name="clan">
            </label><br><br>
            <input type="submit" value="Kupi">
        </fieldset>
    </form>
</body>

</html>