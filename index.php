<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .login-header h1 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        
        .login-header p {
            color: #666;
            font-size: 0.9rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }
        
        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #667eea;
        }
        
        .btn {
            width: 100%;
            padding: 0.8rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s ease;
        }
        
        .btn:hover {
            transform: translateY(-2px);
        }
        
        .alert {
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            text-align: center;
        }
        
        .alert-error {
            background: #fee;
            color: #c33;
            border: 1px solid #fcc;
        }
        
        .alert-success {
            background: #efe;
            color: #363;
            border: 1px solid #cfc;
        }
        
        .dashboard-container {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        
        .welcome-message {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .user-info {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }
        
        .logout-btn {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        }
    </style>
</head>
<body>
    <?php
    require_once 'config.php';
    
    // ตรวจสอบว่าผู้ใช้เข้าสู่ระบบแล้วหรือไม่
    if (isset($_SESSION['user_id'])) {
        ?>
        <div class="dashboard-container">
            <div class="welcome-message">
                <h1>ยินดีต้อนรับ!</h1>
                <p>คุณเข้าสู่ระบบแล้ว</p>
            </div>
            
            <div class="user-info">
                <strong>ผู้ใช้:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?>
            </div>
            
            <form action="logout.php" method="post">
                <button type="submit" class="btn logout-btn">ออกจากระบบ</button>
            </form>
        </div>
        <?php
    } else {
        ?>
        <div class="login-container">
            <div class="login-header">
                <h1>เข้าสู่ระบบ</h1>
                <p>กรุณาป้อนข้อมูลเพื่อเข้าสู่ระบบ</p>
            </div>
            
            <?php
            if (isset($_SESSION['login_error'])) {
                echo '<div class="alert alert-error">' . $_SESSION['login_error'] . '</div>';
                unset($_SESSION['login_error']);
            }
            
            if (isset($_SESSION['logout_success'])) {
                echo '<div class="alert alert-success">' . $_SESSION['logout_success'] . '</div>';
                unset($_SESSION['logout_success']);
            }
            ?>
            
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">ชื่อผู้ใช้:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                
                <div class="form-group">
                    <label for="password">รหัสผ่าน:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <button type="submit" class="btn">เข้าสู่ระบบ</button>
            </form>
        </div>
        <?php
    }
    ?>
</body>
</html>