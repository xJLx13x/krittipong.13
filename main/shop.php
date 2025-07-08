<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สินค้า</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }


/* Header */
header {
    background: rgba(255, 255, 255, 0.95);
    padding: 1rem 0;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #4a5568;
}

nav ul {
    display: flex;
    list-style: none;
    gap: 2rem;
}

nav a {
    text-decoration: none;
    color: #4a5568;
    font-weight: 500;
    transition: color 0.3s ease;
    padding: 0.5rem 1rem;
    border-radius: 5px;
}

nav a:hover {
    background: #667eea;
    color: white;
}




        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23e9ecef" width="1200" height="600"/><text x="600" y="300" text-anchor="middle" fill="%23666" font-size="48" font-family="Arial">Hero Image</text></svg>');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
        }

        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            display: inline-block;
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255,107,107,0.4);
        }

        /* Products Section */
        .products-section {
            padding: 4rem 0;
            background: white;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .product-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(45deg, #f1f2f6, #ddd);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-size: 1.1rem;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .product-price {
            font-size: 1.5rem;
            color: #e74c3c;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .product-description {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }

        .btn-secondary {
            background: linear-gradient(45deg, #3742fa, #2f3542);
            color: white;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            display: inline-block;
            transition: transform 0.3s;
            border: none;
            cursor: pointer;
            width: 100%;
            text-align: center;
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
        }

        /* Features Section */
        .features-section {
            padding: 4rem 0;
            background: #f8f9fa;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.5rem;
        }

        /* Footer */
        footer {
            background: #2c3e50;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #ecf0f1;
        }

        .footer-section p, .footer-section a {
            color: #bdc3c7;
            text-decoration: none;
            line-height: 1.8;
        }

        .footer-section a:hover {
            color: #ecf0f1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .products-grid {
                grid-template-columns: 1fr;
            }
            
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }
        }

        /* Cart notification */
        .cart-notification {
            position: fixed;
            top: 100px;
            right: 20px;
            background: #27ae60;
            color: white;
            padding: 1rem 2rem;
            border-radius: 5px;
            display: none;
            z-index: 1000;
        }

        .cart-notification.show {
            display: block;
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
        }

        .modal-content {
            background: white;
            margin: 5% auto;
            padding: 0;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
        }

        .modal-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1.5rem;
            border-radius: 10px 10px 0 0;
            position: relative;
        }

        .modal-header h2 {
            margin: 0;
            font-size: 1.5rem;
        }

        .close-btn {
            position: absolute;
            top: 1rem;
            right: 1.5rem;
            font-size: 2rem;
            cursor: pointer;
            color: white;
            background: none;
            border: none;
        }

        .close-btn:hover {
            opacity: 0.7;
        }

        .modal-body {
            padding: 2rem;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .item-info {
            flex: 1;
        }

        .item-name {
            font-weight: bold;
            color: #2c3e50;
        }

        .item-price {
            color: #e74c3c;
            font-size: 1.1rem;
        }

        .item-controls {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .quantity-btn {
            background: #3742fa;
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-btn:hover {
            background: #2f3542;
        }

        .quantity-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .quantity {
            min-width: 30px;
            text-align: center;
            font-weight: bold;
        }

        .remove-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .remove-btn:hover {
            background: #c0392b;
        }

        .cart-total {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-top: 1rem;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .total-final {
            font-size: 1.3rem;
            font-weight: bold;
            color: #2c3e50;
            border-top: 2px solid #ddd;
            padding-top: 0.5rem;
        }

        .checkout-section {
            margin-top: 2rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #2c3e50;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            outline: none;
            border-color: #3742fa;
        }

        .form-row {
            display: flex;
            gap: 1rem;
        }

        .form-row .form-group {
            flex: 1;
        }

        .payment-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }

        .payment-method {
            border: 2px solid #ddd;
            padding: 1rem;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s;
        }

        .payment-method:hover {
            border-color: #3742fa;
        }

        .payment-method.selected {
            border-color: #3742fa;
            background: #f0f2ff;
        }

        .payment-method input[type="radio"] {
            display: none;
        }

        .payment-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .btn-checkout {
            background: linear-gradient(45deg, #27ae60, #2ecc71);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            margin-top: 1rem;
            transition: transform 0.3s;
        }

        .btn-checkout:hover {
            transform: translateY(-2px);
        }

        .btn-checkout:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        .empty-cart {
            text-align: center;
            padding: 2rem;
            color: #666;
        }

        .empty-cart-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .modal-content {
                margin: 10% 10px;
                max-width: none;
            }
            
            .form-row {
                flex-direction: column;
            }
            
            .payment-methods {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<header>
        <div class="container">
            <nav>
                <div class="logo">สินค้า</div>
                <div class="cart-icon" onclick="showCart()">
                    🛒 ตะกร้า (<span id="cart-count">0</span>)
                </div>
                <ul>
                    <li><a href="dashboard.php">หน้าหลัก</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>ยินดีต้อนรับสู่ร้านค้าออนไลน์</h1>
                <p>ค้นหาสินค้าคุณภาพดีราคาเป็นมิตร พร้อมจัดส่งฟรีทั่วไทย</p>
                <a href="#products" class="btn">เลือกซื้อสินค้า</a>
            </div>
        </div>
    </section>

    <section id="products" class="products-section">
        <div class="container">
            <h2 class="section-title">สินค้าแนะนำ</h2>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">📱 รูปสินค้า</div>
                    <div class="product-info">
                        <h3 class="product-title">สมาร์ทโฟนรุ่นใหม่</h3>
                        <div class="product-price">฿15,990</div>
                        <p class="product-description">สมาร์ทโฟนรุ่นใหม่ล่าสุด พร้อมเทคโนโลยีล้ำสมัย กล้องความละเอียดสูง</p>
                        <button class="btn-secondary" onclick="addToCart('สมาร์ทโฟนรุ่นใหม่', 15990)">เพิ่มลงตะกร้า</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">💻 รูปสินค้า</div>
                    <div class="product-info">
                        <h3 class="product-title">แล็ปท็อปเกมมิ่ง</h3>
                        <div class="product-price">฿35,900</div>
                        <p class="product-description">แล็ปท็อปสำหรับเกมเมอร์ จอ 15.6 นิ้ว การ์ดจอแรง เล่นเกมได้ลื่น</p>
                        <button class="btn-secondary" onclick="addToCart('แล็ปท็อปเกมมิ่ง', 35900)">เพิ่มลงตะกร้า</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🎧 รูปสินค้า</div>
                    <div class="product-info">
                        <h3 class="product-title">หูฟังไร้สาย</h3>
                        <div class="product-price">฿2,990</div>
                        <p class="product-description">หูฟังไร้สายคุณภาพเสียงดี เชื่อมต่อ Bluetooth ง่าย แบตเตอรี่ใช้ได้นาน</p>
                        <button class="btn-secondary" onclick="addToCart('หูฟังไร้สาย', 2990)">เพิ่มลงตะกร้า</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">⌚ รูปสินค้า</div>
                    <div class="product-info">
                        <h3 class="product-title">สมาร์ทวอทช์</h3>
                        <div class="product-price">฿8,500</div>
                        <p class="product-description">สมาร์ทวอทช์ติดตามสุขภาพ วัดอัตราการเต้นหัวใจ กันน้ำได้</p>
                        <button class="btn-secondary" onclick="addToCart('สมาร์ทวอทช์', 8500)">เพิ่มลงตะกร้า</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">📷 รูปสินค้า</div>
                    <div class="product-info">
                        <h3 class="product-title">กล้องดิจิตอล</h3>
                        <div class="product-price">฿22,000</div>
                        <p class="product-description">กล้องดิจิตอลระบบมิเรอร์เลส ถ่ายรูปคมชัด วิดีโอ 4K</p>
                        <button class="btn-secondary" onclick="addToCart('กล้องดิจิตอล', 22000)">เพิ่มลงตะกร้า</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🖥️ รูปสินค้า</div>
                    <div class="product-info">
                        <h3 class="product-title">จอมอนิเตอร์ 27"</h3>
                        <div class="product-price">฿12,900</div>
                        <p class="product-description">จอมอนิเตอร์ 27 นิ้ว ความละเอียด 4K สีสวยสมจริง</p>
                        <button class="btn-secondary" onclick="addToCart('จอมอนิเตอร์ 27', 12900)">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section">
        <div class="container">
            <h2 class="section-title">ทำไมต้องเลือกเรา</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🚚</div>
                    <h3>จัดส่งฟรี</h3>
                    <p>จัดส่งฟรีทั่วไทย สำหรับคำสั่งซื้อตั้งแต่ 1,000 บาท</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💳</div>
                    <h3>ชำระเงินง่าย</h3>
                    <p>รับชำระผ่านบัตรเครดิต โมบายแบงค์กิ้ง และเก็บเงินปลายทาง</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3>รับประกันคุณภาพ</h3>
                    <p>สินค้าทุกชิ้นผ่านการคัดสรรมาอย่างดี มีรับประกันสินค้า</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📞</div>
                    <h3>บริการหลังการขาย</h3>
                    <p>ทีมงานพร้อมให้บริการ 24/7 ตอบคำถามและแก้ไขปัญหา</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>เกี่ยวกับเรา</h3>
                    <p>ร้านค้าออนไลน์ชั้นนำ จำหน่ายสินค้าเทคโนโลยีคุณภาพสูง</p>
                </div>
                <div class="footer-section">
                    <h3>บริการลูกค้า</h3>
                    <p>โทร: 02-123-4567<br>
                    อีเมล: info@shop.com<br>
                    เวลาทำการ: 9:00-18:00 น.</p>
                </div>
                <div class="footer-section">
                    <h3>ติดตามเรา</h3>
                    <p>Facebook | Instagram | Line</p>
                </div>
            </div>
            <p>&copy; 2025 ร้านค้าออนไลน์. สงวนลิขสิทธิ์.</p>
        </div>
    </footer>

    <div id="cart-notification" class="cart-notification">
        เพิ่มสินค้าลงตะกร้าเรียบร้อยแล้ว!
    </div>

    <!-- Cart Modal -->
    <div id="cart-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>🛒 ตะกร้าสินค้า</h2>
                <button class="close-btn" onclick="closeCartModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div id="cart-items">
                    <!-- Cart items will be populated here -->
                </div>
                <div id="cart-total-section">
                    <!-- Cart total will be populated here -->
                </div>
                <div id="checkout-section" class="checkout-section" style="display: none;">
                    <h3>ข้อมูลการจัดส่ง</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">ชื่อ *</label>
                            <input type="text" id="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">นามสกุล *</label>
                            <input type="text" id="lastName" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">เบอร์โทรศัพท์ *</label>
                        <input type="tel" id="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">อีเมล</label>
                        <input type="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="address">ที่อยู่จัดส่ง *</label>
                        <textarea id="address" rows="3" required></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="province">จังหวัด *</label>
                            <select id="province" required>
                                <option value="">เลือกจังหวัด</option>
                                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                <option value="เชียงใหม่">เชียงใหม่</option>
                                <option value="ขอนแก่น">ขอนแก่น</option>
                                <option value="สงขลา">สงขลา</option>
                                <option value="อื่นๆ">อื่นๆ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="postalCode">รหัสไปรษณีย์ *</label>
                            <input type="text" id="postalCode" required>
                        </div>
                    </div>
                    
                    <h3>วิธีการชำระเงิน</h3>
                    <div class="payment-methods">
                        <div class="payment-method" onclick="selectPayment('credit')">
                            <input type="radio" name="payment" value="credit" id="credit">
                            <div class="payment-icon">💳</div>
                            <div>บัตรเครดิต</div>
                        </div>
                        <div class="payment-method" onclick="selectPayment('banking')">
                            <input type="radio" name="payment" value="banking" id="banking">
                            <div class="payment-icon">🏦</div>
                            <div>โอนธนาคาร</div>
                        </div>
                        <div class="payment-method" onclick="selectPayment('promptpay')">
                            <input type="radio" name="payment" value="promptpay" id="promptpay">
                            <div class="payment-icon">📱</div>
                            <div>พร้อมเพย์</div>
                        </div>
                        <div class="payment-method" onclick="selectPayment('cod')">
                            <input type="radio" name="payment" value="cod" id="cod">
                            <div class="payment-icon">💰</div>
                            <div>เก็บเงินปลายทาง</div>
                        </div>
                    </div>
                    
                    <button class="btn-checkout" onclick="processOrder()">สั่งซื้อสินค้า</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let cart = [];
        let cartCount = 0;
        let selectedPayment = null;

        function addToCart(productName, price) {
            // Check if product already exists in cart
            const existingItem = cart.find(item => item.name === productName);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    name: productName,
                    price: price,
                    quantity: 1
                });
            }
            
            updateCartCount();
            showNotification('เพิ่มสินค้าลงตะกร้าเรียบร้อยแล้ว!');
        }

        function updateCartCount() {
            cartCount = cart.reduce((total, item) => total + item.quantity, 0);
            document.getElementById('cart-count').textContent = cartCount;
        }

        function showNotification(message) {
            const notification = document.getElementById('cart-notification');
            notification.textContent = message;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        function showCart() {
            document.getElementById('cart-modal').style.display = 'block';
            renderCartItems();
        }

        function closeCartModal() {
            document.getElementById('cart-modal').style.display = 'none';
        }

        function renderCartItems() {
            const cartItemsContainer = document.getElementById('cart-items');
            const cartTotalSection = document.getElementById('cart-total-section');
            const checkoutSection = document.getElementById('checkout-section');
            
            if (cart.length === 0) {
                cartItemsContainer.innerHTML = `
                    <div class="empty-cart">
                        <div class="empty-cart-icon">🛒</div>
                        <h3>ตะกร้าของคุณว่างเปล่า</h3>
                        <p>เพิ่มสินค้าลงตะกร้าเพื่อเริ่มช้อปปิ้ง</p>
                    </div>
                `;
                cartTotalSection.innerHTML = '';
                checkoutSection.style.display = 'none';
                return;
            }

            // Render cart items
            let cartHTML = '';
            cart.forEach((item, index) => {
                cartHTML += `
                    <div class="cart-item">
                        <div class="item-info">
                            <div class="item-name">${item.name}</div>
                            <div class="item-price">฿${item.price.toLocaleString()}</div>
                        </div>
                        <div class="item-controls">
                            <div class="quantity-controls">
                                <button class="quantity-btn" onclick="decreaseQuantity(${index})" ${item.quantity <= 1 ? 'disabled' : ''}>-</button>
                                <span class="quantity">${item.quantity}</span>
                                <button class="quantity-btn" onclick="increaseQuantity(${index})">+</button>
                            </div>
                            <button class="remove-btn" onclick="removeFromCart(${index})">ลบ</button>
                        </div>
                    </div>
                `;
            });
            
            cartItemsContainer.innerHTML = cartHTML;
            
            // Calculate totals
            const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
            const shipping = subtotal >= 1000 ? 0 : 100;
            const total = subtotal + shipping;
            
            // Render totals
            cartTotalSection.innerHTML = `
                <div class="cart-total">
                    <div class="total-row">
                        <span>ยอดรวมสินค้า:</span>
                        <span>฿${subtotal.toLocaleString()}</span>
                    </div>
                    <div class="total-row">
                        <span>ค่าจัดส่ง:</span>
                        <span>${shipping === 0 ? 'ฟรี' : '฿' + shipping.toLocaleString()}</span>
                    </div>
                    <div class="total-row total-final">
                        <span>ยอดรวมทั้งสิ้น:</span>
                        <span>฿${total.toLocaleString()}</span>
                    </div>
                </div>
            `;
            
            checkoutSection.style.display = 'block';
        }

        function increaseQuantity(index) {
            cart[index].quantity += 1;
            updateCartCount();
            renderCartItems();
        }

        function decreaseQuantity(index) {
            if (cart[index].quantity > 1) {
                cart[index].quantity -= 1;
                updateCartCount();
                renderCartItems();
            }
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCartCount();
            renderCartItems();
            showNotification('ลบสินค้าออกจากตะกร้าแล้ว');
        }

        function selectPayment(method) {
            selectedPayment = method;
            
            // Remove selected class from all payment methods
            document.querySelectorAll('.payment-method').forEach(el => {
                el.classList.remove('selected');
            });
            
            // Add selected class to clicked method
            document.querySelector(`[onclick="selectPayment('${method}')"]`).classList.add('selected');
            
            // Check the radio button
            document.getElementById(method).checked = true;
        }

        function validateForm() {
            const firstName = document.getElementById('firstName').value.trim();
            const lastName = document.getElementById('lastName').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const address = document.getElementById('address').value.trim();
            const province = document.getElementById('province').value;
            const postalCode = document.getElementById('postalCode').value.trim();
            
            if (!firstName || !lastName || !phone || !address || !province || !postalCode) {
                alert('กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน');
                return false;
            }
            
            if (!selectedPayment) {
                alert('กรุณาเลือกวิธีการชำระเงิน');
                return false;
            }
            
            return true;
        }

        function processOrder() {
            if (!validateForm()) return;
            
            const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
            const shipping = subtotal >= 1000 ? 0 : 100;
            const total = subtotal + shipping;
            
            const orderData = {
                items: cart,
                customer: {
                    firstName: document.getElementById('firstName').value,
                    lastName: document.getElementById('lastName').value,
                    phone: document.getElementById('phone').value,
                    email: document.getElementById('email').value,
                    address: document.getElementById('address').value,
                    province: document.getElementById('province').value,
                    postalCode: document.getElementById('postalCode').value
                },
                payment: selectedPayment,
                subtotal: subtotal,
                shipping: shipping,
                total: total,
                orderDate: new Date().toLocaleString('th-TH')
            };
            
            // Simulate order processing
            const checkoutBtn = document.querySelector('.btn-checkout');
            checkoutBtn.textContent = 'กำลังดำเนินการ...';
            checkoutBtn.disabled = true;
            
            setTimeout(() => {
                showOrderConfirmation(orderData);
                
                // Reset cart
                cart = [];
                cartCount = 0;
                selectedPayment = null;
                updateCartCount();
                closeCartModal();
                
                // Reset form
                document.querySelectorAll('input, select, textarea').forEach(el => el.value = '');
                document.querySelectorAll('.payment-method').forEach(el => el.classList.remove('selected'));
                
                checkoutBtn.textContent = 'สั่งซื้อสินค้า';
                checkoutBtn.disabled = false;
            }, 2000);
        }

        function showOrderConfirmation(orderData) {
            const paymentText = {
                'credit': 'บัตรเครดิต',
                'banking': 'โอนธนาคาร',
                'promptpay': 'พร้อมเพย์',
                'cod': 'เก็บเงินปลายทาง'
            };
            
            let confirmationMsg = `🎉 สั่งซื้อสำเร็จ!\n\n`;
            confirmationMsg += `เลขที่คำสั่งซื้อ: #${Date.now()}\n`;
            confirmationMsg += `ชื่อผู้สั่ง: ${orderData.customer.firstName} ${orderData.customer.lastName}\n`;
            confirmationMsg += `เบอร์โทร: ${orderData.customer.phone}\n`;
            confirmationMsg += `วิธีชำระเงิน: ${paymentText[orderData.payment]}\n`;
            confirmationMsg += `ยอดรวม: ฿${orderData.total.toLocaleString()}\n\n`;
            
            if (orderData.payment === 'banking') {
                confirmationMsg += `📝 ข้อมูลการโอนเงิน:\n`;
                confirmationMsg += `ธนาคารกสิกรไทย\n`;
                confirmationMsg += `เลขบัญชี: 123-4-56789-0\n`;
                confirmationMsg += `ชื่อบัญชี: ร้านค้าออนไลน์\n\n`;
            } else if (orderData.payment === 'promptpay') {
                confirmationMsg += `📱 พร้อมเพย์: 02-123-4567\n\n`;
            }
            
            confirmationMsg += `📦 สินค้าจะจัดส่งภายใน 2-3 วันทำการ\n`;
            confirmationMsg += `ขอบคุณที่ใช้บริการ!`;
            
            alert(confirmationMsg);
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('cart-modal');
            if (event.target === modal) {
                closeCartModal();
            }
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>