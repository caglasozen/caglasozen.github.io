<?php
$image_folder = 'dist/assets/photos/'; // Set the image folder path
$images = glob($image_folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Get all image files (you can add more extensions)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }
        .gallery img {
            width: 200px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Image Gallery</h1>
    <div class="gallery">
        <?php
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Image">';
        }
        ?>
    </div>
</body>
</html>
