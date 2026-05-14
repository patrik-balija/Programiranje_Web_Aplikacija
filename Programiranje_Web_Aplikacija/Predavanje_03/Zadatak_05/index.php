<?php
$autor = "Patrik Balija";

$odabir = isset($_POST["odabir"]) ? $_POST["odabir"] : NULL;
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
        $auti = array("Mercedes", "Porche", "Audi", "BMW");
        echo 
        "<ol>" .
            "<li>". $auti[0] ."</li>" .
            "<li>". $auti[1] ."</li>" .
            "<li>". $auti[2] ."</li>" .
            "<li>". $auti[3] ."</li>" .
        "</ol>";
    ?>
</body>

</html>