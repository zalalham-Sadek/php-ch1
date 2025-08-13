<?php

session_start();
$name = $_SESSION['username'] ?? 'Guest';
$color = $_SESSION['color'] ?? 'black';

echo "<h1 style='color: {$color}'>Hello, {$name}!</h1>";

session_destroy();
