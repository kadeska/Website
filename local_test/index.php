<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Portfolio</title>
    <link rel="stylesheet" href="src/php/css/styles.css">
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
    </header>
    <div class="portfolio">
        <?php
        include 'src/php/portfolio.php';
        foreach ($portfolio_items as $item) {
            echo '<div class="portfolio-item">';
            echo '<h2>' . htmlspecialchars($item['title']) . '</h2>';
            echo '<p>' . htmlspecialchars($item['description']) . '</p>';
            echo '<a href="' . htmlspecialchars($item['link']) . '" target="_blank">View Project</a>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
<?php include 'php/portfolio.php'; var_dump($portfolio_items); ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'php/portfolio.php';
?>
