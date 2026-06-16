<?php
session_start();

$autor = "Patrik Balija";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aplikacija";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Greška: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $korisnickoIme = $_POST["korisnickoIme"];
    $sifra = $_POST["sifra"];

    $query = "SELECT * FROM korisnici WHERE korisnickoIme='$korisnickoIme'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {

        $red = mysqli_fetch_assoc($result);

        if (password_verify($sifra, $red["sifra"])) {

            $_SESSION["korisnickoIme"] = $red["korisnickoIme"];
            $_SESSION["razinaDozvole"] = $red["razinaDozvole"];

            if ($red["razinaDozvole"] == 1) {
                echo "Dobro došli. Vaša razina je administrator. ";
                echo "<a href='landing.php'>NEXT</a>";
            } else {
                echo "Dobro došli. ";
                echo "<a href='landing.php'>NEXT</a>";
            }

        } else {
            echo "Pogrešna lozinka.";
        }

    } else {
        echo "Korisnik ne postoji.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Prijava</title>
</head>

<body>

    <h1>Prijava</h1>

    <form method="POST">

        <input type="text" name="korisnickoIme" placeholder="Unesite korisničko ime"><br><br>
        <input type="password" name="sifra" placeholder="Unesite šifru"><br><br>
        <input type="submit" value="Prijava">

    </form>

</body>

</html>