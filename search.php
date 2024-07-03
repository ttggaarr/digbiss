<?php
$query = $_GET['query'] ?? '';

$recipes = [
    'Bubur' => 'bubur.php',
    'Laksa' => 'laksa.php',
    'Salat' => 'salat.php'
];

$results = [];
foreach ($recipes as $name => $link) {
    if (stripos($name, $query) !== false) {
        $results[$name] = $link;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - Go To Eat</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="header">
    <div>
        <a href="index.php">Dashboard</a>
        <a href="menu.php">Menu</a>
        <a href="about.php">About</a>
    </div>
    <form class="search-form" action="search.php" method="GET">
        <input type="text" name="query" placeholder="Search" value="<?= htmlspecialchars($query) ?>">
        <button type="submit">Search</button>
    </form>
</div>

<div class="search-results">
    <h1>Search Results for "<?= htmlspecialchars($query) ?>"</h1>
    <?php if (empty($results)): ?>
        <p>No results found.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($results as $name => $link): ?>
                <li><a href="<?= htmlspecialchars($link) ?>"><?= htmlspecialchars($name) ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>

</body>
</html>
