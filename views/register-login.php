    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Delicious pizzas and waffles takeout from Puchi coffee shop">
    <meta name="ketwords" content="pizza, waffles, coffee, tea, take out, cafe, Puchi">
    <link rel="stylesheet" href="css/styles.css">
    <title>Puchi</title>
    <style>
        footer {
            position: fixed;
            bottom: 0;
        }
    </style>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register or Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <h1>Pochi カフェ</h1>
        <button onclick="scrollToTop()">Go to Top</button>
    </header>
    <main>
        <div class="auth-buttons">
            <button onclick="window.location.href='register.html'">Register a New Member</button>
            <button onclick="window.location.href='login.html'">Login</button>
        </div>
    </main>

    <script>
        function scrollToTop() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        }
    </script>
</body>
</html>
