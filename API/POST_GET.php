<?php

//echo $_POST['PageNow'];
//if(isset($_POST['PageNow']))
    if(true)

{
    //get amount of page

    $sql1="select id from List_user ";
    $result=mysqli_query($con, $sql1);

    while($r = mysqli_fetch_assoc($result)) {
        $rows2[] = $r;                               // add rows to array
    }

    $countRow=(int)(count($rows2)/5);

    if((count($rows2)%5)>(0))
    {
        $countRow++;
    }

    //Get info of current Page


    $num_page=(int)$_POST['PageNow'];
    $Row_get_start=5*$num_page-5;

    $sql1="select * from List_user order by id DESC  LIMIT 5 OFFSET $Row_get_start ";

    $result=mysqli_query($con, $sql1);


    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;                               // add rows to array
    }


    print '[{"PageNow": '.$_POST['PageNow'].',"PageCount": '.$countRow.' },'.json_encode($rows, JSON_PRETTY_PRINT)."]";    // encode and print full array
//print ''.json_encode($rows, JSON_PRETTY_PRINT)."";    // encode and print full array
}