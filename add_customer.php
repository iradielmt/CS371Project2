<?php
require_once 'connection.php';//include the connection file

$User_ID=isset($_POST['User_ID'])?$_POST['User_ID']:"";
$UserFirstName=isset($_POST['UserFirstName'])?$_POST['UserFirstName']:"";
$UserLastName=isset($_POST['UserLastName'])?$_POST['UserLastName']:"";

$SQL = "INSERT INTO Users(User_ID,UserFirstName,UserLastName) VALUES(";
$SQL.="'".$User_ID."', '".$UserFirstName."', '".$UserLastName."')";
$result = mysqli_query($connection,$SQL);

if (!$result) //if the query fails
    die("Database access failed: " . mysqli_error($connection));

    if($User_ID !=''&& $UserFirstName !='' && $UserLastName !='')
    {
    header("Location:record_added_successfully.php");
    }
