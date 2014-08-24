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
        if (file_exists("../mtiUser/".$_POST["user"]."") == 1) {
            header('Location: signupRE.php?error=Username already exist&'.$resenddata.'');
            break;
        } 
        mkdir("../mtiUser/".$_POST["user"]);
        mkdir("../mtiUser/".$_POST["user"]."/user");

        $myfile = fopen("../mtiUser/".$_POST["user"]."/user/user.txt", "w");
        fwrite($myfile, $_POST["fname"]."\n".$_POST["lname"]."\n".$_POST["nname"]."\n".$_POST["sname"]);
        fclose($myfile);

        $myfile = fopen("../mtiUser/".$_POST["user"]."/user/login.txt", "w");
        fwrite($myfile, $_POST["user"]."\n".$_POST["pass"]);
        fclose($myfile);

        $myfile = fopen("../mtiUser/".$_POST["user"]."/user/contact.txt", "w");
        fwrite($myfile, $_POST["email"]."\n".$_POST["phone"]."\n".$_POST["city"]."\n".$_POST["zip"]."\n".$_POST["state"]);
        fclose($myfile);

        $myfile = fopen("../mtiUser/".$_POST["user"]."/user/bool.txt", "w");
        fwrite($myfile, "YES\nYES");
        fclose($myfile);

        $myfile = fopen("../mtiUser/".$_POST["user"]."/user/group.txt", "w");
        fwrite($myfile, "mti.grn.cc");
        fclose($myfile);

        header('Location: createB.php')
        ?>
    </body>
</html>
