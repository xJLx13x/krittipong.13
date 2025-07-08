<?php
// index.php - หน้าหลักแสดงข่าวสาร
include 'config.php';

// ดึงข้อมูลข่าวสารจากฐานข้อมูล
$stmt = $pdo->query("SELECT * FROM news ORDER BY created_at DESC");
$news = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ร้านอาหารของเรา</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">🍽️ </div>
                <ul>
                    <li><a href="dashboard.php">หน้าหลัก</a></li>
                    <!-- <li><a href="shop.php">สินค้า</a></li> -->
                    <li><a href="location.php">จองโซน</a></li>
                    <li><a href="../logout.php">logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="hero">
                <h1>ss</h1>
                <p>ss</p>
                <!-- <a href="products.php" class="btn btn-primary">ดูเมนูอาหาร</a> -->
                <a href="location.php" class="btn btn-secondary">จองโต๊ะ</a>
            </div>

            <div class="news-section">
                <h2>ข่าวสารและประกาศ</h2>
                <?php if (empty($news)): ?>
                    <p>ไม่มีข่าวสารในขณะนี้</p>
                <?php else: ?>
                    <?php foreach ($news as $item): ?>
                        <div class="news-item">
                            <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                            <p><?php echo htmlspecialchars($item['content']); ?></p>
                            <div class="news-date">
                                <?php echo date('d/m/Y H:i', strtotime($item['created_at'])); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 ร้านอาหารของเรา. สงวนลิขสิทธิ์.</p>
        </div>
    </footer>
</body>
</html>