<h1>CNC strojevi</h1>

<?php while($row = $products->fetch_assoc()): ?>
    <a href="?page=details&id=<?php echo $row['id']; ?>">
        <?php echo $row['naziv']; ?>
    </a><br>
<?php endwhile; ?>

<br><a href="index.php">Nazad</a>