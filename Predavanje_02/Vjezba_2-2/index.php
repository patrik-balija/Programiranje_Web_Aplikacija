<?php
$naslov = "PHP dokument - vježba 2-2";
$autor = "Patrik Balija";
$opis = "Ova stranica nastavlja vježbu 2-1 i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.";
$linkInfoText = "Saznaj više o PHP-u";
$linkInfoHref = "https://www.php.net/docs.php";
$linkNatragText = "Natrag na vježba 2-1";
$linkNatragHref = "../Vjezba_2-1/index.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba</title>

    <style>
        :root {
            --card: white;
            --text: black;
            --bg: #151416;
            --muted: gray;
            --accent: #814ab8;
        }

        * {
            box-sizing: border-box;
        }

        body {
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
        <p>Ovu stranicu izradio je <strong>
                <?php echo $autor; ?>
            </strong>.</p>
        <p><?php echo $opis ?></p>
        <a href="<?php echo $linkInfoHref ?>" class="btn"><?php echo $linkInfoText ?></a>
        <a href="<?php echo $linkNatragHref ?>" class="btn"><?php echo $linkNatragText ?></a>
        <footer>&#169
            <?php echo date("Y"); ?> -
            <?php echo $autor ?>
        </footer>
    </main>
</body>

<!-- vjezba1c -->
</html>