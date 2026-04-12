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

        input[type="number"] {
            width: 250px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .poruka {
            display: inline-block;
            padding: 15px;
            border-radius: 5px;
        }

        .tocan {
            background-color: lightgreen;
        }

        .netocan {
            background-color: #FF0000;
        }
    </style>
</head>

<body>
    <p>Kalkulator (Switch naredba)</p>
    <form method="GET">
        <label>
            <strong>Unesite ocjenu za 1. Kolokvij</strong>
            <input type="number" name="prvi" required>
        </label><br>
        <label>
            <strong>Unesite ocjenu za 2. Kolokvij</strong>
            <input type="number" name="drugi" required>
        </label><br>
        <input type="submit" value="Izračunaj">
    </form>
    <?php
    if (isset($_GET["prvi"]) && isset($_GET["drugi"])) {
        $prvi = $_GET["prvi"];
        $drugi = $_GET["drugi"];
        if($prvi > 1 && $drugi > 1){
            $prosjek = ($prvi + $drugi)/2;
            echo "<p>Kolega, Vaš prosjek je <strong>$prosjek</strong></p>";
        }
        else{
            echo "<p>Žao mi je kolega, pali ste.</p>";
        }
    }
    ?>
</body>

</html>