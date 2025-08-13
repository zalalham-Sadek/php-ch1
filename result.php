<?php

declare(strict_types=1);

session_start();

$name = 'Guest';
$color = 'black';

// Check if GET parameter "name" is provided
// GET is suitable here because this data can be shared via URL
if (isset($_GET['name'])) {
    $name = $_GET['name'] ?: 'Guest';
} else {
    // Retrieve data from the session (set via POST previously)
    $name = $_SESSION['username'] ?? 'Guest';
    $color = $_SESSION['color'] ?? 'black';

    // Clear session after displaying the result
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greeting</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #f0f4ff, #d6e0f0);
            font-family: Arial, sans-serif;
            margin: 0;
        }

        h1 {
            font-size: 2.5rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="color: <?= htmlspecialchars($color) ?>">
        Hello, <?= htmlspecialchars($name) ?>!
    </h1>
</body>
</html>
