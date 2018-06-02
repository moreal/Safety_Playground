<?php
    $gid = $_GET['gid'];

    $query = "select * from games where gid=$gid;";

    $res = mysqli_query($conn, $query);

    $arr = mysql_fetch($res);

    echo json_encode($arr);
?>