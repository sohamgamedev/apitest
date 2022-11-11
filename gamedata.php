<?php
    header('Content-Type: application/json');
    include 'DatabaseConfig.php' ;


    $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);


    $Sql_Query = "select * from game_test";

    if(mysqli_query($con,$Sql_Query)){

    $result = mysqli_query($con,$Sql_Query);

    $json_array = array();

    while($row = mysqli_fetch_assoc($result))
    {
        $json_array[] = $row;
    }

    print_r($json_array);

    }
    else{

    echo("Error description: Query not sent" );

    }
    mysqli_close($con);
?>
