<?php
    $naslov = "My first PHP page";
    $autor = "Patrik Balija";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba</title>
</head>
<body>
    <?php
        echo "<h1>$naslov</h1>";
        echo "<p>Ovu stranicu izradio je $autor";
    ?>
</body>
</html>