<?php
    $expire=time()+60*60*24*30;
    setcookie("user", $_GET["user"], $expire);
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
