<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo jtk.png" type="image/png" >
	<title>SELAMAT DATANG</title>

    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function(){
            $('#auto').load('load.php');
            refresh();
        });

        function refresh(){
            setTimeout( function () {
                $('#auto').load('load.php');
                refresh();
            }, 200);
        }
        
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

span{
	padding: 0px;
    padding-top:0px;
    font-size:80px;
    color:white;
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
        <p>
        Selamat Datang
        <br>
        <span id="auto"></span>
        <br>
        di JTK
        </p>
    </section>
 </div>
	
</body>

</html>