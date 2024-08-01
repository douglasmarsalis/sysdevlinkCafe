<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="プチコーヒーショップの美味しいピザとワッフルのテイクアウト">
    <meta name="ketwords" content="ピザ、ワッフル、コーヒー、紅茶、テイクアウト、カフェ、プチ">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Puchi カフェ</title>
</head>
<body>
    <header>
        <a class="top-btn" href="register-login.php" onclick="scrollToTop()">Top</a>
        <h3 class="register-title">会員登録メールの送信</h3>
    </header>
    <main>
        <p class="register-info">会員ログイン認証時のIDとして利用する、</p>
        <p class="register-info">携帯番号を入力してください。</p>
        <p class="register-info">会員登録用ショートメールをお送りします。</p>

        <form id="registrationForm">
            <label for="phone">携帯番号</label>
            <input type="tel" id="phoneNumber" placeholder="oooooooOooO" required> <br /><br />

            <label for="authCode">確認用携帯番号</label>
            <input type="tel" id="authCode" placeholder="oooooooOooO" required> <br />

            <p class="register-info">確認のため、同じ携帯番号を入力してください。</p>

            <button type="button" onclick="register()">会員登録用メールを送信する</button>
        </form>
    </main>
        <footer>
            <p style="position: fixed; bottom: 0; text-align: center">&copy; 2024 SysDevLink. All rights reserved.</p>
        </footer>
    <script>
        function scrollToTop() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        }
    </script>
</body>
</html>
