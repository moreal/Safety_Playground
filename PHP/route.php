<?php
    /* 
        route by request_method
    */
    $method = $_SERVER['REQUEST_METHOD'];

    $uri = $_SERVER['REQUEST_URI'];
    $path = "";

    switch ($method) {
        case "GET":
            $path .= "get";
            break;

        case "POST":
            $path .= "post";
            break;

        case "PUT":
            $path .= "put";
            break;
    }

    $uri = strtok($_SERVER['REQUEST_URI'],"?");
    $path .= $uri.".php"; // get method
    
    $conn = mysqli_connect("localhost", MY_ID, MY_PW, "safetyplay") or die("Error");
    
    include $path;

    mysqli_close($conn);
?>