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