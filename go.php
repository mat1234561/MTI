<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            switch ($_GET["boxgo"]) {
                case "test":
                    header( 'Location: test.php' ) ;
                    break;
                case "signin":
                    header( 'Location: profile/signin.php' ) ;
                    break;
                case "signout":
                    header( 'Location: profile/signout.php' ) ;
                    break;
                case "accountUpgrade":
                    header( 'Location: profile/upgradeAccount.php' ) ;
                    break;
                case "production":
                    header( 'Location: external/production/main.php' ) ;
                    break;
                case "doctype":
                    header( 'Location: doctype/index.html' ) ;
                    break;
                case "school":
                    header( 'Location: classroom/index.html' ) ;
                    break;
                default:
                    header( 'Location: index.html' ) ;
            }
        ?>
    </body>
</html>
