<?php
$naslov = "PHP dokument - vježba 2-3";
$autor = "Patrik Balija";
$opisText = "Ova stranica nadograđuje vježbu 2-2: biramo temu (dark/light), odabiremo sliku i po želji prikazujemo opis.";

$slika = $_GET["slika"] ?? "php";
$tema = $_GET["tema"] ?? "light";
$opis = isset($_GET["opis"]);

$linkNatragText = "Natrag na vježba 2-2";
$linkNatragHref = "vjezba2-2.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba</title>

    <style>
        :root {
            <?php 
                if($tema === "light"){
                    echo "--card: white;";
                    echo "--text: black;";
                } else{
                                     echo "--card: #242226;";
                    echo "--text: white;";   
                }
            ?>
            --bg: #151416;
            --muted: gray;
            --accent: #814ab8;
        }

        * {
            box-sizing: border-box;
        }

        body {
            color: var(--text);
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
            margin: 0;
            background: var(--bg);
        }

        .wrap {
            max-width: 720px;
            margin: 48px auto;
            background: var(--card);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        h1 {
            font-size: 2.25rem;
            margin-top: 0;
            margin-bottom: 16px;
        }

        p {
            margin-bottom: 12px;
            line-height: 1.6;
        }

        a {
            color: var(--text);
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }


        .btn {
            display: inline-block;
            padding: 10px 16px;
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: none;
            transition: all 0.15s ease;
            color: var(--accent);
            background: transparent;
            cursor: pointer;
            font: inherit;
        }

        .btn:hover {
            background: var(--accent);
            color: #fff;
            text-decoration: none
        }

        .btn:focus-visible {
            outline: 3px solid var(--accent);
        }

        .btn:active {
            opacity: 0.75;
        }


        footer {
            font-size: 0.9rem;
            color: var(--muted);
            margin-top: 16px;
        }

        input[type="checkbox"],
        fieldset {
            margin-top: 12px;
            margin-bottom: 12px;
        }

        fieldset {
            border: 1px solid var(--muted);
            border-radius: 10px;
        }

        legend {
            color: var(--muted);
        }

        @media (prefers-reduced-motion: reduce) {
            .btn {
                transition: none;
            }
        }
    </style>
</head>

<body>
    <main class="wrap">
        <h1>
            <?php echo $naslov ?>
        </h1>
        <img src="<?php echo "img/$slika.jpg" ?>">
        <p>Ovu stranicu izradio je <strong>
                <?php echo $autor; ?>
            </strong>.</p>
        <?php 
            if($opis){
                echo "<p>".$opisText."</p>";
            }
        ?>
        <form method="GET">
            <fieldset>
                <legend>Odaberi temu</legend>
                <label>
                    <input type="radio" name="tema" value="light" checked>
                    Light
                </label><br>

                <label>
                    <input type="radio" name="tema" value="dark">
                    Dark
                </label>
            </fieldset>
            <fieldset>
                <legend>Odaberi sliku</legend>
                <label for="slika">Slika:</label><br>
                <select id="slika" name="slika">
                    <option value="code">Code</option>
                    <option value="php">PHP</option>
                    <option value="server">Server</option>
                </select>
            </fieldset>
            <label>
                <input type="checkbox" name="opis" id="opis">
                Prikaži opis
            </label><br>
            <input type="submit" value="Primijeni odabir" class="btn">
            <a href="<?php echo $linkNatragHref ?>" class="btn"><?php echo $linkNatragText ?></a>
        </form>
        <footer>&#169
            <?php echo date("Y"); ?> -
            <?php echo $autor ?>
        </footer>
    </main>
</body>

<!-- vjezba1d -->

</html>