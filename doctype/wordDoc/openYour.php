<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="main.css">
        <title></title>
    </head>
    <body>
        <?php
                $d = dir("../../mtiUser/".$_COOKIE['user']."/docType/wordDoc");
                while (($file = $d->read()) !== false){ 
                    echo '<div class="img"><a href="code/edit.php?file='.$file.'"><div class="desc">'.$file.'</div></a></div>';
                } 
                $d->close();
        ?>
    </body>
</html>
