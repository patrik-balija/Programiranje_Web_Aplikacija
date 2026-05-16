<?php
$autor = "Patrik Balija";

$bodovi = array(8, 12, 15, 13, 7, 13);
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
        for($i = 0; $i < count($bodovi); $i++){
            echo "<p>" . "Student " . ($i+1) . ". ostvario je " . $bodovi[$i] . " bodova." . "</p>";
        }
    ?>
</body>

</html>