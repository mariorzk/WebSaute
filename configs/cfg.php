<?php
//define('HOST', 'localhost');
//define('USER', 'root');
//define('PASSWD', '');
//define('BASE', 'saute');

//$conn = new MySQLi(HOST,USER,PASSWD,BASE);

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sautedb';

try{
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
?>