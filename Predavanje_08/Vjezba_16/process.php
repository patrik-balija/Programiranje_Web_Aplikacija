<?php
$firstName = isset($_POST["first-name"]) ? $_POST["first-name"] : "";
$lastName = isset($_POST["last-name"]) ? $_POST["last-name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$username = isset($_POST["username"]) ? $_POST["username"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$country = isset($_POST["country"]) ? $_POST["country"] : "";

if($password != ""){
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
}

$conn = mysqli_connect("localhost", "root", "", "ispit_vjezba");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$query = "INSERT INTO users(first_name, last_name, email, username, password, country) VALUES (?, ?, ?, ?, ?, ?)";
if ($stmt = $conn->prepare($query)) {
    $stmt->bind_param("ssssss", $firstName, $lastName, $email, $username, $hashedPassword, $country);
    $stmt->execute();
}

$stmt->close();
mysqli_close($conn);
?>