
<?php

echo "Current Server Time: " . date('Y-m-d H:i:s');
?>


<form action="handle-data.php" method="POST">
    <label>
        Name: 
        <input type="text" name="username" required>
    </label>
    <br><br>

    <label>
        Favorite Color:
        <input type="color" name="color" required>
    </label>
    <br><br>

    <button type="submit">Submit</button>
</form>

