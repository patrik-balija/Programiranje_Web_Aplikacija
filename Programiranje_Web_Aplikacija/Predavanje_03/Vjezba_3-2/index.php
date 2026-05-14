<?php
$autor = "Patrik Balija";

$prviBroj = isset($_POST["prviBroj"]) ? $_POST["prviBroj"] : NULL;
$drugiBroj = isset($_POST["drugiBroj"]) ? $_POST["drugiBroj"] : NULL;
$operator = isset($_POST["operator"]) ? $_POST["operator"] : NULL;
$rezultat = NULL
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
            Upiši prvi broj: <input type="number" name="prviBroj" required>
        </label><br>
        <label>
            Upiši drugi broj: <input type="number" name="drugiBroj" required>
        </label><br>
        <input type="submit" name="operator" value="+">
        <input type="submit" name="operator" value="-">
        <input type="submit" name="operator" value="*">
        <input type="submit" name="operator" value="/">
    </form>
    <?php
        if(isset($_POST["prviBroj"]) && isset($_POST["drugiBroj"])){
            switch($operator){
                case "+":
                    $rezultat = $prviBroj + $drugiBroj;
                    break;
                case "-":
                    $rezultat = $prviBroj - $drugiBroj;
                    break;
                case "*":
                    $rezultat = $prviBroj * $drugiBroj;
                    break;
                case "/":
                    $rezultat = $prviBroj / $drugiBroj;
                    break;
            }
            echo "<p>" . $prviBroj . " " . $operator . " " . $drugiBroj . " = " . $rezultat . ".</p>";
        }
    ?>
</body>
</html>