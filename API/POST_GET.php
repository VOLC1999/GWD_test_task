<?php

$sql1="select * from List_user";
$result=mysqli_query($con, $sql1);


while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;                               // add rows to array
}
print json_encode($rows, JSON_PRETTY_PRINT);    // encode and print full array