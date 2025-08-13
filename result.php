<?php
session_start();

$name='Guest';
if (isset($_GET['name'])) {
    $name = $_GET['name'] ?: 'Guest';

    echo "<h1>Hello, {$name}!</h1>";
    
} else {
    $name = $_SESSION['username'] ?? 'Guest';
    $color = $_SESSION['color'] ?? 'black';

    echo "<h1 style='color: {$color}'>Hello, {$name}!</h1>";

    session_destroy();
}
