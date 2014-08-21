<?php
    if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType") != 1) {
             mkdir("../../mtiUser/".$_COOKIE["user"]."/docType");
        } 
    if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType/wordDoc") != 1) {
             mkdir("../../mtiUser/".$_COOKIE["user"]."/docType/wordDoc");
        }

    $nameis = 0;
    $curtnum = 1;
    $nameroot = $_POST["name"];
    if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType/wordDoc/".$_POST["name"]) == 1) {
        while ($nameis == 0) {
            $test = $nameroot."(".$curtnum.")";
            if (file_exists("../../mtiUser/".$_COOKIE["user"]."/docType/wordDoc/".$test) != 1) {
                    mkdir("../../mtiUser/".$_COOKIE["user"]."/docType/wordDoc/".$test);
                $nameis = 1;
                $nameof = $test;
                break;
            }
        $curtnum++;
        } 
    }else{
        mkdir("../../mtiUser/".$_COOKIE["user"]."/docType/wordDoc/".$nameroot."");
        $nameof = $nameroot;
        $dirof = "../../mtiUser/".$_COOKIE["user"]."/docType/wordDoc/" ;
    }
    $myfile = fopen("../../mtiUser/".$_COOKIE["user"]."/docType/wordDoc/".$nameof."/description.des", "w");
    fwrite($myfile, $_POST["def"]);
    fclose($myfile);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
       <script> alert("The WordDoc is named: \n <?php echo $nameof; ?> \n The name can be changed."); </script>
        <?php
            header('Location: editor.php?file='.$nameof.'&edit=true')
        ?>
    </body>
</html>
