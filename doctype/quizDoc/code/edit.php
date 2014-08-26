<?php
$myfile = fopen("../../../mtiUser/".$_GET['owner']."/docType/quizDoc/".$_GET['file']."/name.txt", "r");
$editS = fgets($myfile);
fclose($myfile);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="edit.css">
        <title></title>
    </head>
    <body>
		<div class="ribbon" id="hi">
		<input type="button" class="buttonN" value="<?php echo $editS; ?>" >
		<input type="button" class="button" value="NEW">
		<input type="submit" class="button" value="SAVE">
		<input type="button" class="button" value="SHARE">
		<input type="button" class="button" value="VIEW">
		<input type="button" class="button" value="RESPONCES">
		<input type="button" class="button" value="TEST">
		<input type="button" class="button" value="STUDY">
		</div>
        <script src="edit.js"></script>
    </body>
</html>
