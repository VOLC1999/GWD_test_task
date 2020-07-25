<?php
if(isset($_POST['ID']))
{
    $ID=$_POST['ID'];

    $sql1=" DELETE FROM List_user where ID=$ID";


    $resultat=mysqli_query($con, $sql1);

    echo "success";
}