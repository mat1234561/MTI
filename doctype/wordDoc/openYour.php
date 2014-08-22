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
                    if ($file != ".") {
						if ($file != "..") {
							echo '<a href="code/edit.php?file='.$file.'">
							<div class="img"><div class="desc">'.$file.'</div></div></a>';
						}
					} 
                } 
                $d->close();
        ?>
    </body>
</html>
