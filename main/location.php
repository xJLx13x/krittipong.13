<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจองโซน</title>
    <link rel="stylesheet" href="style.css">
    <body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">🍽️ ร้านอาหารของเรา</div>
                <ul>
                    <li><a href="dashboard.php">หน้าหลัก</a></li>
                    <!-- <li><a href="shop.php">สินค้า</a></li> -->
                    <li><a href="location.php">จองโซน</a></li>
                    <li><a href="../logout.php">logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
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
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(45deg,rgb(103, 67, 233),rgb(48, 60, 228));
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .tables-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 40px;
            background: #f8f9fa;
        }

        .table-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 3px solid transparent;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .table-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            border-color: #667eea;
        }

        .table-card.available {
            border-color: #10ac84;
        }

        .table-card.occupied {
            background: #f1f2f6;
            border-color: #ff6b6b;
            cursor: not-allowed;
            opacity: 0.7;
        }

        .table-number {
            font-size: 2em;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .table-status {
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.9em;
        }

        .status-available {
            background: #d4edda;
            color: #155724;
        }

        .status-occupied {
            background: #f8d7da;
            color: #721c24;
        }

        .table-details {
            margin-top: 15px;
            color: #666;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            backdrop-filter: blur(5px);
            z-index: 1000;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 40px;
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 25px 50px rgba(0,0,0,0.3);
        }

        .modal-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .modal-title {
            font-size: 1.8em;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        .price-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            border-left: 4px solid #667eea;
        }

        .price-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .total-price {
            font-size: 1.2em;
            font-weight: bold;
            color: #e74c3c;
            border-top: 2px solid #eee;
            padding-top: 10px;
        }

        .payment-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .payment-method {
            padding: 15px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .payment-method:hover {
            border-color: #667eea;
            background: #f8f9fa;
        }

        .payment-method.selected {
            border-color: #667eea;
            background: #e3f2fd;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .btn-primary {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 28px;
            cursor: pointer;
            color: #999;
        }

        .close:hover {
            color: #666;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            border-left: 4px solid #28a745;
        }

        @media (max-width: 768px) {
            .tables-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 15px;
                padding: 20px;
            }
            
            .modal-content {
                width: 95%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🍽️ ระบบจองโซน</h1>
            <p>เลือกโซนที่คุณต้องการจองและกรอกข้อมูล</p>
            <img src="aa.jpg" width="700" height="400">


        </div>

        <div class="tables-grid" id="tablesGrid">
            <!-- Tables will be generated by JavaScript -->
        </div>
    </div>

    <!-- Booking Modal -->
    <div id="bookingModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="modal-header">
                <h2 class="modal-title">จองโต๊ะ #<span id="selectedTable"></span></h2>
                <div id="tableInfo"></div>
            </div>

            <form id="bookingForm">
                <div class="form-group">
                    <label for="customerName">ชื่อ-นามสกุล *</label>
                    <input type="text" id="customerName" name="customerName" required>
                </div>

                <div class="form-group">
                    <label for="phone">เบอร์โทรศัพท์ *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="email">อีเมล</label>
                    <input type="email" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="bookingDate">วันที่จอง *</label>
                    <input type="date" id="bookingDate" name="bookingDate" required>
                </div>

                <div class="form-group">
                    <label for="bookingTime">เวลาที่จอง *</label>
                    <select id="bookingTime" name="bookingTime" required>
                        <option value="">เลือกเวลา</option>
                        <option value="11:00">11:00 น.</option>
                        <option value="12:00">12:00 น.</option>
                        <option value="13:00">13:00 น.</option>
                        <option value="14:00">14:00 น.</option>
                        <option value="17:00">17:00 น.</option>
                        <option value="18:00">18:00 น.</option>
                        <option value="19:00">19:00 น.</option>
                        <option value="20:00">20:00 น.</option>
                        <option value="21:00">21:00 น.</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="guests">จำนวนลูกค้า *</label>
                    <select id="guests" name="guests" required onchange="calculateTotal()">
                        <option value="">เลือกจำนวนลูกค้า</option>
                        <option value="1">1 คน</option>
                        <option value="2">2 คน</option>
                        <option value="3">3 คน</option>
                        <option value="4">4 คน</option>
                        <option value="5">5 คน</option>
                        <option value="6">6 คน</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="duration">ระยะเวลาการใช้งาน *</label>
                    <select id="duration" name="duration" required onchange="calculateTotal()">
                        <option value="">เลือกระยะเวลา</option>
                        <option value="1">1 ชั่วโมง</option>
                        <option value="2">2 ชั่วโมง</option>
                        <option value="3">3 ชั่วโมง</option>
                        <option value="4">4 ชั่วโมง</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="specialRequests">ข้อความพิเศษ</label>
                    <textarea id="specialRequests" name="specialRequests" rows="3" placeholder="ระบุข้อความพิเศษหรือความต้องการอื่นๆ"></textarea>
                </div>

                <div class="price-info" id="priceInfo" style="display: none;">
                    <h3>รายละเอียดการชำระเงิน</h3>
                    <div class="price-item">
                        <span>ค่าจองโต๊ะ:</span>
                        <span id="tablePrice">0 บาท</span>
                    </div>
                    <div class="price-item">
                        <span>ค่าบริการ (10%):</span>
                        <span id="serviceCharge">0 บาท</span>
                    </div>
                    <div class="price-item total-price">
                        <span>ยอดรวม:</span>
                        <span id="totalPrice">0 บาท</span>
                    </div>
                </div>

                <div class="form-group">
                    <label>เลือกวิธีการชำระเงิน *</label>
                    <div class="payment-methods">
                        <div class="payment-method" onclick="selectPayment('cash')">
                            <div>💵</div>
                            <div>เงินสด</div>
                        </div>
                        <div class="payment-method" onclick="selectPayment('card')">
                            <div>💳</div>
                            <div>บัตรเครดิต</div>
                        </div>
                        <div class="payment-method" onclick="selectPayment('transfer')">
                            <div>🏦</div>
                            <div>โอนเงิน</div>
                        </div>
                        <div class="payment-method" onclick="selectPayment('qr')">
                            <div>📱</div>
                            <div>QR Code</div>
                        </div>
                    </div>
                    <input type="hidden" id="paymentMethod" name="paymentMethod" required>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">ยืนยันการจอง</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Table data
        const tables = [
            { id: 1, seats: 2, price: 200, status: 'available' },
            { id: 2, seats: 4, price: 300, status: 'available' },
            { id: 3, seats: 2, price: 200, status: 'occupied' },
            { id: 4, seats: 6, price: 400, status: 'available' },
            { id: 5, seats: 4, price: 300, status: 'available' },
            { id: 6, seats: 2, price: 200, status: 'occupied' },
            { id: 7, seats: 8, price: 500, status: 'available' },
            { id: 8, seats: 4, price: 300, status: 'available' },
            { id: 9, seats: 2, price: 200, status: 'available' },
            { id: 10, seats: 6, price: 400, status: 'occupied' },
            { id: 11, seats: 4, price: 300, status: 'available' }
        ];

        let currentTable = null;
        let selectedPaymentMethod = null;

        // Initialize tables
        function initializeTables() {
            const tablesGrid = document.getElementById('tablesGrid');
            tablesGrid.innerHTML = '';

            tables.forEach(table => {
                const tableCard = document.createElement('div');
                tableCard.className = `table-card ${table.status}`;
                tableCard.onclick = () => table.status === 'available' ? selectTable(table) : null;

                tableCard.innerHTML = `
                    <div class="table-number">โต๊ะ ${table.id}</div>
                    <div class="table-status ${table.status === 'available' ? 'status-available' : 'status-occupied'}">
                        ${table.status === 'available' ? '✅ ว่าง' : '❌ ไม่ว่าง'}
                    </div>
                    <div class="table-details">
                        <div>🪑 ${table.seats} ที่นั่ง</div>
                        <div>💰 ${table.price} บาท/ชั่วโมง</div>
                    </div>
                `;

                tablesGrid.appendChild(tableCard);
            });
        }

        // Select table
        function selectTable(table) {
            currentTable = table;
            document.getElementById('selectedTable').textContent = table.id;
            document.getElementById('tableInfo').innerHTML = `
                <p>🪑 ${table.seats} ที่นั่ง | 💰 ${table.price} บาท/ชั่วโมง</p>
            `;
            document.getElementById('bookingModal').style.display = 'block';
            
            // Set minimum date to today
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('bookingDate').min = today;
        }

        // Close modal
        function closeModal() {
            document.getElementById('bookingModal').style.display = 'none';
            document.getElementById('bookingForm').reset();
            document.getElementById('priceInfo').style.display = 'none';
            selectedPaymentMethod = null;
            // Remove selected class from payment methods
            document.querySelectorAll('.payment-method').forEach(method => {
                method.classList.remove('selected');
            });
        }

        // Select payment method
        function selectPayment(method) {
            selectedPaymentMethod = method;
            document.getElementById('paymentMethod').value = method;
            
            // Update UI
            document.querySelectorAll('.payment-method').forEach(paymentMethod => {
                paymentMethod.classList.remove('selected');
            });
            event.target.closest('.payment-method').classList.add('selected');
        }

        // Calculate total price
        function calculateTotal() {
            const guests = parseInt(document.getElementById('guests').value);
            const duration = parseInt(document.getElementById('duration').value);
            
            if (guests && duration && currentTable) {
                const basePrice = currentTable.price * duration;
                const serviceCharge = Math.round(basePrice * 0.1);
                const total = basePrice + serviceCharge;
                
                document.getElementById('tablePrice').textContent = basePrice + ' บาท';
                document.getElementById('serviceCharge').textContent = serviceCharge + ' บาท';
                document.getElementById('totalPrice').textContent = total + ' บาท';
                document.getElementById('priceInfo').style.display = 'block';
            }
        }

        // Handle form submission
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!selectedPaymentMethod) {
                alert('กรุณาเลือกวิธีการชำระเงิน');
                return;
            }

            // Collect form data
            const formData = new FormData(this);
            const bookingData = {
                tableId: currentTable.id,
                customerName: formData.get('customerName'),
                phone: formData.get('phone'),
                email: formData.get('email'),
                bookingDate: formData.get('bookingDate'),
                bookingTime: formData.get('bookingTime'),
                guests: formData.get('guests'),
                duration: formData.get('duration'),
                specialRequests: formData.get('specialRequests'),
                paymentMethod: selectedPaymentMethod,
                totalPrice: document.getElementById('totalPrice').textContent
            };

            // Simulate booking process
            processBooking(bookingData);
        });

        // Process booking
        function processBooking(bookingData) {
            // Show loading or processing state
            const submitBtn = document.querySelector('.btn-primary');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'กำลังดำเนินการ...';
            submitBtn.disabled = true;

            // Simulate API call
            setTimeout(() => {
                // Update table status
                const tableIndex = tables.findIndex(t => t.id === currentTable.id);
                tables[tableIndex].status = 'occupied';
                
                // Show success message
                alert('✅ การจองสำเร็จ!\n\nหมายเลขการจอง: BK' + Date.now().toString().slice(-6) + '\nโต๊ะ: ' + bookingData.tableId + '\nลูกค้า: ' + bookingData.customerName + '\nวันที่: ' + bookingData.bookingDate + '\nเวลา: ' + bookingData.bookingTime + '\nจำนวนลูกค้า: ' + bookingData.guests + ' คน\nระยะเวลา: ' + bookingData.duration + ' ชั่วโมง\nยอดรวม: ' + bookingData.totalPrice);
                
                // Reset form and close modal
                closeModal();
                
                // Refresh tables display
                initializeTables();
                
                // Reset button
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                
            }, 2000);
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('bookingModal');
            if (event.target === modal) {
                closeModal();
            }
        }

        // Initialize on page load
        window.addEventListener('load', initializeTables);
    </script>
</body>
</html>