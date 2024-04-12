<?php

include_once 'elements/db_utils.php';

session_start();

$connect = getConnection();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $studio = $_POST['studio'];
    $year = $_POST['year'];
    $maxPlayers = $_POST['max_players'];
    $online = isset($_POST['online']);
    $editor = $_POST['editor'];

    // check if cover is uploaded
    $illustrationFilename = filenameFromUpload($_FILES['illustration_file'], $title, 'games');
//    if(isset($_FILES['illustration_file']) && $_FILES['illustration_file']['error'] == UPLOAD_ERR_OK) {
//        $illustrationFile = $_FILES['illustration_file'];
//        $illustrationFilename = handleIllustrationFile($illustrationFile, $title, 'games');
//    } else {
//        $illustrationFilename = null;
//    }

    // insert in work table
    $workId = insertWork($connect, $year, $title, $studio, $illustrationFilename);

    // insert in game table
    $query_game = "INSERT INTO `video_game` (work_id, developer, editor, max_players, online) VALUES (?, ?, ?, ?, ?)";
    $statement_game = $connect->prepare($query_game);
    $statement_game->bind_param('issii', $workId, $studio, $editor, $maxPlayers, $online);
    $statement_game->execute();
    // close statement and connection
    $statement_game->close();
    $connect->close();
    header('Location: index.php?route=gaming');
    exit();
} else {
    header('Location: index.php?route=gaming');
    exit();
}

