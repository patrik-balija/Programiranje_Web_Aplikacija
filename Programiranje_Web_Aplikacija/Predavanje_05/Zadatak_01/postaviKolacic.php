<?php
    setcookie("user", $_POST["username"], time() + 86400, "/");
    header("Location: index.php");
?>