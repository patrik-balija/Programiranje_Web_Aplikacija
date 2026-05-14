<?php
    $autor = "Patrik Balija";
    $text = isset($_POST["text"]) ? $_POST["text"] : NULL;
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
            Upišite rečenicu:
            <input type="text" name="text" required>
        </label><br>
        <input type="Submit" value="Prebroji riječi">
        <?php
            if(isset($_POST["text"])){
                echo "<p>" . str_word_count($text) . "</p>";
            }
        ?>
    </form>
</body>

</html>