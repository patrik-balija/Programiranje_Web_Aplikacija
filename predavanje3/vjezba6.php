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
            <strong>Upiši prvi broj</strong>
            <input type="number" name="prvi" required>
        </label><br>
        <label>
            <strong>Upiši drugi broj</strong>
            <input type="number" name="drugi" required>
        </label><br>
        <button type="submit" name="operacija" value="zbrajanje">+</button>
        <button type="submit" name="operacija" value="oduzimanje">-</button>
        <button type="submit" name="operacija" value="mnozenje">*</button>
        <button type="submit" name="operacija" value="dijeljenje">/</button>
    </form>
    <?php
    if (isset($_GET["operacija"]) && isset($_GET["prvi"]) && isset($_GET["drugi"])) {
        $prvi = $_GET["prvi"];
        $drugi = $_GET["drugi"];
        $operacija = $_GET["operacija"];
        switch ($operacija) {
            case "zbrajanje":
                $rezultat = $prvi + $drugi;
                echo "$prvi + $drugi = $rezultat";
                break;

            case "oduzimanje":
                $rezultat = $prvi - $drugi;
                echo "$prvi - $drugi = $rezultat";
                break;

            case "mnozenje":
                $rezultat = $prvi * $drugi;
                echo "$prvi * $drugi = $rezultat";
                break;

            case "dijeljenje":
                $rezultat = $prvi / $drugi;
                echo "$prvi / $drugi = $rezultat";
                break;
        }
    }
    ?>
</body>

</html>