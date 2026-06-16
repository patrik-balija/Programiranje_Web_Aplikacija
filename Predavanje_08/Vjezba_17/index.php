<?php
$conn = mysqli_connect("localhost","root","","app");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$query = "SELECT users.first_name, users.last_name, countries.country_name FROM users LEFT JOIN countries ON users.country_id = countries.id";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        echo "<p>" . $row["first_name"] . " " . $row["last_name"] . " " . $row["country_name"] . "</p>";
    }
}
?>
