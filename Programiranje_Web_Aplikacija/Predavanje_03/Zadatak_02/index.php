<?php
$autor = "Patrik Balija";

$prijavljen = true;
$brojBodova = 51;
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
        if($prijavljen && $brojBodova >= 50){
            echo "<p>Student može pristupiti ispitu.</p>";
        } else{
            echo "<p>Student ne može pristupiti ispitu.</p>";    
        }
    ?>
</body>

</html>