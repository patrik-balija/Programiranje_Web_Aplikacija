<?php
$autor = "Patrik Balija";

$brojKnjiga = $_POST["brojKnjiga"];
$student = isset($_POST["student"]);
$clanKluba = isset($_POST["clan"]);

$cijenaKnjige = 25;
$cijenaKnjiga = $brojKnjiga * $cijenaKnjige;

$popustStudent = 10;
$popustClan = 5;

$besplatnaDostavaUvjet = 80;
$knjigeZaPoklon = 3;
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
    if ($brojKnjiga === 1) {
        echo "<p>Kupili ste $brojKnjiga knjigu.</p>";
    } else {
        echo "<p>Kupili ste $brojKnjiga knjige.</p>";
    }
    if (!$student && !$clanKluba) {
        echo "<p>Vaš ukupan iznos je $cijenaKnjiga.</p>";
    } else if ($student && !$clanKluba) {
        $cijenaKnjiga *= (1 - $popustStudent / 100);
        echo "<p>Pošto ste student, ostvarujete {$popustStudent}% popusta, Vaš iznos je $cijenaKnjiga.</p>";
    } else if (!$student && $clanKluba) {
        $cijenaKnjiga *= (1 - $popustClan / 100);
        echo "<p>Pošto ste član, ostvarujete {$popustClan}% popusta, Vaš iznos je $cijenaKnjiga.</p>";
    } else {
        $popust = $popustClan + $popustStudent;
        $cijenaKnjiga *= (1 - $popust / 100);
        echo "<p>Pošto ste student i član, ostvarujete {$popust}% popusta, Vaš iznos je $cijenaKnjiga.</p>";
    }
    if($cijenaKnjiga >= $besplatnaDostavaUvjet){
        echo "<p>Pošto je iznos veći od $besplatnaDostavaUvjet, imate besplatnu dostavu!</p>";
    }
    if($brojKnjiga >= $knjigeZaPoklon){
        echo "<p>Pošto ste kupili $brojKnjiga knjiga, dobivate poklon!</p>";
    }
    ?>
</body>

</html>