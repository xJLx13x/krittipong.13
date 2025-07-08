<?php
require_once 'config.php';

// ฟังก์ชันสำหรับสร้างผู้ใช้ใหม่
function createUser($username, $password, $email = null) {
    global $pdo;
    
    try {
        // ตรวจสอบว่าชื่อผู้ใช้มีอยู่แล้วหรือไม่
        $check_stmt = $pdo->prepare("SELECT id FROM user WHERE username = :username");
        $check_stmt->bindParam(':username', $username);
        $check_stmt->execute();
        
        if ($check_stmt->fetch()) {
            return "ชื่อผู้ใช้นี้มีอยู่แล้ว";
        }
        
        // เข้ารหัสรหัสผ่าน
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // เพิ่มผู้ใช้ใหม่
        $stmt = $pdo->prepare("INSERT INTO user (username, password, email) VALUES (:username, :password, :email)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':email', $email);
        
        if ($stmt->execute()) {
            return "สร้างผู้ใช้ใหม่สำเร็จ";
        } else {
            return "เกิดข้อผิดพลาดในการสร้างผู้ใช้";
        }
        
    } catch (PDOException $e) {
        return "เกิดข้อผิดพลาด: " . $e->getMessage();
    }
}

// ตัวอย่างการใช้งาน
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $result = createUser($username, $password, $email);
    echo $result;
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างผู้ใช้ใหม่</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        
        button:hover {
            background-color: #0056b3;
        }
        
        .back-link {
            text-align: center;
            margin-top: 20px;
        }
        
        .back-link a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>สร้างผู้ใช้ใหม่</h2>
        
        <form method="post">
            <div class="form-group">
                <label for="username">ชื่อผู้ใช้:</label>
                <input type="text" id="username" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="password">รหัสผ่าน:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label for="email">อีเมล:</label>
                <input type="email" id="email" name="email">
            </div>
            
            <button type="submit">สร้างผู้ใช้</button>
        </form>
        
        <div class="back-link">
            <a href="index.php">กลับไปหน้าเข้าสู่ระบบ</a>
        </div>
    </div>
</body>
</html>