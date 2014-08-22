<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="open.css">
        <title></title>
    </head>
    <body>
        <a href="main.php">&#8592 Back</a>
        <form action="openNewB.php" method="post">
        Name:<br>
            <textarea type="text" name="name" cols="50" rows="1" value="New WordDoc" maxlength="50" required></textarea><br>
        Definition:<br>
            <textarea name="def" cols="50" rows="5" wrap="soft"></textarea><br>
        <input type="submit" value="Create">
        </form>
    </body>
</html>
