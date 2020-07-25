<?php
//include lib
include "config.php";
include "VOLCUA_TOOL.php";

$PAGE="";
if(isset($_GET['PAGE']))
{
    $PAGE=$_GET['PAGE'];
}


switch ($PAGE)
{
    case "":
        include "FRONT/MAIN_PAGE.php";
        break;

    case "API":
        try
        {
            include "API/".$_GET['API'].".php";
        }
        catch (Exception $ex)
        {

        }

        break;
    default:
        break;
}