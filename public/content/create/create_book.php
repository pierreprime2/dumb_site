<?php

include_once 'elements/db_utils.php';

session_start();

$connect = getConnection();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $releaseDate = $_POST['release_date'];
    $illustrator = $_POST['illustrator'];
    $pageNb = $_POST['page_nb'];
    $isbn = $_POST['isbn'];

    // check cover file uploaded
    $posterFilename = filenameFromUpload($_FILES['cover_file'], $title, 'books');
//    if(isset($_FILES['cover_file']) && $_FILES['cover_file']['error'] == UPLOAD_ERR_OK) {
//        $cover = $_FILES['cover_file'];
//        $coverFilename = handleIllustrationFile($cover, $title, 'books');
//    } else {
//        $posterFilename = null;
//    }

    // insert work table
    $workId = insertWork($connect, $releaseDate, $title, $author, $coverFilename);

    // insert book
    $queryBook = "INSERT INTO `book` (work_id, isbn, num_pages, illustrator) VALUES (?, ?, ?, ?)";
    $statementBook = $connect->prepare($queryBook);
    $statementBook->bind_param('isis', $workId, $isbn, $pageNb, $illustrator);
    $statementBook->execute();
    // close
    $statementBook->close();
    header('Location: index.php?route=books');
    exit();
} else {
    header('Location: index.php?route=books');
}
