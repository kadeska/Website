<?php include 'navagationBar.php';//__NAVIGATION_BAR__?>
<?php
$heading = 'My Work Gallery';
$local_dir = '../data/Pictures/My_Work';
$files = clean_readdir($local_dir);

function clean_readdir($dir){
    $files = []; // Initialize the array
	if ($handle = opendir($dir)) {
		while (false !== ($file = readdir($handle))) {
			if ($file != '.' && $file != '..') {
				$files[] = $file; // Add file to the array
			}
		}
		closedir($handle);
	}
	return $files;
}

function pre_r($array){
    echo '<pre>';
	print_r($array);
	echo '</pre>';
}

// Uncomment this for debugging
// pre_r($files);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            padding: 1rem;
        }
        .gallery img {
            max-width: 200px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1><?php echo $heading; ?></h1>
    <div class="gallery">
        <?php
        foreach ($files as $file) {
            $file_path = $local_dir . '/' . $file;
            echo "<div><img src='$file_path' alt='$file'></div>";
        }
        ?>
    </div>
</body>
</html>

<!--
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'php/portfolio.php';
?>
-->