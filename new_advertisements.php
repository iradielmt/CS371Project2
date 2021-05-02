
<html>
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Advertisement Database </title>
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
        <h2>Create New Advertisement</h2>
        <form method="post" action="add_advertisement.php">
        <table>
                <tr><td>Advertisement ID: </td><td><input type="smallint" name="Advertisement_ID"></td></tr>
                <tr><td>Title: </td><td><input type="varchar" name="Adv_title"></td></tr>
                <tr><td>Details: </td><td><input type="varchar" name="Adv_Deets"></td></tr>
                <tr><td>Date: </td><td><input type="date" name="Adv_DateTime"></td></tr>
                <tr><td>Price: </td><td><input type="double" name="Price"></td></tr>
                <tr><td>Category: </td><td><input type="varchar" name="Category_ID"></td></tr>
                <tr><td>User: </td><td><input type="varchar" name="User_ID"></td></tr>
                <tr><td>Moderator: </td><td><input type="varchar" name="Moderator_ID"></td></tr>
                <tr><td>Status: </td><td><input type="varchar" name="Status_ID"></td></tr>
                <tr><td><input type="submit" value="Submit"></td><td></td>
            </table>
        </form>
    
    </div>

</body>

</html>