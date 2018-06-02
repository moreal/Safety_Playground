<?php
    $name = $_POST['name'];
    $amount = $_POST['amount'];

    $query = "update users set salary = salary - $amount where name='$name';";

    $res = mysqli_query($conn, $query);

    echo json_encode(array("ret" => $res));
?>