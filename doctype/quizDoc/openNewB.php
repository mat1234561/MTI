<?php
    if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType") != 1) {
             mkdir("../../mtiUser/".$_COOKIE["user"]."/docType");
        } 
    if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType/quizDoc") != 1) {
             mkdir("../../mtiUser/".$_COOKIE["user"]."/docType/quizDoc");
        }

    $nameis = 0;
    $curtnum = 1;
    $nameroot = $_POST["name"];
    if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType/quizDoc/".$_POST["name"]) == 1) {
        while ($nameis == 0) {
            $test = $nameroot."(".$curtnum.")";
            if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType/quizDoc/".$test) != 1) {
                    mkdir("../../mtiUser/".$_COOKIE["user"]."/docType/quizDoc/".$test);
                $nameis = 1;
                $nameof = $test;
                break;
            }
        $curtnum++;
        } 
    }else{
        mkdir("../../mtiUser/".$_COOKIE["user"]."/docType/quizDoc/".$nameroot."");
        $nameof = $nameroot;
        $dirof = "../../mtiUser/".$_COOKIE["user"]."/docType/quizDoc/" ;
    }
    $myfile = fopen("../../mtiUser/".$_COOKIE["user"]."/docType/quizDoc/".$nameof."/description.txt", "w");
    fwrite($myfile, $_POST["def"]);
    fclose($myfile);

	$myfile = fopen("../../mtiUser/".$_COOKIE["user"]."/docType/wordDoc/".$nameof."/name.txt", "w");
    fwrite($myfile, $nameroot);
    fclose($myfile);

	$myfile = fopen("../../mtiUser/".$_COOKIE["user"]."/docType/quizDoc/".$nameof."/edit.txt", "w");
    fwrite($myfile, "true");
    fclose($myfile);

	$myfile = fopen("../../mtiUser/".$_COOKIE["user"]."/docType/quizDoc/".$nameof."/owner.txt", "w");
    fwrite($myfile, $_COOKIE["user"]);
    fclose($myfile);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            header('Location: code/editor.php?owner='.$_COOKIE["user"].'&file='.$nameof.'&edit=true')
        ?>
    </body>
</html>
