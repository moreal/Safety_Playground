<?php
    if (isset($_GET['name'])) {        
        $name = $_GET['name']; 
        $query = 
        "select * from bets inner join users\
         on users.uid == bets.uid and users.name='$name';";
    } else if (isset($_GET['uid'])) {
        $uid = $_GET['uid'];
        $query = 
        "select * from bets inner join users\
         on users.uid == bets.uid and users.uid='$uid';";
    } else {
        die ("No Params..");
    }

    $res = mysqli_query($conn, $query);

    $arr = mysql_fetch($res);

    echo json_encode($arr);
?>