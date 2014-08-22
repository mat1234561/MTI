<?php
	if ($_GET["edit"] == "true"){
		header('Location: edit.php?owner='.$_GET["owner"].'&file='.$_GET["file"].'');
	}else{
		header('Location: view.php?owner='.$_GET["owner"].'&file='.$_GET["file"].'');
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
