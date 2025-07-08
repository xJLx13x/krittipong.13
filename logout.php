<?php
require_once 'config.php';

// ตรวจสอบว่าผู้ใช้เข้าสู่ระบบแล้วหรือไม่
if (isset($_SESSION['user_id'])) {
    // เก็บชื่อผู้ใช้ไว้แสดงข้อความ
    $username = $_SESSION['username'];
    
    // ลบข้อมูล session ทั้งหมด
    session_unset();
    
    // ทำลาย session
    session_destroy();
    
    // เริ่มต้น session ใหม่เพื่อแสดงข้อความ
    session_start();
    
    // ตั้งข้อความแจ้งเตือน
    $_SESSION['logout_success'] = 'ออกจากระบบเรียบร้อยแล้ว สวัสดี ' . htmlspecialchars($username) . '!';
    
    // ลบ session cookie
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600, '/');
    }
    
} else {
    // ผู้ใช้ไม่ได้เข้าสู่ระบบ
    $_SESSION['login_error'] = 'คุณไม่ได้เข้าสู่ระบบ';
}

// กลับไปยังหน้าแรก
header('Location: show.php');
exit();
?>