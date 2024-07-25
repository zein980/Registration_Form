<?php
// Directory path to the folder containing images
$directory = 'images/';

// Get all files in the directory
$files = glob($directory . '*');

// Loop through each file
foreach ($files as $file) {
    // Check if the file is an image (you can customize this condition based on your requirements)
    if (is_file($file) && in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), array('jpg', 'jpeg', 'png', 'gif'))) {
        // Display the image using HTML img tag
        echo '<img src="' . $file . '" alt="Image" /><br/>';
    }
}
?>