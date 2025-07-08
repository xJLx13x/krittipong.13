<?php
// config.php - Database configuration
$servername = "localhost";
$username = "root"; // แก้ไขตามการตั้งค่าของคุณ
$password = ""; // แก้ไขตามการตั้งค่าของคุณ
$dbname = "camp1"; // แก้ไขชื่อฐานข้อมูลของคุณ

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// เริ่มต้น session
session_start();
?>