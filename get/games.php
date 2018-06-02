<?php
    $query = "select * from games;";

    $res = mysqli_query($conn, $query);

    $arr = mysql_fetch($res);

    echo json_encode($arr);
?>