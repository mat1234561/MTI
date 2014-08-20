<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form action="createA.php" method="POST">
            MTI account sign up.<br>
            <br>
            Its a good idea to use your email address for your username.<br>
            The username is used only at login.<br>
            Username:<input type="text" name="user" required>* A login name<br>
            Password:<input type="password" name="pass" required>* A login password<br>
            First Name:<input type="text" name="fname" required>* Your firstname<br>
            Last Name:<input type="text" name="lname" required>* Your lastname<br>
            Nick Name:<input type="text" name="nname"> A fun name you can use.<br>
            Screen Name:<input type="text" name="sname" required>* The name others see you as.<br>
            Email:<input type="text" name="email" required>* An email we can contact you.<br>
            Phone:<input type="text" name="phone" disabled> For cool planned featers later.<br>
            City:<input type="text" name="city"> The city you live in.<br>
            Zip:<input type="text" name="zip"> The zip code you live in.<br>
            State:<input type="text" name="state" required>* The state you live in.<br>
            Aggree to <a href="../readme/terms.txt">Terms</a><input type="checkbox" name="terma" required>*<br>
            *Required<br>
            <input type="submit" value="Create Account">
        </form>
    </body>
</html>
