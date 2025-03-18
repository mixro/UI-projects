<?php include"model.html";
$username=$_POST["uname"];
$password=$_POST["psw"];

$conn = new mysqli('localhost','root','','login');
$reg = "insert into login(username, password) values ('$username', '$password')";

mysqli_query($conn, $reg);
if (mysqli_query($conn, $reg)) {
    echo "registration succesfully";
}else{
    echo"connection failed";
}
?>