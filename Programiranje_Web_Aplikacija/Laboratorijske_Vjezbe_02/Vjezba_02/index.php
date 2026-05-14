<?php
$autor = "Patrik Balija";

function napraviTablicu($retci, $stupci) {
    echo "<table>";
    for ($i = 0; $i < $retci; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $stupci; $j++) {
            echo "<td></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $autor; ?></title>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px 25px;
        }
    </style>
</head>

<body>

<h2>Tablica</h2>

<form method="post">
    <label>Broj redaka:</label><br>
    <input type="number" name="retci" min="1" required><br><br>

    <label>Broj stupaca:</label><br>
    <input type="number" name="stupci" min="1" required><br><br>

    <button type="submit">Napravi tablicu</button>
</form>

<br>

<?php
if (isset($_POST["retci"]) && isset($_POST["stupci"])) {
    $retci = $_POST["retci"];
    $stupci = $_POST["stupci"];

    napraviTablicu($retci, $stupci);
}
?>

</body>
</html>