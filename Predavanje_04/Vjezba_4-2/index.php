<?php
$autor = "Patrik Balija";

function ducan($stanje = "otvoren")
{
    $sati = date("G"); //0 - 23
    $dan = date("D"); //Mon - Sun
    $datumDan = date("d"); //01 - 31
    $datumMjesec = date("m"); //01 - 12
    $datum = $datumDan . "." . $datumMjesec;

    $radniTjedanPocetak = 8;
    $radniTjedanKraj = 20;
    $subotaPocetak = 9;
    $subotaKraj = 14;

    $blagdani = array("01.05.", "30.05.", "01.11.", "25.12.");

    switch ($dan) {
        case "Sat":
            if ($sati < $subotaPocetak || $sati >= $subotaKraj) {
                $stanje = "zatvoren";
            }
            break;
        case "Sun":
            $stanje = "zatvoren";
            break;
        default:
            if ($sati < $radniTjedanPocetak || $sati >= $radniTjedanKraj) {
                $stanje = "zatvoren";
            }
            break;
    }

    if ($stanje == "otvoren") {
        foreach ($blagdani as $datumBlagdan) {
            if ($datumBlagdan == $datum) {
                $stanje = "zatvoren";
                break;
            }
        }
    }

    echo "<p>" . "Dućan je $stanje" . "</p>";
}
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
    ducan();
    ?>
</body>

</html>