<?php
$autor = "Patrik Balija";

$ocjene = array(2,3,4,5,5);
$brojOcjena = count($ocjene);
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
        $i = 0;
        while($i < $brojOcjena){
            echo "<p>Ocjena " . ($i+1) . ": " . $ocjene[$i] . "</p>"; 
            $i++;
        }
    ?>
</body>

</html>