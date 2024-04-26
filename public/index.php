<?php

session_start();

// set some constants
define('PATH_ROOT', __DIR__ . '/');
define('PATH_STYLES', __DIR__ . '/assets/style/');
define('PATH_VIDEO', __DIR__ . '/assets/video/');
define('PATH_ELEMENTS', __DIR__ . '/elements/');
define('PATH_CONTENT', __DIR__ . '/content/');
define('PATH_TEST', __DIR__ . '/test/');
define('PATH_USER', __DIR__ . '/user/');

$route = isset($_GET['route']) ? $_GET['route'] : 'home';

$routes = [
    'home' => PATH_CONTENT . 'home.php',
    'prog' => PATH_CONTENT . 'prog.php',
    'books' => PATH_CONTENT . 'books.php',
    'forum_index' => PATH_USER . 'forum_index.php',
    'forum_topic' => PATH_USER . 'forum_topic.php',
    'gallery' => PATH_CONTENT . 'gallery.php',
    'movies' => PATH_CONTENT . 'movies.php',
    'music' => PATH_CONTENT . 'music.php',
    'gaming' => PATH_CONTENT . 'gaming.php',
    'tabletop' => PATH_CONTENT . 'tabletop.php',
    'manifesto' => PATH_CONTENT . 'manifesto.php',
    'links' => PATH_ELEMENTS . 'links.php',
    'login' => PATH_USER . 'login.php',
    'contact' => PATH_USER . 'contact.php',
    'register' => PATH_USER . 'register.php',
    'profile' => PATH_USER . 'profile.php',
    'profile_modify' => PATH_USER . 'profile_modify.php',
    'logout' => PATH_USER . 'logout_process.php',
    'create_album' => PATH_CONTENT . 'create_album.php',
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
    $file = $routes[$route];
    if (file_exists($file)) {
        include $file;
    } else {
        include PATH_CONTENT . '404.php';
    }
} else {
    include PATH_CONTENT . '404.php';
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