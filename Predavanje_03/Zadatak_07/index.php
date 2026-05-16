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
    <?php
        $ocjene = array(4,3);
        $prosjek = ($ocjene[0] + $ocjene[1])/2;

        echo "<p>" . "Ocjena I. Kolokvija: " . $ocjene[0] . "</p>";
        echo "<p>" . "Ocjena II. Kolokvija: " . $ocjene[0] . "</p>";
        echo "<hr>";
        echo "<p>" . "Srednja ocjena iz predmeta: " . $prosjek . "</p>";
        echo "<p>" . "Konačna ocjena iz predmeta: " . round($prosjek) . "</p>";
    ?>
</body>

</html>