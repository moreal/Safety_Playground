<?php
    // TODO

    date_default_timezone_set("Asia/Seoul");

    define("MARG_MAX", "5000");

    $index = rand(0, count($NAMES)-1);

    $name = $NAMES[$index];
    $date = date("Y-m-d h:i:s", time() + 120);
    $win = rand(0, MARG_MAX) / 100.0;
    $draw = rand(0, MARG_MAX) / 100.0;
    $lose = rand(0, MARG_MAX) / 100.0;
    $ret = $RESULT[rand(0, 2)];
    
    $query = "insert into games (name, win, draw, lose, date, ret) values ('$name', $win, $draw, $lose, timestamp('$date'), '$ret')";

    $res = mysqli_query($conn, $query);

    echo mysqli_error($conn);

    echo json_encode(array("ret" => $res));
?>