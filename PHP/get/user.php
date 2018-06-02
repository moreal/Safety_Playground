<?php
    $name = $_GET['name'];

    $query = "select * from users where name='$name';";

    $res = mysqli_query($conn, $query);

    $arr = mysql_fetch($res);

    echo json_encode($arr);
?>