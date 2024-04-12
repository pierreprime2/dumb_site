<?php

function getDBConnection() {
    $host = 'localhost';
    $username = 'ncterm';
    $password = 'ncterm';
    $database = 'ncterm';

    // create connection
    $connect = new mysqli($host, $username, $password, $database);

    if($connect->connect_error) {
        die("Connection failed: $connect->connect_error");
    }

    return $connect;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash password
    // insert
    $connect = getDBConnection();
    $query = "INSERT INTO `user` (first_name, last_name, username, email, encrypted_password) VALUES (?, ?, ?, ?, ?)";
    $statement = $connect->prepare($query);
    $statement->bind_param('sssss', $firstName, $lastName, $username, $email, $password);

    // execute query
    if($statement->execute()) {
        $_SESSION['registration_success'] = true;
        header('Location: index.php?route=home');
    } else {
        $_SESSION['registration_success'] = false;
        header('Location: index.php?route=home');
    }

    $statement->close();
    $connect->close();
}
