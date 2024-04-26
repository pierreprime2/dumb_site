<?php

include_once 'elements/db_utils.php';

session_start();

$connect = getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $year = $_POST['year'];

    // check if illustration file is uploaded
    $illustration_filename = filenameFromUpload($_FILES['illustration_file'], $title, 'albums');
//    if (isset($_FILES['illustration_file']) && $_FILES['illustration_file']['error'] == UPLOAD_ERR_OK) {
//        $illustration_file = $_FILES['illustration_file'];
//        $illustration_filename = handleIllustrationFile($illustration_file, $title, 'albums');
//    } else {
//        $illustration_filename = null;
//    }

    // insert in work table
    $work_id = insertWork($connect, $year, $title, $artist, $illustration_filename);

    // insert into album table
    $query_album = "INSERT INTO `album` (work_id) VALUES (?)";
    $statement_album = $connect->prepare($query_album);
    $statement_album->bind_param('i', $work_id);
    $statement_album->execute();
    // close statements and connections
    $statement_album->close();
    $connect->close();
    header('Location: index.php?route=music');
    exit();
} else {
    header('Location: index.php?route=music');
    exit();
}

