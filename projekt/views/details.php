<?php
include_once __DIR__ . "/../includes/header.php";

// 1. Secure the ID by converting it strictly to an integer
$product_id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;

// 2. Fetch main product details ONCE at the top
$query = "SELECT * FROM products WHERE id = " . $product_id;
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_assoc($result);

// Optional safety check: stop if product doesn't exist
if (!$product) {
    echo "<p>Proizvod nije pronađen.</p>";
    include_once __DIR__ . "/../includes/footer.php";
    exit;
}
?>

<img src="../public/assets/uploads/<?php echo htmlspecialchars($product["main_image"]); ?>"
    alt="<?php echo htmlspecialchars($product["name"]); ?>" width="256">
<h1><?php echo htmlspecialchars($product["name"]); ?></h1>
<p><?php echo htmlspecialchars($product["short_description"]); ?></p>

<form action="requests.php" method="post">
    <input type="number" name="quantity" min="1" max="99" value="1">
    <input type="submit" value="Dodaj u moje zahtjeve">
</form>

<div class="tabs">
    <button class="tab-btn" onclick="switchTab('details')">Opis</button>
    <button class="tab-btn" onclick="switchTab('materials')">Materijali</button>
    <button class="tab-btn" onclick="switchTab('industries')">Industrije</button>
    <button class="tab-btn" onclick="switchTab('applications')">Uporaba</button>
</div>

<div id="materials" class="tab-content">
    <?php
    $query = "SELECT * FROM product_materials WHERE id = " . $product_id;
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while ($materials = mysqli_fetch_assoc($result)) {
            echo "<li>" . htmlspecialchars($materials["material_name"]) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</div>


<div id="facts" class="tab-content" style="display:none;">
    <p>Ovdje dolaze činjenice...</p>
</div>

<script>
    function switchTab(tabName) {
        // Hide all tabs and show the active one
        document.querySelectorAll('.tab-content').forEach(el => el.style.display = 'none');
        document.getElementById(tabName).style.display = 'block';
    }
</script>

<?php
include_once __DIR__ . "/../includes/footer.php";
?>