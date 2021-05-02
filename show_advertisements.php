<?php

require_once 'connection.php';


  /* connect to the database */
$connection = mysqli_connect($db_hostname, $db_username,$db_password,$db_database);

/* if there is a problem with the connection */
if (!$connection)
    die("Unable to connect to MySQL: " . mysqli_error($connection));

//make an SQL statement and send it via the connection */
$query = "SELECT * FROM advertisements";
$result = mysqli_query($connection,$query);

if (!$result)
    die("Database access failed: " . mysqli_error($connection));

$html = "";

/*iterate through the result set*/
while ($row = mysqli_fetch_assoc($result)) {
    // echo "number of fields ".mysqli_num_fields($result);
    $html.="Advertisement ID: " . $row['Advertisement_ID'] . "<br>";
    $html.="Title: " . $row['Adv_Title'] . "<br>";
    $html.="Details: " . $row['Adv_Deets'] . "<br>";
    $html.="Date: " . $row['Adv_DateTime'] . "<br>";
    $html.="Price: " . $row['Price'] . "<br>";
    $html.="Category: " . $row['Category_ID'] . "<br>";
    $html.="User: " . $row['User_ID'] . "<br>";
    $html.="Moderator: " . $row['Moderator_ID'] . "<br>";
    $html.="Status: " . $row['Status_ID'] . "<br>";
    $html.="<br><br>";}

// echo $html;

mysqli_close($connection);


?>