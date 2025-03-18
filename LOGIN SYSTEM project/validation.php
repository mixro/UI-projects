<?php include"model.html";

session_start();

$conn = new mysqli('localhost','root','','registration');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "select * from usersregistration where username = '$name' && password = '$password'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
   echo"welcome $name";
}else{
   echo"hey be serious";
}


?>