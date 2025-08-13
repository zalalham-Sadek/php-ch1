<?php


// Show the server time
// This uses PHP to dynamically print the current server time
$serverTime = date('Y-m-d H:i:s');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>name , color</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f0f4ff, #d6e0f0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 320px;
        }

        .form-container h1 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="color"] {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        input[type="color"]{
            padding: 0;
        }

        button {
            background-color: #4a90e2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #357ab7;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Current Server Time: <?= htmlspecialchars($serverTime) ?></h1>

        <!-- Data entry form using POST
        We use POST here because the data belongs to the user and may be sensitive,
        and we do not want it to appear in the page URL like it would with GET -->
        <h2>Choose Your Favorite Color</h2>
        <form action="handle-data.php" method="POST">
            <label for="username">Name:</label>
            <input id="username" type="text" name="username" required>

            <label for="color">Favorite Color:</label>
            <input id="color" type="color" name="color" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
