<?php

$autor = "Patrik Balija";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "korisnici";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Greška: " . mysqli_connect_error());
}

$query = "SELECT * FROM korisnik";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $autor; ?></title>

    <style>
        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid black;
            padding: 10px;
        }

        .plava {
            background-color: blue;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    if (mysqli_num_rows($result) > 0) {
        echo "
                <table>
                    <tr>
                        <th>id</th>
                        <th>ime</th>
                        <th>prezime</th>
                        <th>spol</th>
                        <th>telefon</th>
                        <th>email</th>
                        <th>godine</th>
                        <th>hobi</th>
                    </tr>
            ";
        while ($row = mysqli_fetch_assoc($result)) {
            if (mb_strlen($row["prezime"], "UTF-8") > 8) {
                echo "<tr class='plava'>";
            } else {
                echo "<tr>";
            }

            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["ime"] . "</td>";
            echo "<td>" . $row["prezime"] . "</td>";
            echo "<td>" . $row["spol"] . "</td>";
            echo "<td>" . $row["telefon"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["godine"] . "</td>";
            echo "<td>" . $row["hobi"] . "</td>";

            echo "</tr>";
        }
        echo "</table>";

    } else {
        echo "Nema podataka.";
    }
    ?>
</body>

</html>