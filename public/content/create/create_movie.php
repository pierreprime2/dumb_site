<?php

include_once 'elements/db_utils.php';

session_start();

$connect = getConnection();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $director = $_POST['director'];
    $releaseDate = $_POST['release_date'];
    $producer = $_POST['producer'];
    $poster = $_POST['poster'];
    $duration = $_POST['duration'];

    // check illustration file uploaded
    $poster_filename = filenameFromUpload($_FILES['poster'], $title, 'movies');
//    if(isset($_FILES['poster']) && $_FILES['poster']['error'] == UPLOAD_ERR_OK) {
//        $poster = $_FILES['poster'];
//        $poster_filename = handleIllustrationFile($poster, $title, 'movies');
//    } else {
//        $poster_filename = null;
//    }

    // insert work table
    $workId = insertWork($connect, $releaseDate, $title, $director, $poster_filename);

    // insert movie table
    $queryMovie = "INSERT INTO `movie` (work_id, director, producer, duration) VALUES (?, ?, ?, ?)";
    $statementMovie = $connect->prepare($queryMovie);
    $statementMovie->bind_param('issi', $workId, $director, $producer, $duration);
    $statementMovie->execute();
    // close
    $statementMovie->close();
    $connect->close();
    header('Location: index.php?route=movies');
    exit();
} else {
    header('Location: index.php?route=movies');
}