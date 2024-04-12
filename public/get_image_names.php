<?php

$folder = './images/gallery/';
$files = scandir($folder);
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

$imageFilenames = [];

foreach ($files as $file) {
    $pathInfo = pathinfo($file);

    // check file / allowed extension
    if(is_file($folder . $file) && in_array(strtolower($pathInfo['extension']), $allowedExtensions)) {
        $imageFilenames[] = $file;
    }
}

echo json_encode($imageFilenames);
