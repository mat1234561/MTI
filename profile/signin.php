<?php 
    if ($_GET["contin"] == ""){
        $continue = "index.html";
            }else{
        $continue = $_GET["contin"];
            }
    $expire=time()+60*60*24*30;
    setcookie("contin", $continue, $expire);
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
        <?php echo "<h3>".$_GET["error"]."</h3>"; ?><br>
        Case sensitive! Must be username!<br>
        <?php
            
        ?>
        <form action="access.php" method="POST">
            Username:<input type="text" name="user" value="" required><br>
            Password:<input type="password" name="pass" value="" required><br>
            <input type="submit" value="Sign-in"> <br>         
        </form>
        <a href="signup.php">Create an Account</a><br>
		</div>
    </body>
</html>
