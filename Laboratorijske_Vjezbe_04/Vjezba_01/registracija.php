<?php

$autor = "Patrik Balija";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aplikacija";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Greška: " . mysqli_connect_error());
}

$korisnickoIme = $_POST["korisnickoIme"];
$sifra = $_POST["sifra"];

$query = "SELECT * FROM korisnici WHERE korisnickoIme='$korisnickoIme'";
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    echo "Korisničko ime se već koristi.";
} else{
    $hashed_password = password_hash($sifra, CRYPT_BLOWFISH);
    $query = "INSERT INTO korisnici (korisnickoIme, sifra, razinaDozvole)
            VALUES ('$korisnickoIme', '$hashed_password', 1)";
    mysqli_query($conn, $query);
    
    echo "Registracija je uspješna.";
}
mysqli_close($conn);
?>