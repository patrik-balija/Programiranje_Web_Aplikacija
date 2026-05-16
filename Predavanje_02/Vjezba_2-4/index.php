<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba</title>

    <style>
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
            margin: 0;
        }

        input {
            margin-top: 3px;
            margin-bottom: 3px;
        }
    </style>
</head>

<body>
    <form method="GET">
        <label for="a">
            Vrijednost a:
            <input id="a" type="number" name="a">
        </label><br>
        <label for="b">
            Vrijednost b:
            <input id="b" type="number" name="b">
        </label><br>
        <input type="submit" value="Izračunaj">
    </form>

    <?php
    if (isset($_GET["a"]) && isset($_GET["b"])) {
        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = (3 * $a - $b) / 2;
        echo "<p>$c</p>";
    }

    ?>
</body>

</html>