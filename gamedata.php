<html>
    <head><meta http-equiv="Content-Type":"application/json"><head>

<?php

include 'DatabaseConfig.php' ;

$json = file_get_contents('php://input');

$_POST = json_decode($json);

//echo $_POST;  


 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $name = $_POST['name'];
 $score = $_POST['score']


 $Sql_Query = "insert into game_test (Name, score) values ('$name', '$score')";

 if(mysqli_query($con,$Sql_Query)){

 echo 'Data Submit Successfully';

 }
 else{

 echo 'Try Again';

 }
 mysqli_close($con);
?>
</html>
