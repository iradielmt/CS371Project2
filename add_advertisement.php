<?php
require_once 'connection.php';//include the connection file

//$Advertisement_ID=isset($_POST['Advertisement_ID'])?$_POST['Advertisement_ID']:"";
$Adv_Title=isset($_POST['Adv_Title'])?$_POST['Adv_Title']:"";
$Adv_Deets=isset($_POST['Adv_Deets'])?$_POST['Adv_Deets']:"";
$Adv_DateTime=isset($_POST['Adv_DateTime'])?$_POST['Adv_DateTime']:"";
$Price=isset($_POST['Price'])?$_POST['Price']:"";
$Category_ID=isset($_POST['Category_ID'])?$_POST['Category_ID']:"";
$User_ID=isset($_POST['User_ID'])?$_POST['User_ID']:"";
$Moderator_ID=isset($_POST['Moderator_ID'])?$_POST['Moderator_ID']:"";
$Status_ID=isset($_POST['Status_ID'])?$_POST['Status_ID']:"";

$SQL = "INSERT INTO Advertisements(Adv_Title, Adv_Deets, Adv_DateTime, Price, Category_ID, User_ID, Moderator_ID, Status_ID) VALUES(";
$SQL .="'".$Adv_Title."', '".$Adv_Deets."', '".$Adv_DateTime."', '".$Price."', '".$Category_ID."', '".$User_ID."', '".$Moderator_ID."', '".$Status_ID."')";
$result = mysqli_query($connection,$SQL);

if (!$result) //if the query fails
    die("Database access failed: " . mysqli_error($connection));

if($Advertisement_ID !='' && $Adv_Title !='' && $Adv_Deets !='' && $Adv_DateTime !='' && $Price !='' && $Category_ID != '' && $User_ID !='' && $Moderator_ID != '' && $Status_ID !='')
{
    header("Location:record_added_successfully.php");
}
