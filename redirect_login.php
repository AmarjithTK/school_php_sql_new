<?php



$username=$_POST['username'];
$password=$_POST['password'];

if($username=='amarjith' and $password=='spacex'){
header("Location: logged_in.html");
}
else
echo "you have entered a wrong username and password";

?>