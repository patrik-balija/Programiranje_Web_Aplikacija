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
        input[type="number"]{
            width: 250px;
        }
        .poruka{
            display: inline-block;
            padding: 15px;
            border-radius: 5px;
        }
        .tocan{
            background-color: lightgreen;
        }
        .netocan{
            background-color: #FF0000;
        }
    </style>
</head>

<body>
    <p>Igra (pogodi broj)</p>
    <form method="GET">
        <label>
            <strong>Upiši jedan broj od 1 do 9:</strong>
            <input type="number" name="broj" min="1" max="9" required>
        </label><br>
        <input type="submit" value="Pogodi">
    </form>
    <?php 
        if(isset($_GET["broj"])){
                $broj = $_GET["broj"];
        $randBroj = rand(1,9);
        if($broj == $randBroj){
            echo "<p ".' class="poruka tocan"'.">Pogodak, probaj ponovo!</p>";
        } else{
            echo "<p ".' class="poruka netocan"'.">Krivo, probaj ponovo!</p>";
        }
        echo "<br>Zamišljen broj je $randBroj";
        }

    ?>
</body>

</html>