<?php

session_start();

$connect = new mysqli('localhost', 'ncterm', 'ncterm', 'ncterm');

// check if form submitted
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameOrEmail = $_POST["usernameOrEmail"];
    $password = $_POST['password'];

    $query = "SELECT * FROM `user` WHERE username = ? OR email = ?";
    $statement = $connect->prepare($query);
    $statement->bind_param('ss', $usernameOrEmail, $usernameOrEmail);
    $statement->execute();
    $result = $statement->get_result();

    if($result->num_rows === 1) {
        // login OK
        $user = $result->fetch_assoc();
        // check against hashed password
        if(password_verify($password, $user['encrypted_password'])) {
            $_SESSION['user'] = $user;
            header('Location: index.php?route=home');
            exit();
        }
    } else {
        // KO
        $_SESSION['login_error'] = "Invalid username/email or password.";
        header('Location: index.php?route=login');
        exit();
    }
} else {
    // login
    header('Location: login.php');
    exit();
}
