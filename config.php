<?php
$IP="sql172.main-hosting.eu";
$DB="u361813148_MCTT";
$USER="u361813148_MCTT";
$PASS="QWerty12";


$con = mysqli_connect($IP,$USER,$PASS,$DB);


if($con->connect_error)
{
    echo "Error";
}




