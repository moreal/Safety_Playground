<?php
    $uid = $_POST['uid'];
    $gid = $_POST['gid'];
    $price = $_POST['price'];
    $win = $_POST['win'];

    $query = "insert into bets (uid, gid, price, win) values ($uid, $gid, $price, '$win');";

    $res = mysqli_query($conn, $query);

    echo json_encode(array("ret" => $res));
?>