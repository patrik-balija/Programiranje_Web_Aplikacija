<?php

require_once 'models/product.php';

$page = $_GET['page'] ?? 'categories';

if ($page === 'products') {

    $products = getAllProducts();
    include 'views/productList.php';

} elseif ($page === 'details') {

    $id = $_GET['id'];

    $product = getProduct($id);
    $features = getFeatures($id);

    include 'views/productDetails.php';

} else {

    include 'views/categories.php';
}
?>