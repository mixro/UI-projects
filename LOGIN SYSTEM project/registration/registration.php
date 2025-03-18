<?php

session_start();

$conn = new mysqli('localhost','root','','registration');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "select * from usersregistration where username = '$name'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    echo"Username Already Taken";
}else{
    $reg = "insert into usersregistration(username, password) values('$name','$password')";
    mysqli_query($conn, $reg);
    echo"Registration succesfully";
}

?>





<html>
    <head>
        <title>Server Side | Micep International </title>
    </head>
    <style>
        body {
            background: linear-gradient(rgb(19, 3, 255), rgb(212, 0, 255));
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .home {
            color:aliceblue;
           text-align: center;
            top: 0;
            color: pink;
            text-decoration: none;
        }
    </style>
    <body>


    <div class="navigation">
    <a href="homepage.php" class="home"> HOME </a>
    <a href="logout.php" class="home" onclick="logout()"> LOGOUT </a>
    </div>

    <script>
        function logout() {
            confirm("You Want to log Out?");
        }
    </script>


        <h1><center>Welcome To MiDIT</center></h1>
        <br />
        <p>welcome <?php echo"$name"; ?></p>
    </body>
</html>