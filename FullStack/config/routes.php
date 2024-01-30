<?php
$request_uri = $_SERVER['REQUEST_URI'];

switch ($request_uri) {
    case '/fullstack/FullStack/views/register.php':
        include 'register.php';
        break;
    case '/fullstack/FullStack/process/register_process.php':
        include 'process/register_process.php';
        break;
    case '/fullstack/FullStack/database.php':
        include 'database.php';
        break;
    case '/fullstack/FullStack/views/login.php':
        include 'login.php';
        break;
    case '/fullstack/FullStack/process/login_process.php':
        include 'process/login_process.php';
        break;
    case '/fullstack/FullStack/process/logout.php':
        include 'process/logout.php';
        break;
    default:
        http_response_code(404);
        include '404.php';
        break;
}
?>
