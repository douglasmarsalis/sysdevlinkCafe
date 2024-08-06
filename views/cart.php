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
        <div class="login-header">
            <a class="btn" href="takeout-menu.php" onclick="scrollToTop()">Menu</a>
            <h3 class="top-title">Cart</h3>
        </div>
    </header>
    <main>
    <div class="cart-container">
        <div class="cart-item">
            <img src="<?php echo htmlspecialchars($imgSrc); ?>" alt="Item Image">
            <p class="item-name"><?php echo htmlspecialchars($itemName); ?></p>
            <p class="item-price"><?php echo htmlspecialchars($itemPrice); ?></p>
        </div>
        <p>※ワッフルは箱代 +\100 いただきます。</p>
        <button class="item-num-btn">Num Item</button>
    </div>
    </main>
        <footer class="footer">
            <p class="company-info">&copy; 2024 SysDevLink. All rights reserved.</p>
        </footer>

        <script src="../assets/javascript/takeout-menu.js"></script>
</body>
</html>