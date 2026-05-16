<?php
$autor = "Patrik Balija";

$korisnici = array("Marina", "Patrik");
$korisnik = "Alen";
$imeZauzeto = false;
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
    for ($i = 0; $i < count($korisnici); $i++) {
        if($korisnik == $korisnici[$i]){
            $imeZauzeto = true;
            break;
        }
    }
    if (!$imeZauzeto) {
        echo "<p>Dobrodošli, " . $korisnik . "!" . "</p>";
    } else {
        echo "<p>" . "Korisničko ime je zauzeto." . "</p>";
    }
    ?>
</body>

</html>