<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title></title>
    </head>
    <body>
		<div class="pos">
       You are currently logged in as 
        <?php
            $myfile = fopen("../mtiUser/".$_COOKIE["user"]."/user/user.txt", "r");
            $fname = fgets($myfile);
            $lname = fgets($myfile);
            fclose($myfile);

            echo $fname." ".$lname;
        ?> 
		<br>
        <a class="signout" href="../profile/signout.php">Log out</a>
        <br>
        <table>
        <tr>
            <td>
		<a href="quizDoc/main.php">
        <div class="img">
            <img src="quizLogo.png" alt="PNG" width="68" height="68">
        <div class="desc">QuizDoc</div>
        </div>
        </div>
		</a>
            </td>
            <td>
		<a href="surveyDoc/main.php">
        <div class="img">
            <img src="surveyLogo.png" alt="PNG" width="68" height="68">
        <div class="desc">SurveyDoc</div>
        </div>
        </div>
		</a>
            </td>
            <td>
		<a href="wordDoc/main.php">
        <div class="img">
            <img src="wordLogo.png" alt="PNG" width="68" height="68">
        <div class="desc">WordDoc</div>
        </div>
        </div>
		</a>
            </td>
        </tr>
        <tr>
            <td>
		<a href="webDoc/main.php">
        <div class="img">
            <img src="webLogo.png" alt="PNG" width="68" height="68">
        <div class="desc">WebDoc</div>
        </div>
        </div>
		</a>
            </td>
            <td>
		<a href="showDoc/main.php">
        <div class="img">
            <img src="showLogo.png" alt="PNG" width="68" height="68">
        <div class="desc">ShowDoc</div>
        </div>
        </div>
		</a>
            </td>
            <td>
		<a href="printDoc/main.php">
        <div class="img">
            <img src="printLogo.png" alt="PNG" width="68" height="68">
        <div class="desc">PrintDoc</div>
        </div>
        </div>
		</a>
            </td>
        </tr>
        <tr>
            <td>
		<a href="timeDoc/main.php">
        <div class="img">
            <img src="timeLogo.png" alt="PNG" width="68" height="68">
        <div class="desc">TimeDoc</div>
        </div>
        </div>
		</a>
            </td>
        <td>
		<a href="talkDoc/main.php">
        <div class="img">
            <img src="talkLogo.png" alt="PNG" width="68" height="68">
        <div class="desc">TalkDoc</div>
        </div>
        </div>
		</a>
            </td>
        </tr>
        </table>
		</div>
    </body>
</html>
