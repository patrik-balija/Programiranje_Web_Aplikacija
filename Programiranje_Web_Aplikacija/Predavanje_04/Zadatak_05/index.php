<?php
$autor = "Patrik Balija";

$auti = array("Audi", "BMW", "Renault", "Citroen");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $autor; ?></title>
</head>

<body>
    <ol>
        <?php
        foreach($auti as $auto){
            echo "<li>" . $auto . "</li>";
        }
    ?>
    </ol>
</body>

</html>