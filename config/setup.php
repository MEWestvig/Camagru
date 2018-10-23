<?php
require_once('database.php');
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = file_get_contents('data.sql');
    $qr = $db->exec($sql);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
