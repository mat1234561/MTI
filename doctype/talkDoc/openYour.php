<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="open.css">
        <title></title>
    </head>
    <body>
		<a href="main.php">&#8592 Back</a>
		<div class="box">
        <?php
                $d = dir("../../mtiUser/".$_COOKIE['user']."/docType/talkDoc");
                while (($file = $d->read()) !== false){ 
                    if ($file != ".") {
						if ($file != "..") {
$myfile = fopen("../../mtiUser/".$_COOKIE['user']."/docType/talkDoc/".$file."/name.txt", "r");
$editS = fgets($myfile);
fclose($myfile);
							echo '<a class="black" href="code/editor.php?owner='.$_COOKIE["user"].'&edit=true&file='.$file.'">
							<div class="img"><div class="desc">'.$editS.'</div></div></a>';
						}
					} 
                } 
                $d->close();
        ?>
		</div>
    </body>
</html>
