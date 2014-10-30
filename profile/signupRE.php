<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
             MTI account sign up.<br>
            <br>
            Its a good idea to use your email address for your username.<br>
            <br>
            <?php echo $_GET["error"] ?>
            <br><br>
        <form action="createA.php" method="POST">
            Username:<input type="text" name="user" value="<?php echo $_GET["user"]; ?>" required>* A login name<br>
            Password:<input type="password" name="pass" required>* A login password<br>
            First Name:<input type="text" name="fname" value="<?php echo $_GET["fname"]; ?>" required>* Your firstname<br>
            Last Name:<input type="text" name="lname" value="<?php echo $_GET["lname"]; ?>" required>* Your lastname<br>
            Nick Name:<input type="text" name="nname" value="<?php echo $_GET["nname"]; ?>">* A fun name you can use.<br>
            Screen Name:<input type="text" name="sname" value="<?php echo $_GET["sname"]; ?>" required> The name others see you as.<br>
            Email:<input type="text" name="email" value="<?php echo $_GET["email"]; ?>" required>* An email we can contact you.<br>
            Phone:<input type="text" name="phone" value="<?php echo $_GET["phone"]; ?>" disabled> For cool planned featers later.<br>
            City:<input type="text" name="city" value="<?php echo $_GET["city"]; ?>"> The city you live in.<br>
            Zip:<input type="text" name="zip" value="<?php echo $_GET["zip"]; ?>"> The zip code you live in.<br>
            State:<input type="text" name="state" value="<?php echo $_GET["state"]; ?>" required>* The state you live in.<br>
            Aggree to <a href="../readme/terms.txt">Terms</a><input type="checkbox" name="terma" required>*<br>
            *Required<br>
            <input type="submit" value="Create Account">
        </form>
    </body>
</html>
