<?php

$regno=$_POST['rollno'];
$classname=$_POST['classname'];



$name=$_POST['name'];
$eng=$_POST['eng'];
$sl=$_POST['mal'];
$che=$_POST['che'];
$phy=$_POST['phy'];
$maths=$_POST['maths'];
$cs=$_POST['cs'];



$school= mysqli_connect("localhost","root","amar@2002","school") or die('wont work');
$query="insert into $classname (regno,name,english,maths,physics,chemistry,sl,computer) values('.$regno.','$name','.$eng.','.$sl.','.$che.','.$phy.','.$maths.','.$cs.')";
if($query==0){
    echo "the table does not exist or you have entered a wrong datatype";
    exit();
}
$data_storage=mysqli_query($school,$query);

echo "done";
mysqli_close($school);


?>
