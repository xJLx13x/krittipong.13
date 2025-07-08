<?php
require_once 'config.php';

// ตรวจสอบว่าเป็นการส่งข้อมูลแบบ POST หรือไม่
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    // ตรวจสอบข้อมูลว่าไม่ว่าง
    if (empty($username) || empty($password)) {
        $_SESSION['login_error'] = 'กรุณากรอกชื่อผู้ใช้และรหัสผ่าน';
        header('Location: index.php');
        exit();
    }
    
    try {
        // ค้นหาผู้ใช้ในฐานข้อมูล
        $stmt = $pdo->prepare("SELECT * FROM user WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        $user = $stmt->fetch();
        
        if ($user) {
            // ตรวจสอบรหัสผ่าน
            if (password_verify($password, $user['password'])) {
                // รหัสผ่านถูกต้อง - เข้าสู่ระบบ
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['login_success'] = 'เข้าสู่ระบบสำเร็จ!';
                
                // บันทึกเวลาเข้าสู่ระบบ (ถ้าต้องการ)
                $update_stmt = $pdo->prepare("UPDATE user SET last_login = NOW() WHERE id = :id");
                $update_stmt->bindParam(':id', $user['id']);
                $update_stmt->execute();
                
                header('Location: ./main/dashboard.php');
                exit();
            } else {
                // รหัสผ่านผิด
                $_SESSION['login_error'] = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
            }
        } else {
            // ไม่พบผู้ใช้
            $_SESSION['login_error'] = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
        }
        
    } catch (PDOException $e) {
        $_SESSION['login_error'] = 'เกิดข้อผิดพลาดในการเข้าสู่ระบบ กรุณาลองใหม่อีกครั้ง';
        error_log("Login error: " . $e->getMessage());
    }
} else {
    $_SESSION['login_error'] = 'การเข้าถึงไม่ถูกต้อง';
}

header('Location: index.php');
exit();
?>