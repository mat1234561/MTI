<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>Movies</title>
    </head>
    <body>
        <h2>Movies</h2>
        <br>
		<table>
		<?php
		$myfile = fopen("list.txt", "r");
		$numb = 1;
		while ($numb <= 4) {
		echo "<tr>";
		echo fgets($myfile);
		echo "</tr><tr>";
		$numa = 1;
		while($numa <= 5) {
			echo "<td>";
			$line = fgets($myfile);
			$myfileZ = fopen("movies/".$line."/name.txt", "r");
			$name = fgets($myfileZ);
			echo '<a href="movies/'.$line.'/index.html"><div class="img"><img src="movies/'.$line.'/img.png" alt="PNG" width="100" height="200"><div class="desc">'.$name.'</div></div></a>';
			fclose($myfileZ);
			$numa++;
			echo "</td>";
		}
		$numb++;
		echo "</tr>";
		}
		fclose($myfile);
		?>
		</table>

        Full Directory<br>
        <div class="img">
            <a href="full.html">
            <img src="movies/more.png" alt="PNG" width="100" height="200">
            </a>
            <div class="desc">See The Full Listings</div>
        </div>
    </body>
</html>
