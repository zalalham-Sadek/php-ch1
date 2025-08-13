<?php

$name = $_POST['username'] ?? '';
$color = $_POST['color'] ?? '';

session_start();
$_SESSION['username'] = $name;
$_SESSION['color'] = $color;

header("Location: result.php", true, 303);
exit;
?>