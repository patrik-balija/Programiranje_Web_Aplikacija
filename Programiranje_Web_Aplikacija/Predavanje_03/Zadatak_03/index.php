<?php
$autor = "Patrik Balija";

$dolaznostPredavanja = 13;
$dolaznostVjezbe = 13;
$predanProjekt = true;
$predaneSveVjezbePredavanja = true;
$predaneSveVjezbeVjezbe = true;

$predavanjaSati = 15;
$vjezbeSati = 15;
$kriterijDolaznostPredavanja = 0.7;
$kriterijDolaznostVjezbe = 0.8;
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
    if ($dolaznostPredavanja / $predavanjaSati >= $kriterijDolaznostPredavanja) {
        if ($dolaznostVjezbe / $vjezbeSati >= $kriterijDolaznostVjezbe) {
            if ($predanProjekt) {
                if ($predaneSveVjezbePredavanja) {
                    if ($predaneSveVjezbeVjezbe) {
                        echo "<p>Student ima pravo izlaska na ispit!</p>";
                    } else {
                        echo "<p>Student nije predao sve vježbe s vježbi. Nema pravo na izlaska na ispit.</p>";
                    }
                } else {
                    echo "<p>Student nije predao sve vježbe s predavanja. Nema pravo na izlaska na ispit.</p>";
                }
            } else {
                echo "<p>Student nije predao projekt. Nema pravo na izlaska na ispit.</p>";
            }
        } else {
            echo "<p>Student nije dolazio na vježbe. Nema pravo na izlaska na ispit.</p>";
        }
    } else {
        echo "<p>Student nije dolazio na predavanja. Nema pravo na izlaska na ispit.</p>";
    }
    ?>
</body>

</html>