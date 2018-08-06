<?php
	include("connection.php");
	
	$query = "SELECT * FROM teks";
?>

<html>
<head>
	<title>Contoh </title>
</head>
<body>
	<p>SELAMAT DATANG</p>
	<?php
	$result = mysqli_query($link, $query);

	if(!$result){
		die ("Query Error: ".mysqli_errno($link).
				" - ".mysqli_error($link));
	}

	$data = mysqli_fetch_assoc($result);
	echo "$data[tulisan]";

	mysqli_free_result($result);

	//mysqli_close($result);
	?>
	<p>DI JTK</p>
</body>
</html>