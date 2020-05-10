<?php


error_reporting(E_ERROR | E_PARSE);
$Rollno=$_POST['rollno'];
$classname=$_POST['class'];




$school=mysqli_connect("localhost","root","amar@2002","school") or die('wont work');

$total=mysqli_query($school,"update $classname set total=english+sl+physics+chemistry+maths+computer");
$query="select * from $classname where regno='$Rollno' ";



$data_storage=mysqli_query($school,$query);

$data=mysqli_fetch_array($data_storage);

if($data==0){

    echo "the rollnumber and class doesnt exist";
    exit();
    
    }



echo "
<div class='page'>
    <div class='top'>
        <a href='index.html'>back</a>


        <h1>results </h1>
     

    </div>


    
";


echo " 
<div class='bottom'>

<table>
<tr>

<th colspan='2'> Roll number of candidate : ".$data["regno"]. "</th>


</tr>



<tr>

                          
<th>".$data["name"]. "</th>
<th>class :&nbsp;&nbsp; $classname</th>


</tr>




<tr>
<th>English</th>
<th>".$data["english"]. " </th>


</tr>
<tr>
<th>Second language</th>
<th>".$data["sl"]. "</th>


</tr>
<tr>
<th>Mathematics</th>
<th>".$data["maths"]. "</th>


</tr>
<tr>
<th>Physics</th>
<th>".$data["physics"]. "</th>


</tr>
<tr>
<th>Chemistry</th>
<th>".$data["chemistry"]. "</th>


</tr>
<tr>
<th>Computer science</th>
<th>".$data["computer"]. "</th>


</tr>


<tr>
<th colspan='1'>Total</th>
<th colspan='1'>".$data["total"]. "</th>
</tr>

</table>



</div>





";


mysqli_close($school);

?>


<!--  
               
                   



                        -->
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



          

    <style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap');
    
    *{
        font-family: 'Montserrat', sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        text-transform: uppercase;
        text-decoration: none;
        font-weight: 300;

    }


    .top{
        width: 100vw;
        height:20vh;
        background: linear-gradient(to right, #12c2e9, #c471ed, #f64f59); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        display: flex;
    
        color: rgb(255, 255, 255);
        align-items: center;
    }


    .top h1{

  text-align: center;
  display: block;
  margin-left: 50px;
    }

    .bottom{

        width: 100vw;
        height:70vh;
        background-color: rgb(255, 255, 255);
        display: flex;
      justify-content: center;

    }


    a{
color: black;
        background-color: rgb(216, 214, 214);
        padding: 10px 30px;
        border-radius: 3px;
       
        margin-right: 5px;
    }


    .top a{
       margin-left: 50px;
       background-color: rgb(226, 221, 221);
    }

table{
    font-family: 'Montserrat', sans-serif;
    font-weight: 300;
width: 80%;
height: 70vh;
    
    margin:30px auto;
   border-collapse: collapse;
   
}


tr{
    height: 20px;
    border-radius: 20px;

}

th{

    background-color: rgb(207, 205, 205);
    border: 0.5px solid rgb(255, 255, 255);
}
    
    
    </style>

</body>
</html>