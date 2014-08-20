<?php
    if ($_POST["compid"] == "2w5"){
        $expire=time()+60*60*24*30;
        setcookie("company", "IvyWoodCraft", $expire);
        header ('Location: dashboard.php');
    }else{
        header ('Location: main.php');
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
