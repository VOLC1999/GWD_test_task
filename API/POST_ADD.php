<?php
if(isset($_POST['Name'])&&isset($_POST['Age']))
{
    $Name=$_POST['Name'];
    $Age=$_POST['Age'];

    $sql1="INSERT INTO List_user (Name_user, Age) VALUE ('$Name',$Age);";

    $resultat=mysqli_query($con, $sql1);

    echo "success";
}