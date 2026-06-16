<?php
$pretraga = isset($_GET["pretraga"]) ? $_GET["pretraga"] : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrik Balija</title>
</head>

<body>
    <form method="GET">
        <label for="pretraga">Unos:</label><br>
        <input type="search" id="pretraga" name="pretraga">
        <input type="submit" value="Pretraži">
    </form>
    <?php
    if ($pretraga != "") {
        $con = mysqli_connect("localhost", "root", "", "ispit_vjezba");

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        $query = "
            SELECT *
            FROM users
            WHERE first_name = '$pretraga' OR last_name = '$pretraga'
        ";

        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo "<p>" . $row["id"] . ". " . $row["first_name"] . " " . $row["last_name"] . "</p>";
            }
        } else {
            echo "No results found.";
        }
    }
    ?>
</body>

</html>