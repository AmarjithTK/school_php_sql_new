<?php
//error_reporting(E_ERROR | E_PARSE);

echo "<!DOCTYPE html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
</head>
<body>


        <div class='page'>
            <div class='top'>
           
                <h1>create or modify database</h1>
             
      
            </div>";







$query=$_POST['query'];          

$mysqli = mysqli_connect("localhost","root","amar@2002","school");

if ($mysqli == false) {
echo "not connected";
    die("Connection failed: " . mysqli_connect_error());
}


$value=mysqli_query($mysqli,$query);

// Perform a query, check for error
if (!$mysqli -> query($query)) {
 $errors = ($mysqli -> error);
}
else
$errors="success";



echo "

<div class='bottom'>

<form method='post'>


    <input type='text' name='query'  placeholder='type your query'>

    <input type='submit' value='Enter'>


</form>
<div class='error-list'>

<h3>$errors</h3>

</div>

</div>
</div>

";




$mysqli -> close();


?>





      

    <style>
@import url('https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap');

    *{




        font-family: 'Poppins', sans-serif;


        padding: 0;
        margin: 0;
        box-sizing: border-box;
        text-transform: uppercase;
        text-decoration: none;
       
    }


    .top{
        width: 100%;
        height:30vh;
        background: linear-gradient(to right, #12c2e9, #c471ed, #f64f59); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        display: flex;
      
        color: rgb(255, 255, 255);
        align-items: center;
    }

    H1{
        font-weight: 300;
        margin: 0 auto;
    }

    .bottom{

        width: 100%;
        height:auto;
        background-color: rgb(255, 255, 255);
        display: flex;
        justify-content: center;
        align-content: center;
        flex-wrap: wrap;
        color: rgb(0, 0, 0);
   
    }

    form{
        width: 60%;
    }





    input{

border: none;

}




input[type='text'],  input[type='password'],select{
width: 100%;

padding: 12px 20px;
margin:20px 0;
border-radius: 3px;
background-color: rgba(214, 214, 214, 0.877);
border: 0;

}




input[type='submit']{
color: rgb(255, 255, 255);
    background-color: #c471ed;
    padding: 12px 20px;
    border-radius: 3px;
    margin-right: 5px;
    outline: none;
    width: 100%;
    margin-top: 10px;
}


.error-list{
margin-top: 20px;
    width:60%;
    height: 200px;
    
    border-radius: 3px;
background-color: rgb(0, 0, 0,0.5);



}

.error-list h3{
padding: 20px;
font-weight: 400;
font-size: 15px;
text-transform: none;

}
    
    
    </style>

</body>
</html>
