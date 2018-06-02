<?php
    $query = "select * from games where date > current_timestamp();";

    $res = mysqli_query($conn, $query);

    $arr = mysql_fetch($res);

    echo json_encode($arr);
?>