
<?php
    include_once("../core/db.php");
    $page = isset($_GET["url"]) ? $_GET["url"] : "home";

    switch($page){
        case "home":
            require_once __DIR__ . '/../views/home.php';
            break;

        case "services":
            require_once __DIR__ . '/../views/services.php';
            break;

        case "products":
            require_once __DIR__ . '/../views/products.php';
            break;

        case "about":
            require_once __DIR__ . '/../views/about.php';
            break;

        case "contact":
            require_once __DIR__ . '/../views/contact.php';
            break;
        
        case "login":
            require_once __DIR__ . '/../views/login.php';
            break;            
    }
?>