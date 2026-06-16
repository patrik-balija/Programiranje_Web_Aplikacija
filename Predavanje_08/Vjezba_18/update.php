<?php
$id = isset($_GET["id"]) ? $_GET["id"] : "";
$conn = mysqli_connect("localhost", "root", "", "app");

if (isset($_POST["submit"])) {
    $fName = $_POST["first_name"];
    $lName = $_POST["last_name"];
    $countryId = $_POST["country_id"];

    $query = "UPDATE users SET first_name = '$fName', last_name = '$lName', country_id = '$countryId' WHERE id = $id";
    mysqli_query($conn, $query);
    
    header("Location: index.php");
    exit();
}

$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$fName = $row["first_name"];
$lName = $row["last_name"];
$currentCountryId = $row["country_id"];

$queryCountries = "SELECT * FROM countries";
$resultCountries = mysqli_query($conn, $queryCountries);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadatak</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="first_name" value="<?php echo $fName; ?>"><br>
        <input type="text" name="last_name" value="<?php echo $lName; ?>"><br>
        
        <select name="country_id">
            <?php
            while ($rowCountry = mysqli_fetch_assoc($resultCountries)) {
                $cId = $rowCountry["id"];
                $cName = $rowCountry["country_name"];
                
                $selected = ($cId == $currentCountryId) ? "selected" : "";
                
                echo "<option value='$cId' $selected>$cName</option>";
            }
            ?>
        </select><br>
        
        <input type="submit" name="submit" value="Spremi">
    </form>
</body>
</html>
<?php mysqli_close($conn); ?>