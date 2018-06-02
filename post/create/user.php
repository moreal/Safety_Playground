<?php
    $name = $_POST['name'];
    $salary = $_POST['amount'];

    $query = "insert into users (name, salary) values ('$name', $salary);";

    $res = mysqli_query($conn, $query);

    echo json_encode(array("ret" => $res));
?>