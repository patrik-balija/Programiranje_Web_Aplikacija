<?php
$autor = "Patrik Balija";
$moje_godine = 20;
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
    $mjeseci = $moje_godine * 12;
    $dani = $moje_godine * 365;
    echo "<p>$moje_godine godina ima $mjeseci mjeseci i $dani dana.</p>";
    ?>
</body>

</html>