<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
        $resenddata = "user=".$_POST["user"]."&pass=".$_POST["pass"]."&fname=".$_POST["fname"]."&lname=".$_POST["lname"]."&nname=".$_POST["nname"]."&sname=".$_POST["sname"]."&email=".$_POST["email"]."&phone=".$_POST["phone"]."&city=".$_POST["city"]."&zip=".$_POST["zip"]."&state=".$_POST["state"]."" ;
        if (file_exists("../schoolUser/".$_POST["dname"]."") == 1) {
            header('Location: enrollRE.php?error=Distric number already used&'.$resenddata.'');
            break;
        } 
        mkdir("../schoolUser/".$_POST["dname"]);
        mkdir("../schoolUser/".$_POST["dname"]."/user");
        mkdir("../schoolUser/".$_POST["dname"]."/students");
        mkdir("../schoolUser/".$_POST["dname"]."/staff");
        mkdir("../schoolUser/".$_POST["dname"]."/staff/admin");

        $myfile = fopen("../schoolUser/".$_POST["dname"]."/staff/admin/login.txt", "w");
        fwrite($myfile, $_POST["user"]."\n".$_POST["pass"]);
        fclose($myfile);

        $myfile = fopen("../schoolUser/".$_POST["dname"]."/user/user.txt", "w");
        fwrite($myfile, $_POST["sname"]."\n".$_POST["dname"]);
        fclose($myfile);

        $myfile = fopen("../schoolUser/".$_POST["dname"]."/user/login.txt", "w");
        fwrite($myfile, $_POST["user"]."\n".$_POST["pass"]);
        fclose($myfile);

        $myfile = fopen("../schoolUser/".$_POST["dname"]."/user/contact.txt", "w");
        fwrite($myfile, $_POST["email"]."\n".$_POST["phone"]."\n".$_POST["city"]."\n".$_POST["zip"]."\n".$_POST["state"]);
        fclose($myfile);

        $myfile = fopen("../schoolUser/".$_POST["dname"]."/user/bool.txt", "w");
        fwrite($myfile, "YES\nYES");
        fclose($myfile);

        header('Location: createB.php')
        ?>
    </body>
</html>
