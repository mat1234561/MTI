<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php      
    
    if ($_POST["user"] == "" ) {
        header('Location: signinRE.php?error=No user input');
        break;
    }
    if (file_exists("../schoolUser/".$_POST["school"]."") != 1) {
        header('Location: signinRE.php?error=Username incorrect');
        break;
    }
    if ($_POST["pos"] == "a") {
        if (file_exists("../schoolUser/".$_POST["school"]."/staff/".$_POST["user"]."") != 1) {
        header('Location: signinRE.php?error=Username incorrect');
        break;
        }
            $myfile = fopen("../schoolUser/".$_POST["school"]."/staff/".$_POST["user"]."/login.txt", "r");
            $empty = fgets($myfile);
            $userpass = fgets($myfile);
            fclose($myfile);

            if ($userpass != $_POST["pass"]) {
               header('Location: signinRE.php?error=Password incorrect');
               break;
            }
               echo "Wait for it...";
               header('Location: ../approved.php?user='.$_POST["user"].'&sname='.$_POST["school"].'&goto=school/staff/index.html');
    }
    if ($_POST["pos"] == "b") {
        if (file_exists("../schoolUser/".$_POST["school"]."/students/".$_POST["user"]."") != 1) {
        header('Location: signinRE.php?error=Username incorrect');
        break;
        }
            $myfile = fopen("../schoolUser/".$_POST["school"]."/students/".$_POST["user"]."login.txt", "r");
            $empty = fgets($myfile);
            $userpass = fgets($myfile);
            fclose($myfile);

            if ($userpass != $_POST["pass"]) {
               header('Location: signinRE.php?error=Password incorrect');
               break;
            }
               echo "Wait for it...";
               header('Location: ../approved.php?user='.$_POST["user"].'&sname='.$_POST["school"].'&goto=school/students/index.html');
    }

    ?>
    </body>
</html>
