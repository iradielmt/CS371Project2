<?php
include 'show_advertisements.php';
?>

<html>
    
<head>
    <title>Advertisement Database</title>
    <link rel="stylesheet" type="text/css" href="homepage.css">
</head>

<body>

<div class="topnav">
        <a class="active" href="homepage.html">Home</a>
        <a href="moderatorInformation.php">Moderators</a>
        <a href="customerInformation.php">Customers</a>
        <a href="advertisementInformation.php">Advertisements</a>
        <a href="new_moderator.php">New Moderator</a>
        <a href="new_customer.php">New Customer</a>
        <a href="add_advertisement.php">New Advertisement</a>
        <a href="logout.php">Logout</a>
    </div>


    <div style="padding-left:16px">
        <h2>Advertisements Information</h2>
        <?php echo $html ?>
    
    </div>

</body>

</html>