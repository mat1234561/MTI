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
        <div class="img">
        <a href="quizDoc/index.html">
            <img src="quizLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">QuizDoc</div>
        </div>
        </div>
        <div class="img">
        <a href="surveyDoc/index.html">
            <img src="surveyLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">SurveyDoc</div>
        </div>
        </div>
        <div class="img">
        <a href="wordDoc/index.html">
            <img src="wordLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">WordDoc</div>
        </div>
        <br><br><br><br><br><br>
        </div>
        <div class="img">
        <a href="webDoc/index.html">
            <img src="webLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">WebDoc</div>
        </div>
        </div>
        <div class="img">
        <a href="showDoc/index.html">
            <img src="showLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">ShowDoc</div>
        </div>
        </div>
        <div class="img">
        <a href="printDoc/index.html">
            <img src="printLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">PrintDoc</div>
        </div>
        </div>
        <br><br><br><br><br><br>
        <div class="img">
        <a href="timeDoc/index.html">
            <img src="timeLogo.png" alt="PNG" width="68" height="68">
        </a>
        <div class="desc">TimeDoc</div>
        </div>
        </div>
    </body>
</html>
