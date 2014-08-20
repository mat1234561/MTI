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
    if (file_exists("../mtiUser/".$_POST["user"]."") != 1) {
        header('Location: signinRE.php?error=Username incorrect');
        break;
    }

    $myfile = fopen("../mtiUser/".$_POST["user"]."/user/login.txt", "r");
    $empty = fgets($myfile);
    $userpass = fgets($myfile);
    fclose($myfile);

    if ($userpass != $_POST["pass"]) {
       header('Location: signinRE.php?error=Password incorrect');
       break;
    }
       echo "Wait for it...";
       header('Location: ../approved.php?user='.$_POST["user"].'&goto='.$_COOKIE["contin"].'');
    ?>
    </body>
</html>
