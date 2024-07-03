<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go To Eat</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function menuButtonClick('menu.php') {
            window.location.href = url;
        }
    </script>
</head>
<body>
</head>
<body>

<div class="header">
    <div>
        <a href="index.php">Dashboard</a>
        <a href="menu.php">Menu</a>
        <a href="about.php">About</a>
    </div>
    <form class="search-form" action="search.php" method="GET">
        <input type="text" name="query" placeholder="Search">
        <button type="submit">Search</button>
    </form>
</div>

<div class="container">
    <img src="landingpage makanan/1.png" alt="Cooking Image">
    <div class="centered">
        <div class="title">GO TO EAT</div>
        <div class="subtitle">Temukan resep yang kamu mau!!!</div>
        <button class="menu-button" onclick="menuButtonClick('menu.php')">Menu</button>
    </div>
</div>

</body>
</html>
