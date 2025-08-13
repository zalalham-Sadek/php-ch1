<?php

session_start();

$name = 'Guest';

// Check if GET parameter "name" is provided
// GET is suitable here because this data can be shared via URL
if (isset($_GET['name'])) {
    $name = $_GET['name'] ?: 'Guest';

    echo '<h1>Hello, ' . htmlspecialchars($name) . '!</h1>';
    
} else {
    // Retrieve data from the session (set via POST previously)
    $name = $_SESSION['username'] ?? 'Guest';
    $color = $_SESSION['color'] ?? 'black';

    echo '<h1 style="color: ' . htmlspecialchars($color) . '">Hello, ' . htmlspecialchars($name) . '!</h1>';

    // Clear session after displaying the result
    session_destroy();
}
