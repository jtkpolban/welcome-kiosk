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

    body {
        font-family: Arial, Helvetica, sans-serif;
        
        background-size: auto;
        background-repeat: no-repeat;
        overflow-y: hidden;
        max-height: 100%;
    }

    header {
        background-color: #666;
        padding: 30px;
        text-align: center;
        font-size: 35px;
        color: white;
    }

    side {
        float: left;
        width: 30%;
        padding: 25px;
        padding-top:480px;
    }
    .container {

      background-size: cover;
    }

    side bar {
        list-style-type: none;
        padding: 0;
        font-size:150px;
        
    }

    span{
    	padding: 0px;
        padding-top:0px;
        font-size:60px;
        color:white;
    }

    p{
        padding-top:29%;
        font-size:80px;
        color:white;
        text-align: left;
        object-position: bottom;
        word-spacing: 0px;
    }

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
        <span id="auto"></span>
        di JTK
        </p>
    </section>
 </div>
	
</body>

</html>