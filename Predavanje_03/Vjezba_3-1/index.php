<?php
$autor = "Patrik Balija";

$broj = isset($_POST["broj"]) ? $_POST["broj"] : NULL;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $autor; ?></title>
</head>

<body>
    <h1>Pogodi broj!</h1>
    <form method="POST">
        <label>
            Upiši jedan broj od 1 do 10*
            <input type="number" name="broj" min="1" max="10" required>
        </label>
    </form>
    <?php
        $randomBroj = rand(1,10);
        if(isset($_POST["broj"])){
            if($broj == $randomBroj){
                echo "<p style=\"color:green\">Pogodili ste broj!</p>";
            }
            else{
                echo "<p style=\"color:red\">Niste pogodili broj!</p>";               
            }
            echo "<p>Vaš broj je $broj.</p>";
            echo "<p>Random broj je $randomBroj.</p>";
        }
    ?>
</body>

</html>