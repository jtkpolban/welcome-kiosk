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
    echo "$data[tulisan]";
?>

