<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <div class="page">
        <div class="login">



            <form action="redirect_login.php" method="post">

                <h1>login</h1>
                <input type="text" name="username" id="" placeholder="username"><br>
                <input type="password" name="password" id="" placeholder="Password"><br>
                <input type="submit" value="Login">




            </form>


        </div>

    </div>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:300,400,500&display=swap');

        * {

            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-transform: uppercase;
            text-decoration: none;
            font-family: 'Raleway', sans-serif;
        }





        h1 {

            font-family: 'Montserrat', sans-serif;
            font-weight: 100;
            text-align: center;
            margin-bottom: 20px;
            color: #000;
        }

        .page {
            width: 100vw;
            height: 100vh;

            background: linear-gradient(to right, #12c2e9, #c471ed, #f64f59);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            display: flex;
            justify-content: center;
            color: rgba(0, 0, 0, 0.842);
            align-items: center;
        }

        .login {

            width: 30vw;
            height: 90vh;
            background-color: rgb(255, 255, 255);
            display: flex;
            justify-content: center;
            color: rgb(255, 255, 255);
            align-items: center;
            border-radius: 5px;
        }

        form {



            width: 300px;


        }

        input {

            border: none;

        }





        input[type='text'],
        input[type='password'] {
            width: 100%;
            padding: 12px 20px;
            margin: 20px 0;
            border-radius: 3px;
            background-color: rgba(207, 203, 203, 0.877);

        }


        input[type='submit'] {
            color: rgb(255, 255, 255);
            background-color: #c471ed;
            padding: 12px 20px;
            border-radius: 3px;
            margin-right: 5px;
            outline: none;
            width: 100%;
            margin-top: 10px;
        }
    </style>

</body>

</html>