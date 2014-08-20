<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        Production<br>
        <br>
        You are currently logged in as 
        <?php
            $myfile = fopen("../../mtiUser/".$_COOKIE["user"]."/user/user.txt", "r");
            $fname = fgets($myfile);
            $lname = fgets($myfile);
            fclose($myfile);

            echo $fname." ".$lname;
        ?> 
        <br>
        <br>
        Click <a href="../../profile/signin.php">HERE</a> to login<br>
        <form action="logCheck.php" method="post">
            Company ID<input type="text" name="compid">
            <input type="submit" value="Enter">
        </form>
    </body>
</html>
