<?php
    // This code will generate random pixel arts
    // And save them as png files in the /files/avatars folder
    // Do this without using any libraries or frameworks
    
    
    // The files folder
    $folder = 'files/avatars/';
    $min_folder = 'files/avatars/min/';

    // Image size is 8x8 pixels
    $height = 8;
    $width = 8;

    // Save images? 1 = yes, 0 = no
    $save = 0;

    // The end image size
    $end_width = $width * 100;
    $end_height = $height * 100;

    // Create a blank image
    $image = imagecreatetruecolor($width, $width);
    // Get a random hex color
    $color = dechex(rand(0, 16777215));

    // Generate a 100 numbers long string of 0,1,2 and 3
    // The string length is the number of pixels in the image
    $string_length = $width * $height;
    $string = '';
    for ($i = 0; $i < $string_length; $i++) {
        $string .= rand(0, 3);
    }
    // 0,1 and 2 are now changed to 0
    $string = str_replace(array('1', '2'), '0', $string);

    // Number 3 is now changed to 1
    $string = str_replace('3', '1', $string);

    // The image will be drawn with the random color
    // Where a 1 is will be drawn with the color
    // And a 0 will be drawn with white
    // This will create a random pixel art
    
    // Loop through the string
    for ($i = 0; $i < $width; $i++) {
        for ($j = 0; $j < $height; $j++) {
            // Get the current character
            $char = substr($string, $i + $j * $width, 1);
            // If the character is a 1
            if ($char == 1) {
                // Draw a pixel with the color
                imagesetpixel($image, $i, $j, hexdec($color));
            }
        }
    }

    // Now the image has to be resized to $end_width x $end_height 

    // Create a blank image
    $end_image = imagecreatetruecolor($end_width, $end_height);
    // Copy the image to the end image
    imagecopyresampled($end_image, $image, 0, 0, 0, 0, $end_width, $end_height, $width, $height);

    // Put out the image on the screen
    header('Content-Type: image/png');
    imagepng($end_image);



    // The image $image should be saved as "avatar-{number}-mini.png"
    // The image $end_image should be saved as "avatar-{number}.png"
    // Get into the $folder folder
    // Search for all files with the .png extension
    // All the files shuld be named with the format: "avatar-{number}.png"
    // The number should be the same as the number of files in the folder + 1

    // Get the number of files in the folder
    $files = glob($folder . '*.png');
    // Get the number of files in the folder
    $number = count($files) + 1;

    if($save == 1){
        // Save the image as "avatar-{number}-mini.png"
        imagepng($image, $min_folder . 'avatar-' . $number . '-mini.png');
        // Save the image as "avatar-{number}.png"
        imagepng($end_image, $folder . 'avatar-' . $number . '.png');
    }

    // Free the memory
    imagedestroy($image);
    imagedestroy($end_image);
?>