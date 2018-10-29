<?php
require_once('database.php');

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE camagru";
    $conn->exec($sql);
    echo "Database created successfully<br>";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$sql = file_get_contents('data.sql');
$qr = $db->execute($sql);
?>
