

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
        <h2>Create New Moderator</h2>
        <form method="post" action="add_moderator.php">
        <table>
                <tr><td>Moderator ID:</td><td><input type="varchar" name="User_ID"></td></tr>
                <tr><td><input type="submit" value="Submit"></td><td></td>
            </table>
        </form>
    
    </div>

</body>

</html>