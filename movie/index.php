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
		while ($numb <= 5) {
		echo "<tr>";
		echo "<td>";
		echo fgets($myfile);
		echo "</td>";
		echo "</tr><tr>";
		$numa = 1;
		while($numa <= 5) {
			echo "<td>";
			$line = fgets($myfile);
			$myfileZ = fopen("movies/".$line."/name.txt", "r");
			$name = fgets($myfileZ);
			if ($line != "") {
			echo '<a href="movies/'.$line.'/index.html"><div class="img"><img src="movies/'.$line.'/img.png" alt="PNG" width="115" height="215"><div class="desc">'.$name.'</div></div></a>';
			}
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
    </body>
</html>
