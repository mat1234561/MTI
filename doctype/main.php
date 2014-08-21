<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="main.css">
        <title></title>
    </head>
    <body>
       You are currently logged in as 
        <?php
            $myfile = fopen("../mtiUser/".$_COOKIE["user"]."/user/user.txt", "r");
            $fname = fgets($myfile);
            $lname = fgets($myfile);
            fclose($myfile);

            echo $fname." ".$lname;
        ?> 
        <a href="../profile/signout.php">Log out</a>
        <br>
        <br>
        Apps<br>
        <table>
        <tr>
            <td>
        <div class="img">
        <a href="quizDoc/main.php">
            <img src="quizLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">QuizDoc</div>
        </div>
        </div>
            </td>
            <td>
        <div class="img">
        <a href="surveyDoc/main.php">
            <img src="surveyLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">SurveyDoc</div>
        </div>
        </div>
            </td>
            <td>
        <div class="img">
        <a href="wordDoc/main.php">
            <img src="wordLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">WordDoc</div>
        </div>
        </div>
            </td>
        </tr>
        <tr>
            <td>
        <div class="img">
        <a href="webDoc/main.php">
            <img src="webLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">WebDoc</div>
        </div>
        </div>
            </td>
            <td>
        <div class="img">
        <a href="showDoc/main.php">
            <img src="showLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">ShowDoc</div>
        </div>
        </div>
            </td>
            <td>
        <div class="img">
        <a href="printDoc/main.php">
            <img src="printLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">PrintDoc</div>
        </div>
        </div>
            </td>
        </tr>
        <tr>
            <td>
        <div class="img">
        <a href="timeDoc/main.php">
            <img src="timeLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">TimeDoc</div>
        </div>
        </div>
            </td>
        </tr>
        </table>
    </body>
</html>
