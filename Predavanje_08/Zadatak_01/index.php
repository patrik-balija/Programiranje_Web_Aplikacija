<?php
$con = mysqli_connect("localhost", "root", "", "ispit_vjezba");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$query = "
    SELECT first_name FROM users
    ORDER BY first_name ASC
    LIMIT 10
";

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<p>" . $row["first_name"] . "</p>";
    }
} else {
    echo "Database is empty";
}


?>