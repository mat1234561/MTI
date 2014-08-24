<?php 
    
 ?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/signin.css">
        <title></title>
    </head>
    <body>
		<div>
			<img src="mti.png">
        Please Sign-in to your MTI account<br>
        to access even more awsomeness!<br>
        Case sensitive! Must be username!<br>

        <form action="access.php" method="POST">
            Username:<input type="text" name="user" value="" required><br>
            Password:<input type="password" name="pass" value="" required><br>
			<?php if ($_GET["error"] != "") {echo $_GET["error"]."<br>";} ?>
            <input type="submit" value="Sign-in"> <br>         
        </form>
        <a href="signup.php">Create an Account</a><br>
		<a href="../index.html">HOME</a><br>
		</div>
    </body>
</html>
