<?php
$autor = "Patrik Balija";
$visina = 184;
$disciplina = "Classical";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$autor"; ?></title>
</head>

<body>
    <?php
    if ($disciplina == "Free-style") {
        $duljina = $visina * 0.9;
        echo "<p>Za disciplinu <strong>$disciplina</strong> treba biti duljina <strong>$duljina</strong> cm.</p>";
    } else if ($disciplina == "Classical") {
        $duljina = $visina * 0.85;
        echo "<p>Za disciplinu <strong>$disciplina</strong> treba biti duljina <strong>$duljina</strong> cm.</p>";
    } else if ($disciplina == "Nordic walk") {
        $duljina = $visina * 0.68;
        echo "<p>Za disciplinu <strong>$disciplina</strong> treba biti duljina <strong>$duljina</strong> cm.</p>";
    } else {
        echo "<p>Nepoznata disciplina.</p>";
    }
    ?>
</body>

</html>