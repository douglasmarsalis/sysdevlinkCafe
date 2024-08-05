    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="プチコーヒーショップの美味しいピザとワッフルのテイクアウト">
    <meta name="ketwords" content="ピザ、ワッフル、コーヒー、紅茶、テイクアウト、カフェ、プチ">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>プチ珈琲館</title>
</head>
<body>
    <header>
        <div class="login-header">
            <a class="top-btn" href="register-login.php" onclick="scrollToTop()">TOP</a>
            <h3 class="top-title">ログイン</h3>
        </div>
    </header>
    <main>
        <p class="login-message">携帯番号とパスワードを入力してください。</p>
        <div class="login-container">
            <form action="takeout-menu.php" method="POST">
                <div class="form-group">
                    <label for="phone">携帯番号<span style="color: red;">*</span></label>
                    <input type="text" id="phone" name="phone" placeholder="oooooooOooO" required>
                </div><br />
                <div class="form-group">
                    <label for="password">パスワード<span style="color: red;">*</span></label>
                    <input type="password" id="password" name="password" placeholder="パスワード" required>
                </div><br />
                <button type="submit" class="login-btn" href="takeout-menu.php">ログイン</button>
            </form>
        </div>
    </main>
        <footer class="footer">
            <p class="company-info">&copy; 2024 SysDevLink. All rights reserved.</p>
        </footer>

        <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</body>
</html>