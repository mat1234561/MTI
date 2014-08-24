<?php
    if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType") != 1) {
             mkdir("../../mtiUser/".$_COOKIE["user"]."/docType");
        } 
    if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType/printDoc") != 1) {
             mkdir("../../mtiUser/".$_COOKIE["user"]."/docType/printDoc");
        }

    $nameis = 0;
    $curtnum = 1;
    $nameroot = $_POST["name"];
    if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType/printDoc/".$_POST["name"]) == 1) {
        while ($nameis == 0) {
            $test = $nameroot."(".$curtnum.")";
            if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType/printDoc/".$test) != 1) {
                    mkdir("../../mtiUser/".$_COOKIE["user"]."/docType/printDoc/".$test);
                $nameis = 1;
                $nameof = $test;
                break;
            }
        $curtnum++;
        } 
    }else{
        mkdir("../../mtiUser/".$_COOKIE["user"]."/docType/printDoc/".$nameroot."");
        $nameof = $nameroot;
        $dirof = "../../mtiUser/".$_COOKIE["user"]."/docType/printDoc/" ;
    }
    $myfile = fopen("../../mtiUser/".$_COOKIE["user"]."/docType/printDoc/".$nameof."/description.txt", "w");
    fwrite($myfile, $_POST["def"]);
    fclose($myfile);

	$myfile = fopen("../../mtiUser/".$_COOKIE["user"]."/docType/wordDoc/".$nameof."/name.txt", "w");
    fwrite($myfile, $nameroot);
    fclose($myfile);

	$myfile = fopen("../../mtiUser/".$_COOKIE["user"]."/docType/printDoc/".$nameof."/edit.txt", "w");
    fwrite($myfile, "true");
    fclose($myfile);

	$myfile = fopen("../../mtiUser/".$_COOKIE["user"]."/docType/printDoc/".$nameof."/owner.txt", "w");
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
