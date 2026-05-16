<?php
if(isset($_POST["boja"]) && isset($_POST["promjeni"])){
    setcookie("cookieBoja", $_POST["boja"], time() + 86400, "/");
}
    header("Location: index.php");

?>