<?php
	$myfile = fopen("mtiUser/".$_POST["user"]."/user/user.txt", "r");
    $empty = fgets($myfile);
    $empty = fgets($myfile);
	$nickname = fgets($myfile);
    fclose($myfile);

    $expire=time()+60*60*24*30;
    setcookie("user", $_GET["user"], $expire);
	setcookie("showname", $nickname, $expire);
    header('Location: '.$_GET["goto"].'')
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
