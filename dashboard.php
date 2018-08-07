<?php
    include("connection.php");
    
    $query = "SELECT * FROM jadwal where mulai <= now() and selesai >= now()";

    $result = mysqli_query($link, $query);

    if(!$result){
        die ("Query Error: ".mysqli_errno($link).
                " - ".mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);

    mysqli_free_result($result);

    // mysqli_close($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo jtk.png" type="image/png" >
	<title>SELAMAT DATANG</title>

    <script type="text/javascript">

	    function tampilkanwaktu(){
            var waktu = new Date();
            var sh = waktu.getHours(); 
	        var sm = waktu.getMinutes();
	        var ss = waktu.getSeconds();
            sm = checkTime(sm);
            ss = checkTime(ss);
	        document.getElementById("clock").innerHTML = sh + ":" + sm ;
        }

        function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
        }

        function gantigambar(){
            var waktu = new Date();
            var sh = waktu.getHours(); 
	        var sm = waktu.getMinutes();
	        var ss = waktu.getSeconds();
            
            if(sh>=6&& sh<10){document.body.style.backgroundImage = "url('1.jpg')";}
            else if(sh>=10&& sh<15){document.body.style.backgroundImage = "url('2.jpg')";}
            else if(sh>=15 && sh<18){document.body.style.backgroundImage = "url('3.jpg')";}
            else{document.body.style.backgroundImage = "url('4.jpg')";}
        }

        function tampilkanTulisan(){
            var t1 = "Selamat Datang";
            var t2 = "<?php echo $data['tulisan'] ?>"; 
            var t3 = "Di JTK";
            
            document.getElementById("teks").innerHTML = t1 + "\n" + t2 + "\n" + t3;
        }
	</script>
	<style>

	/*	* {
    box-sizing: border-box;
}
*/
body {
    font-family: Arial, Helvetica, sans-serif;
    
    background-size: cover;
}

/* Style the header */
header {
    background-color: #666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
side {
    float: left;
    width: 30%;
    padding: 25px;
    padding-top:600px;
}
.container {

  background-size: cover;
}
/* Style the list inside the menu */
side bar {
    list-style-type: none;
    padding: 0;
    font-size:150px;
    
}

p{
    padding: 25px;
    padding-top:450px;
    font-size:80px;
    color:white;
}

message {
    padding: 25px;
    padding-top:450px;
    font-size:80px;
    color:white;
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}


</style>
</head>
<body onload="setInterval('tampilkanwaktu()', 1000);setInterval('gantigambar()', 1000); setInterval('tampilkanTulisan()', 1000);">
<body>
<div class="container">
    <section>
        <side>
            <bar>
            <div id="clock"style="color:white;"></div>
            </bar>
        </side>
        <span id="teks" style="p"></span>
        <!-- <p>
        ❤ Selamat Datang ❤
        <br>
        <?php
            // echo "❤ $data[tulisan] ❤";
        ?>
        <br>
        ❤ Di JTK ❤
        </p> -->
    </section>
 </div>
	
</body>

</html>