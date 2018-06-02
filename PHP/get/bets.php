<?php
    if (isset($_GET['name'])) {        
        $name = $_GET['name']; 
        $query = 
        "select * from bets left join users
         on bets._uid = users._uid and users.name='$name';";
    } else if (isset($_GET['uid'])) {
        $uid = $_GET['uid'];
        $query = 
        "select * from bets inner join users
        on users._uid = bets._uid and users._uid = $uid;";
    } else {
        die ("No Params..");
    }

    $res = mysqli_query($conn, $query);

    $arr = mysql_fetch($res);

    echo json_encode($arr);
?>