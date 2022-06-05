<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "kuliahweb";
$dsn = "mysql:host=$dbserver;dbname=$dbname";

$koneksi = null;
try {
    $koneksi = new PDO($dsn, $dbuser, $dbpass);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}