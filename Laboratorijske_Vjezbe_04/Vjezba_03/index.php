<?php
$autor = "Patrik Balija";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakultet";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Greška: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sifra = $_POST["sifra"];
    $naziv = $_POST["naziv"];
    $ects = $_POST["ects"];

    $sql = "INSERT INTO predmeti (sifra, naziv, ects) VALUES (?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "isi", $sifra, $naziv, $ects);
        mysqli_stmt_execute($stmt);

        echo "Predmet je uspiješno upisan u bazu.";
    } else {
        echo "Greška";
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Unos predmeta</title>
</head>
<body>
    <h1>Unos predmeta</h1>
    <form method="POST">
        <input type="number" name="sifra" placeholder="Unesite šifru predmeta"><br><br>
        <input type="text" name="naziv" placeholder="Unesite naziv predmeta"><br><br>
        <input type="number" name="ects" placeholder="Unesite broj ECTS bodova"><br><br>
        <input type="submit" value="Unesi predmet">
    </form>
</body>
</html>