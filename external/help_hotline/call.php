<?php
if ($_GET["dofile"] == "on") {
if ($_FILES["errorfile"]["error"] > 0) {
  echo "Error: " . $_FILES["errorfile"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["errorfile"]["name"] . "<br>";
  echo "Type: " . $_FILES["errorfile"]["type"] . "<br>";
  echo "Size: " . ($_FILES["errorfile"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["errorfile"]["tmp_name"];
}
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
