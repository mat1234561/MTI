<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/signin.css">
        <title></title>
    </head>
    <body>
		<div>
			<img src="mti.png" alt="png">
        Please Sign-in to your MTI school<br>
        account to learn GREATE things!<br>
        Case sensitive!<br>

        <form action="access.php" method="POST">
            Username:<input type="text" name="user" value="" required><br>
            Password:<input type="password" name="pass" value="" required><br>
            School:<input type="text" name="school" value="" required><br>
            <input type="radio" name="pos" value="a" required>Staff
            <input type="radio" name="pos" value="b" required>Student
			<?php if ($_GET["error"] != "") {echo $_GET["error"]."<br>";} ?>
            <input type="submit" value="Sign-in"> <br>         
        </form>
		<a href="../../index.html">HOME</a><br>
		</div>
    </body>
</html>
