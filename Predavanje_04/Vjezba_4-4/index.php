<?php
    $autor = "Patrik Balija";

    function prostProvjera($n){
                $djeljivCount = 0;
                for($j = 1; $j <= $n ; $j++){
                if($n % $j == 0){
                    $djeljivCount++;
                }
            }
            if($djeljivCount == 2){
                echo "<p>" . $n . " je prosti broj." . "</p>";
            } else{
                echo "<p>" . $n . " nije prosti broj." . "</p>";
            }
        
        echo "<p>Prosti brojevi su svi prirodni brojevi djeljivi bez ostatka sa brojem 1 i sami sa
sobom, a strogo su veći od broja 1.</p> ";
        echo "<p>Prvih 100 brojeva:</p> ";
        echo "<ul>";
        for($i = 1; $i < 100; $i++){
            $djeljivCount = 0;
            for($j = 1; $j <= $i ; $j++){
                if($i % $j == 0){
                    $djeljivCount++;
                }
            }
            if($djeljivCount == 2){
                echo "<li>" . $i . "</li>";
            }
        }
        echo "</ul>";
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
        prostProvjera(2);
    ?>
</body>

</html>