<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="プチコーヒーショップの美味しいピザとワッフルのテイクアウト">
    <meta name="ketwords" content="ピザ、ワッフル、コーヒー、紅茶、テイクアウト、カフェ、プチ">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Puchi カフェ</title>
    <style>
        footer {
            position: fixed;
            bottom: 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Puchi カフェ</h1>
        <button onclick="window.location.href='../index.php'">Home</button>
    </header>
    <main>
        <h2>Register New Member</h2>
        <p class="register-info">Used as an ID for member login authentification.</p>
        <p class="register-info">Please enter your mobile number.</p>
        <p class="register-info">We will send you a short email for membership registration.</p>

        <form id="registrationForm">
            <label for="phone">Phone Number:</label> <br />
            <input type="tel" id="phoneNumber" placeholder="Enter your cell phone number" required> <br /><br />

            <label for="authCode">Confirm Number:</label> <br />
            <input type="tel" id="authCode" placeholder="Confirm your cell phone number" required> <br /><br />

            <button type="button" onclick="register()">Send Membership Registration Email</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 SysDevLink. All rights reserved.</p>
    </footer>
</body>
</html>
