<?php

function getConnection() {
    return new mysqli('localhost', 'ncterm', 'ncterm', 'ncterm');
}

function insertWork($connect, $year, $title, $author, $illustrationFilename): int {
    $query_work = "INSERT INTO `work` (release_date, title, author, illustration_url) VALUES (?, ?, ?, ?)";
    $statement_work = $connect->prepare($query_work);
    $release_date = date('Y-m-d', strtotime("$year-01-01"));
    $statement_work->bind_param('ssss', $release_date, $title, $author, $illustrationFilename);
    $statement_work->execute();
    $statement_work->close();
    return $connect->insert_id;
}

function handleIllustrationFile($file, $title, $suffix) {
    $target_dir = "images/covers/$suffix/";
    $target_file = $target_dir . strtolower(str_replace(' ', '_', $title)) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // check if file exists
    $counter = 2;
    while(file_exists($target_file)) {
        $target_file = $target_dir . strtolower(str_replace(' ', '_', $title)) . '_' . $counter . '.' . $imageFileType;
        $counter++;
    }

    // check file size
    if($file['size'] > 500000) {
        echo 'Sorry your file is too large.';
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {
        echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
        $uploadOk = 0;
    }

    // check if upload is set to 0 by an error
    if($uploadOk == 0) {
        echo 'Sorry, your file was not uploaded.';
        exit();
    } else {
        // otherwise upload the file
        if(move_uploaded_file($file['tmp_name'], $target_file)) {
            return $target_file;
        } else {
            echo 'Sorry, error uploading your file';
            exit();
        }
    }
}

function filenameFromUpload($file, string $title, string $suffix) {
    if(isset($file) && $file['error'] == UPLOAD_ERR_OK) {
        $filename = handleIllustrationFile($file, $title, $suffix);
    } else {
        $filename = null;
    }
    return $filename;
}