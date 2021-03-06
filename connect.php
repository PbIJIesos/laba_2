<?php
$database_host = 'localhost';
$database_name   = 'laba_2';
$database_user = 'root';
$database_pass = '';
$database_charset = 'utf8';

$dsn = "mysql:host=$database_host;dbname=$database_name;charset=$database_charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // $pdo = new PDO($dsn, $user, $pass, $options);
    $pdo = new PDO($dsn, $database_user, $database_pass, $opt);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>