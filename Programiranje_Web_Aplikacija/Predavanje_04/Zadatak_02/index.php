<?php
$autor = "Patrik Balija";

$brojStudenata = 100;
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
        $ostaloStudenata = $brojStudenata;
        $studentID = 1;
        do{
            echo "<p>" . "Student " . $studentID . ". je prisutan." . "</p>";
            $ostaloStudenata--;
            $studentID++;
        } while($ostaloStudenata > 0);
        echo "<p>" . "Evidentirano je ukupno " . $brojStudenata . " studenata." . "</p>";
    ?>
</body>

</html>