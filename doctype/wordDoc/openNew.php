<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <a href="main.php">Back</a>
        <form action="openNewB.php" method="post">
        Name:<br>
            <input type="text" name="name" value="New WordDoc" maxlength="50" required><br>
        Definition:<br>
            <textarea name="def" cols="50" rows="5" wrap="soft"></textarea><br>
        <input type="submit" value="Create">
        </form>
    </body>
</html>
