<?php
require_once __DIR__ . '/../db.php';

function getAllProducts() {
    global $conn;
    return $conn->query("SELECT * FROM proizvodi");
}

function getProduct($id) {
    global $conn;
    return $conn->query("SELECT * FROM proizvodi WHERE id = $id")->fetch_assoc();
}

function getFeatures($product_id) {
    global $conn;
    return $conn->query("SELECT * FROM features WHERE proizvod_id = $product_id");
}
?>