
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
        Its a good idea to a email address for your username.<br>
        <br>
        <?php echo $_GET["error"] ?>
        <br><br>
        Admin Username:<input type="text" name="user" value="admin" disabled required>* A login name.<br>
        Admin Password:<input type="password" name="pass" required>* A login password.<br>
        School name:<input type="text" name="nname" required>* The school's name.<br>
        District number:<input type="text" name="dname" required>* Used at login.<br>
        Email:<input type="text" name="email" required>* For contacting the school.<br>
        Phone:<input type="text" name="phone" disabled> For contacting the school.<br>
        City:<input type="text" name="city"> The city the school is based out of.<br>
        Zip:<input type="text" name="zip"> The zip code the school is based out of.<br>
        State:<input type="text" name="state" required>* The state the school is based out of.<br>
        Aggree to <a href="../readme/classroomterms.txt">Terms</a><input type="checkbox" name="terma" required>*<br>
        *Required<br>
        <input type="submit" value="Create Account"><br>
        </form>
    </body>
</html>

</html>
