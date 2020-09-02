<?php
    $host_name  = "db564231787.db.1and1.com";
    $database   = "db564231787";
    $user_name  = "dbo564231787";
    $password   = "1YL0X7jl7C!q";

    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } 

    $query = "SELECT * FROM users";

    if ($result = mysqli_query($connect, $query)) {

    	$row = mysqli_fetch_array($result);

    	print_r($row);

    } else {

    	echo "It failed.";
    }

?>