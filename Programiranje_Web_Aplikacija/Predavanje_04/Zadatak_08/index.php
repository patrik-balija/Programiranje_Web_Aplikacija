<?php
$autor = "Patrik Balija";

$a = isset($_POST["a"]) ? $_POST["a"] : null;
$b = isset($_POST["b"]) ? $_POST["b"] : null;

function add($a, $b){
    $total = $a + $b;
    return "$a + $b = $total";
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
    <form method="POST">
        <label>
            Unesite prvi broj: 
            <input type="number" name="a" required>
        </label><br>
                <label>
            Unesite drugi broj: 
            <input type="number" name="b" required>
        </label><br>
        <input type="submit" value="Izračunaj"> 
    </form>
    <?php 
        if(isset($a) && isset($b)){
            echo "<p>" . add($a,$b) . "</p>";
        }
    ?>
</body>

</html>