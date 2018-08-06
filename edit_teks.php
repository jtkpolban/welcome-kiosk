<?php
	include("connection.php");
	$tulisan = htmlentities(strip_tags(trim($_POST["tulisan"])));
	$tulisan = mysqli_real_escape_string($link, $tulisan);

	$query = "UPDATE teks SET tulisan = '$tulisan'";

	$result = mysqli_query($link, $query);
?>

<html>
<head>
	<title>Contoh</title>
</head>
<body>
<form id="form_edit" action="edit_teks.php" method="post">
<fieldset>
	<legend>Edit Teks</legend>
	<p>
		<label for="tulisan">Ubah teks menjadi: </label>
		<input type="teks" name="tulisan" id="tulisan" value="JTK Kompen">
	</p>
</fieldset>
<br>
<p>
	<input type="submit" name="submit" value="Update Teks">
</p>
</form>
</body>
</html>