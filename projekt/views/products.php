<?php
include_once __DIR__ . "/../includes/header.php";

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>

<main class="products-page">
    <h1 class="page-title">Proizvodi</h1>
    
    <div class="products-grid">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="product-card">
            <div class="card-image">
                <img src="../public/assets/uploads/<?php echo $row["main_image"]; ?>" alt="<?php echo $row["name"]; ?>">
            </div>
            <div class="card-content">
                <h2><?php echo $row["name"]; ?></h2>
                <p><?php echo $row["short_description"]; ?></p>
                <a href="index.php?url=details&id=<?php echo $row["id"]; ?>" class="btn-details">Detalji</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</main>

<?php
// 4. Include the footer
include_once __DIR__ . "/../includes/footer.php";
?>