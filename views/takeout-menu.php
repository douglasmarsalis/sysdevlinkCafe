<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="プチコーヒーショップの美味しいピザとワッフルのテイクアウト">
    <meta name="ketwords" content="ピザ、ワッフル、コーヒー、紅茶、テイクアウト、カフェ、プチ">
    <link rel="stylesheet" href="../assets/css/takeout-menu.css">
    <title>プチ珈琲館</title>
</head>
<body>
    <header>
        <div class="dropdown">
            <button class="dropbtn"><img src="/assets/images/dropdown.png" alt="Dropdown icon"></button>
            <div class="dropdown-content">
                <a href="/">ホーム</a>
                <a href="register-login.php">プチ珈琲館</a>
                <a href="login.php">ログイン</a>
            </div>
        </div>
        <div class="top-title-container">
        <h3 class="top-title">プチ珈琲館</h3>
        <h3 class="top-title">テイクアウトメニュー</h3>
        </div>
        <div class="basket" onclick="goToPage()">
            <img src="/assets/images/cart.png" alt="Basket Icon">
            <span class="cart-indicator"></span>
        </div>
    </header>

    <main>
        <div class="login-message">
            <p>ログインしました。</p>
        </div>

        <section class="menu-section">
            <h2>* ワッフル</h2>
            <div class="items-container">
                <div class="item-card">
                    <img src="/assets/images/DSC_0034.JPG" alt="Plain Waffle Image">
                    <p class="item-name">プレーンワッフル</p>
                    <p class="item-price">¥770</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/sweets_001.jpg" alt="Strawberry Waffle Image">
                    <p class="item-name">ストロベリーワッフル</p>
                    <p class="item-price">¥770</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/DSC00780 のコピー.jpg" alt="Cream Waffle Image">
                    <p class="item-name">クリームワッフル</p>
                    <p class="item-price">¥770</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/sweets_002.jpg" alt="Blueberry Waffle Image">
                    <p class="item-name">ブルーベリーワッフル</p>
                    <p class="item-price">¥880</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/DSC00780 のコピー.jpg" alt="Caramel Waffle Image">
                    <p class="item-name">キャラメルワッフル</p>
                    <p class="item-price">¥880</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/DSC_0030.jpg" alt="Chocolate Waffle Image">
                    <p class="item-name">チョコレートワッフル</p>
                    <p class="item-price">¥880</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/DSC_0034.JPG" alt="Melon Waffle Image">
                    <p class="item-name">マロンワッフル</p>
                    <p class="item-price">¥880</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/DSC_0038.JPG" alt="Ogura Waffle Image">
                    <p class="item-name">小倉ワッフル</p>
                    <p class="item-price">¥990</p>
                </div>
                <!-- Add more waffle items here -->
            </div>
        </section>

        <section class="menu-section">
            <h2>* ピザ</h2>
            <img src="/assets/images/bn02.png" alt="Pizza heading">
            <div class="items-container">
                <div class="item-card">
                    <img src="/assets/images/img_001.jpg" alt="Mix Pizza Image">
                    <p class="item-name">ミックスピザ</p>
                    <p class="item-price">¥1320</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/img_001.jpg" alt="Apara-Bacon Pizza Image">
                    <p class="item-name">アスパラベーコン</p>
                    <p class="item-price">¥1320</p>
                </div>
               <div class="item-card">
                    <img src="/assets/images/img_001.jpg" alt="Margaritta Pizza Image">
                    <p class="item-name">マルゲリータ</p>
                    <p class="item-price">¥1320</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/img_001.jpg" alt="Seafood Mix Pizza Image">
                    <p class="item-name">シーフードミックス</p>
                    <p class="item-price">¥1320</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/img_001.jpg" alt="Bacon-Salami Pizza Image">
                    <p class="item-name">ベーコンサラミ</p>
                    <p class="item-price">¥1320</p>
                </div>
                <!-- Add more pizza items here -->
            </div>
        </section>

        <section class="menu-section">
            <h2>* コーヒ</h2>
            <img src="/assets/images/bn03.png" alt="Coffee heading">
            <div class="items-container">
                <div class="item-card">
                    <img src="/assets/images/IMG_2164.PNG" alt="Coffee beans image">
                    <p class="item-name">ブレンド</p>
                    <p class="item-price">¥300</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/IMG_2164.PNG" alt="ACoffee beans image">
                    <p class="item-name">ブレンドストロング</p>
                    <p class="item-price">¥350</p>
                </div>
               <div class="item-card">
                    <img src="/assets/images/IMG_2164.PNG" alt="Coffee beans image">
                    <p class="item-name">アメリカン</p>
                    <p class="item-price">¥400</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/IMG_2164.PNG" alt="Coffee beans image">
                    <p class="item-name">ブルマンブレンド</p>
                    <p class="item-price">¥250</p>
                </div>
                <div class="item-card">
                    <img src="/assets/images/IMG_2164.PNG" alt="Coffee beans image">
                    <p class="item-name">ブルーマウンテン>No,1</p>
                    <p class="item-price">¥300</p>
                </div>
                <!-- Add more coffee items here -->
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 SysDevLink. All rights reserved.</p>
    </footer>

    <script>

        // Function for basket - click to go to page
        function goToPage() {
            window.location.href="cart.php";
        }

        // Function to update the cart indicator
        function updateCartIndicator() {
            var cartIndicator = document.querySelector('.cart-indicator');
            var cartItemCount = getCartItemCount(); 

            if (cartItemCount > 0) {
                cartIndicator.classList.add('active');
            } else {
                cartIndicator.classList.remove('active');
            }
        }
        function getCartItemCount() {
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            return cart.length;
        }
        document.addEventListener('DOMContentLoaded', updateCartIndicator);

    </script>
</body>
</html>