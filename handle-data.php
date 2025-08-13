<?php

session_start();

// Retrieve data from the form using POST
$name = $_POST['username'] ?? '';
$color = $_POST['color'] ?? '';

// Store data in session
$_SESSION['username'] = $name;
$_SESSION['color'] = $color;

// Redirect to the result page using HTTP status code 303
// POST + Redirect prevents duplicate submissions if the user refreshes the page
header('Location: result.php', true, 303);
exit;
