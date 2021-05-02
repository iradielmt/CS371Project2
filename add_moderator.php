<?php
require_once 'connection.php';//include the connection file

$User_ID=isset($_POST['User_ID'])?$_POST['User_ID']:"";

$SQL = "INSERT INTO moderators(User_ID) VALUES(";
$SQL.="'".$User_ID."')";
$result = mysqli_query($connection,$SQL);

if (!$result) //if the query fails
    die("Database access failed: " . mysqli_error($connection));

    if($User_ID !='')
    {
    header("Location:record_added_successfully.php");
    }
