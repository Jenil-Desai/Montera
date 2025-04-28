<?php
require_once __DIR__ . '/../vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
} catch (Exception $e) {
    die("Error creating Dotenv object: " . $e->getMessage());
}

$host = $_ENV['HOST'];
$user = $_ENV['USER'];
$password = $_ENV['PASSWORD'];

$con = mysqli_connect($host, $user, $password, "defaultdb", 20014);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
return $con;