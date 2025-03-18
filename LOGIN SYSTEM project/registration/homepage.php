<?php

session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>

<html>
    <head>
        <title>Home Page | micep international</title>
    </head>
    <style>
        body {
            background: linear-gradient(rgb(19, 3, 255), 40%, rgb(212, 0, 255));
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .logOut {
            color: white;
            text-decoration: none;
            font-weight: bold;
            position: absolute;
            right: 13;
            top: 40;
            border: 2px solid white;
            border-radius: 18px;
            padding: 12px;
            background: linear-gradient(rgb(212, 0, 255), 20%, rgb(19, 3, 255), 80%, rgb(212, 0, 255));
        }
    </style>
    <body>
        <h1 style="color: white; padding-top: 23px; font-family: arial; font-size: 53px;" align="center" >Welcome To Our Website</h1>

        <a href="logout.php" class="logOut"> LOGOUT </a>

        <p>Welcome <?php echo $_SESSION['username']; ?> </p>
    </body>
</html>