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

$ime = $_POST["ime"];
$prezime = $_POST["prezime"];
$jmbag = $_POST["jmbag"];
$mail = $_POST["mail"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$autor"; ?></title>
</head>

<body>
    <?php
    $query = "INSERT INTO Student(ime_studenta, prezime_studenta, JMBAG, e_mail) VALUES ('$ime', '$prezime', '$jmbag', '$mail')";
    if (mysqli_query($conn, $query)) {
        echo "Podaci su uspješno spremljeni!";
    } else {
        echo "Greška: " . mysqli_error($conn);
    }
    ?>
</body>

</html>