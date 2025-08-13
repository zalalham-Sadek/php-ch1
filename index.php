<?php

// show the server time 
echo 'Current Server Time: ' . date('Y-m-d H:i:s');
?>

<!-- Data entry form using POST
We use POST here because the data belongs to the user and may be sensitive, 
and we do not want it to appear in the page URL like it would with GET -->

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
