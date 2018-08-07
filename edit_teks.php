<?php
	include("connection.php");

  if (isset($_POST["submit"])) {
  	$tulisan = htmlentities(strip_tags(trim($_POST["tulisan"])));
  	$Stgl = htmlentities(strip_tags(trim($_POST["Stgl"])));
  	$Sbln = htmlentities(strip_tags(trim($_POST["Sbln"])));
  	$Sthn = htmlentities(strip_tags(trim($_POST["Sthn"])));
  	$Sjam = htmlentities(strip_tags(trim($_POST["Sjam"])));
  	$Smenit = htmlentities(strip_tags(trim($_POST["Smenit"])));
  	$Ftgl = htmlentities(strip_tags(trim($_POST["Ftgl"])));
  	$Fbln = htmlentities(strip_tags(trim($_POST["Fbln"])));
  	$Fthn = htmlentities(strip_tags(trim($_POST["Fthn"])));
  	$Fjam = htmlentities(strip_tags(trim($_POST["Fjam"])));
  	$Fmenit = htmlentities(strip_tags(trim($_POST["Fmenit"])));

   	$tulisan = mysqli_real_escape_string($link, $tulisan);
  	$Stgl = mysqli_real_escape_string($link, $Stgl);
  	$Sbln = mysqli_real_escape_string($link, $Sbln);
  	$Sthn = mysqli_real_escape_string($link, $Sthn);
  	$Sjam = mysqli_real_escape_string($link, $Sjam);
  	$Smenit = mysqli_real_escape_string($link, $Smenit);
  	$Ftgl = mysqli_real_escape_string($link, $Ftgl);
  	$Fbln = mysqli_real_escape_string($link, $Fbln);
  	$Fthn = mysqli_real_escape_string($link, $Fthn);
  	$Fjam = mysqli_real_escape_string($link, $Fjam);
  	$Fmenit = mysqli_real_escape_string($link, $Fmenit);
    	
  	$tgl_mulai = $Sthn."-".$Sbln."-".$Stgl." ".$Sjam.":".$Smenit.":"."00";
  	$tgl_selesai = $Fthn."-".$Fbln."-".$Ftgl." ".$Fjam.":".$Fmenit.":"."00";

  	$query = "INSERT INTO jadwal VALUES ";
  	$query .= "('$tulisan', ";
  	$query .= "'$tgl_mulai', ";
  	$query .= "'$tgl_selesai')";

  	$result = mysqli_query($link, $query);
  	if($result) {
        // INSERT berhasil, redirect ke tampil_mahasiswa.php + pesan
          $pesan = "Data sudah berhasil di update";
          $pesan = urlencode($pesan);
    } 
    else { 
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
    }
  }

	$arr_bln = array( "1"=>"Januari",
                    "2"=>"Februari",
                    "3"=>"Maret",
                    "4"=>"April",
                    "5"=>"Mei",
                    "6"=>"Juni",
                    "7"=>"Juli",
                    "8"=>"Agustus",
                    "9"=>"September",
                    "10"=>"Oktober",
                    "11"=>"Nopember",
                    "12"=>"Desember" );
?>

<html>
<head>
	<title>Contoh</title>
</head>
<body>
<div class="container">
<form id="form_edit" action="edit_teks.php" method="post">
<fieldset>
	<legend>Edit Teks</legend>
	<p>
		<label for="tulisan">Ubah teks menjadi: </label>
		<input type="teks" name="tulisan" id="tulisan" value="Teks yang akan dimasukkan">
	</p>
	<p>
    <label for="Stgl" >Tanggal Mulai : </label> 
      <select name="Stgl" id="Stgl">
        <?php
          for ($i = 1; $i <= 31; $i++) {
            if ($i==$Stgl){
              echo "<option value = $i selected>";
            }
            else {
              echo "<option value = $i >";
            }
            echo str_pad($i,2,"0",STR_PAD_LEFT);
            echo "</option>";
          }
        ?>
      </select>
        <select name="Sbln">
        <?php 
        foreach ($arr_bln as $key => $value) {
          if ($key==$Sbln){
            echo "<option value=\"{$key}\" selected>{$value}</option>";
          }
          else {
            echo "<option value=\"{$key}\">{$value}</option>";
          } 
        } 
        ?>
      </select>
      <select name="Sthn">
        <?php
          for ($i = 2018; $i <= 2030; $i++) {
          if ($i==$Sthn){
              echo "<option value = $i selected>";
            }
            else {
              echo "<option value = $i >";
            }
            echo "$i </option>";
          }
        ?>
      </select>
      <label> Jam : </label>
      <select name="Sjam">
        <?php
          for ($i = 0; $i <= 23; $i++) {
            if ($i==$Sjam){
              echo "<option value = $i selected>";
            }
            else {
              echo "<option value = $i >";
            }
            echo str_pad($i,2,"0",STR_PAD_LEFT);
            echo "</option>";
          }
        ?>
      </select>
      <label> : </label>
      <select name="Smenit">
        <?php
          for ($i = 0; $i <= 59; $i++) {
            if ($i==$menit){
              echo "<option value = $i selected>";
            }
            else {
              echo "<option value = $i >";
            }
            echo str_pad($i,2,"0",STR_PAD_LEFT);
            echo "</option>";
          }
        ?>
      </select>
  	</p>
  	<p>
    <label for="Ftgl" >Tanggal Selesai : </label> 
      <select name="Ftgl" id="Ftgl">
        <?php
          for ($i = 1; $i <= 31; $i++) {
            if ($i==$tgl){
              echo "<option value = $i selected>";
            }
            else {
              echo "<option value = $i >";
            }
            echo str_pad($i,2,"0",STR_PAD_LEFT);
            echo "</option>";
          }
        ?>
      </select>
        <select name="Fbln">
        <?php 
        foreach ($arr_bln as $key => $value) {
          if ($key==$Fbln){
            echo "<option value=\"{$key}\" selected>{$value}</option>";
          }
          else {
            echo "<option value=\"{$key}\">{$value}</option>";
          } 
        } 
        ?>
      </select>
      <select name="Fthn">
        <?php
          for ($i = 2018; $i <= 2030; $i++) {
          if ($i==$Fthn){
              echo "<option value = $i selected>";
            }
            else {
              echo "<option value = $i >";
            }
            echo "$i </option>";
          }
        ?>
      </select>
      <label> Jam : </label>
      <select name="Fjam">
        <?php
          for ($i = 0; $i <= 23; $i++) {
            if ($i==$Fjam){
              echo "<option value = $i selected>";
            }
            else {
              echo "<option value = $i >";
            }
            echo str_pad($i,2,"0",STR_PAD_LEFT);
            echo "</option>";
          }
        ?>
      </select>
      <label> : </label>
      <select name="Fmenit">
        <?php
          for ($i = 0; $i <= 59; $i++) {
            if ($i==$Fmenit){
              echo "<option value = $i selected>";
            }
            else {
              echo "<option value = $i >";
            }
            echo str_pad($i,2,"0",STR_PAD_LEFT);
            echo "</option>";
          }
        ?>
      </select>
  	</p>
</fieldset>
<br>
<p>
	<input type="submit" name="submit" value="Update Teks">
</p>
</form>
  
</div>

</body>
</html>
<?php
  mysqli_close($link);
?>
