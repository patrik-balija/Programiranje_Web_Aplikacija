<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "cnc_webshop";

        try{
            $conn = new mysqli_connect(
            $db_server, 
            $db_user, 
            $db_password, 
            $db_name);
        } catch(mysqli_sql_exception){
            echo "Baza nije učitana. <br>";
        }

?>