<script type="text/javascript">    
    function tampilkanwaktu(){
        var waktu = new Date();
        var sh = waktu.getHours(); 
        var sm = waktu.getMinutes();
        var ss = waktu.getSeconds();
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm);
    }
</script>
<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">								
<span id="clock"></span>