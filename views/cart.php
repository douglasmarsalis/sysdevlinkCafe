<?php
// Get the item details from the URL parameters
$imgSrc = isset($_GET['imgSrc']) ? urldecode($_GET['imgSrc']) : '';
$itemName = isset($_GET['itemName']) ? urldecode($_GET['itemName']) : '';
$itemPrice = isset($_GET['itemPrice']) ? urldecode($_GET['itemPrice']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="プチコーヒーショップの美味しいピザとワッフルのテイクアウト">
    <meta name="ketwords" content="ピザ、ワッフル、コーヒー、紅茶、テイクアウト、カフェ、プチ">
    <link rel="stylesheet" href="../assets/css/cart.css">
    <title>プチ珈琲館</title>
</head>
<body>
    <header>
        <div class="dropdown">
            <button class="dropbtn"><img src="/assets/images/dropdown.png" alt="Dropdown icon"></button>
            <div class="dropdown-content">
                <a href="/">ホーム</a>
                <a href="takeout-menu.php">テイクアウトメニュー</a>
 
            </div>
        </div>
        <h3 class="top-title">注文情報入力</h3>
    </header>
    <main>
    <div class="cart-message">
        <p><span>商品の受取日時をお選びください</span></p>
    </div>

    <div class="order-options">
        <label>
            <input type="radio" name="delivery-option" value="asap"> 最短で受取
        </label>
        <label>
            <input type="radio" name="delivery-option" value="specify"> 日時指定をする
        </label>
        <div class="specify-datetime">
            <select name="date" disabled>
                <option value="">Select Date</option>
                <option value="2024-08-10">August 10, 2024</option>
                <option value="2024-08-11">August 11, 2024</option>
                <option value="2024-08-12">August 12, 2024</option>
            </select>
            <select name="time" disabled>
                <option value="">Select Time</option>
                <option value="12:00">12:00 PM</option>
                <option value="13:00">1:00 PM</option>
                <option value="14:00">2:00 PM</option>
            </select>
        </div>
    </div>

    <div class="order-summary">
        <p>Ordered Items:</p>
        <!-- Add order items from takeout-menu.php here -->
    </div>

    <div class="payment-details">
        <div>
            <span>Payment Amount:</span>
            <span>Total Amount:</span>
        </div>
        <div style="text-align: right;">
            <span>$30.00</span>
            <span>Tax (10%):</span>
            <span>$3.00</span>
        </div>
    </div>

    <div class="confirm-button">
        <a href="confirm.php"><button>Confirm Order</button></a>
    </div>
    </main>
        <footer class="footer">
            <p class="company-info">&copy; 2024 SysDevLink. All rights reserved.</p>
        </footer>

        <script src="../assets/javascript/takeout-menu.js"></script>
</body>
</html>