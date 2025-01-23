<?php
$dir = "dist/assets/photos/";  // Path to your image folder
$images = glob($dir . "*.jpg");  // This will get all jpg files in the directory

foreach($images as $image) {
    echo '<div class="w-full p-1">
            <div class="overflow-hidden h-full w-full">
                <a href="' . $image . '" data-fancybox="gallery">
                    <img alt="image" class="block h-full w-full object-cover object-center opacity-0 animate-fade-in transition duration-500 transform scale-100 hover:scale-110" src="' . $image . '" />
                </a>
            </div>
          </div>';
}
?>
