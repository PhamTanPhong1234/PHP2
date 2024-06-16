<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 File Not Found</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="image/png" href="../Img/rAKIA.png">
    <link rel="stylesheet" href="Asset/themify-icons/themify-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        html {
            background-color: #f6f6f6;
        }

        .left {
            margin-left: 30px;
        }

        #main {
            margin-top: 11%;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            height: 60vh;
            background-color: white;
            border-radius: 10px;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
        }

        .logo {
            width: 100%;
            padding-top: 40px;
        }
        h1{
            font-size: 100px;
        }
        .notification{
            padding-top: 15px;
            font-size: 20px;
        }
        .return_button{
            margin-top: 50px;
        }
        .return_button a{
            text-decoration: none;
            padding: 10px 20px;
            background-color: #000;
            color: white;
            border-radius: 10px;
            /* border: 3px solid #0AB5F7 */
            transition: 0.1s;
        }
    </style>
</head>

<body>

    <div id="main">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Sony_logo.svg" class="" style="margin-left:25px; margin-top: 50px;" width="40%" alt="">
        </div>
        <div class="big_number left">
            <h1>4<span style="color: #ccc;">0</span>4</h1>
        </div>
        <div class="notification left">
            Không tìm thấy trang
        </div>

        <div class="return_button left">
            <a href="./index.php?controller=home&action=index"><i class="ti-angle-left"></i> Quay lại trang quản trị</a>
        </div>

    </div>


</body>

</html>