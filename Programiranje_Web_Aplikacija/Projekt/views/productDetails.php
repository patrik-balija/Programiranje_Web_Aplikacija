<h1><?php echo $product['naziv']; ?></h1>

<p><?php echo $product['cijena']; ?> €</p>

<h3>Features</h3>

<ul>
<?php while($f = $features->fetch_assoc()): ?>
    <li><?php echo $f['tekst']; ?></li>
<?php endwhile; ?>
</ul>

<a href="?page=products">Nazad</a>