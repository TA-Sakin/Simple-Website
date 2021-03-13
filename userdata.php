<?php
$con = mysqli_connect('localhost','root');
if ($con) {
  echo "Conenction successful";
}
else{
  echo "No connection";
}

mysqli_select_db($con, 'project');
$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "insert into userinfodata(user, email, pass)
values('$user', '$email', '$pass')";

echo "$query";
mysqli_query($con, $query);
header('location:index.html');



?>
