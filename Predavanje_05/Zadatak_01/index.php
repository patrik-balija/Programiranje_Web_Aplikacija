<?php
    $autor = "Patrik Balija";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $autor; ?></title>
</head>

<body>
    <?php
    if (empty($_COOKIE["user"])) {
        include("signIn.php");
    } else{
        include("signOut.php");
    }
    ?>
</body>

</html>