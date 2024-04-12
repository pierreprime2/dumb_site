<?php

session_start();

$route = isset($_GET['route']) ? $_GET['route'] : 'home';

$routes = [
    'home' => 'home.php',
    'prog' => 'prog.php',
    'books' => 'books.php',
    'forum_index' => 'forum_index.php',
    'forum_topic' => 'forum_topic.php',
    'gallery' => 'gallery.php',
    'movies' => 'movies.php',
    'music' => 'music.php',
    'gaming' => 'gaming.php',
    'tabletop' => 'tabletop.php',
    'manifesto' => 'manifesto.php',
    'links' => 'links.php',
    'login' => 'login.php',
    'contact' => 'contact.php',
    'crt_test' => 'crt_test.php',
    'register' => 'register.php',
    'profile' => 'profile.php',
    'profile_modify' => 'profile_modify.php',
    'logout' => 'logout_process.php',
    'create_album' => 'create_album.php',
];

if(array_key_exists($route, $routes)) {
    // define nicer session variables if connected
    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $firstName = $user['first_name'];
        $lastName = $user['last_name'];
        $username = $user['username'];
        $banned = $user['banned'];
        $email = $user['email'];
        $image = $user['profile_image_url'];
        $role = $user['role'];
        $signature = $user['signature'];
//        $password = $user['password'];
        $profileImageUrl = $user['profile_image_url'];
        $favoriteTheme = $user['favorite_theme'];
    }
    $theme = $favoriteTheme ?? 'blue';
    include $routes[$route];
} else {
    include '404.php';
}

$_SESSION['user_id'] = '123';
$user_id = $_SESSION['user_id'];

//session_destroy();

// cookie logics
if($route === 'home' && !isset($_COOKIE['visited_home'])) {
    $cookie_name = "visited_home";
    $cookie_value = "yes";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}

// retrieve cookies when needed
if(isset($_COOKIE['visited_home'])) {
    $visited_home = $_COOKIE['visited_home'];
    // additionnal logics here
}