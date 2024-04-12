<?php

include_once 'elements/db_utils.php';

session_start();

$connect = getConnection();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
//    $releaseDate = $_POST['release_date'];
//    $author = $_POST['author'];

    // check illustration file uploaded
    $filename = filenameFromUpload($_FILES['illustration_file'], $title, 'gallery');

    // insert in work table
    $workId = insertWork($connect, null, $title, null, $filename);
    $connect->close();
    header('Location: index.php?route=gallery');
    exit();
} else {
    header('Location: index.php?route=gallery');
    exit();
}
