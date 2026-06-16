<?php
    $newsTitle = isset($_POST["news-title"]) ? $_POST["news-title"] : "News title";
    $newsDescriptionShort = isset($_POST["news-description-short"]) ? $_POST["news-description-short"] : "News description short";
    $newsDescription = isset($_POST["news-description"]) ? $_POST["news-description"] : "News description";
    $newsImageCover = isset($_POST["news-image-cover"]) ? $_POST["news-image-cover"] : "News image cover";
    $newsCategory = isset($_POST["news-category"]) ? $_POST["news-category"] : "News category";
    $newsArchive = isset($_POST["news-archive"]) ? $_POST["news-archive"] : "News archive";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIJEST</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">POLITIK</a></li>
                <li><a href="#">SPORT</a></li>
                <li><a href="#">UNOS</a></li>
                <li><a href="#">ADMINISTRACIJA</a></li>
            </ul>
        </nav>
        <h1>Frankfurter Allgemeine</h1>
    </header>
    <main>
        <section>
            <h2><?php echo $newsTitle; ?></h2>
            <div>
                <span><?php echo $newsCategory; ?></span>
                <time datetime="2025-06-08T14:00">16.05.2019</time>
            </div>
            <figure>
                <img src="<?php echo $newsImageCover; ?>" alt="News cover image">
            </figure>
            <p><strong><?php echo $newsDescriptionShort; ?></strong></p>
            <p><?php echo $newsDescription; ?></p>
        </section>
    </main>
    <footer>
        <p>Frankfurter Allgemeine</p>
    </footer>
</body>

</html>