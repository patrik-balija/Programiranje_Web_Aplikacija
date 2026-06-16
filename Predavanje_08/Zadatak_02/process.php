<?php
$fName = isset($_POST["fname"]) ? $_POST["fname"] : "";
$lName = isset($_POST["lname"]) ? $_POST["lname"] : "";
$country = isset($_POST["country"]) ? $_POST["country"] : "";


$conn = mysqli_connect("localhost", "root", "", "ispit_vjezba");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "INSERT INTO users(first_name, last_name, country) VALUES(?, ?, ?)";
if($stmt = $conn->prepare($query)) {
  $stmt->bind_param("sss", $fName, $lName, $country);
  $stmt->execute();
}

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)) {
        echo "<p>" . $row["id"] . ". " . $row["first_name"] . " " . $row["last_name"] . "</p>";
    }
} else{
    echo "Database is empty";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>