<?php
//load LayoutTrangTrong.php
$this->layoutPath = "LayoutTrangTrong.php";
?>
<div class="template-customer">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="Asset/Img/rAKIA.png">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Contact - Rakia Studio</title>
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Asset/themify-icons/themify-icons.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* header */


        /* @media */
        /* Header */
        /* slider */
        #slider {
            margin-top: 5em;
            width: 100%;
            height: 80vh;
            background: url('https://ik.imagekit.io/tvlk/blog/2022/05/Wisata-Vietnam-di-Da-Nang-Traveloka-Xperience-7.jpg') top center no-repeat;
            background-size: 100%;
        }

        .slider {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #title {
            width: 75%;
            text-align: center;
        }

        .title {
            color: #fff;
            font-weight: 600;
            width: 500px;
            font-size: 70px;
            margin: auto;
        }

        .page {
            color: #fff;
            font-weight: 300;
            width: 500px;
            padding-top: 20px;
            padding-bottom: 30px;
            margin: auto;
            /* font-size: 50px; */
        }

        .hover {
            width: 150px;
            height: 30px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            color: #fff;
            border-radius: 30px;
            background: linear-gradient(90deg, #1495d1, #22cfff, #AFD3E2);
            transition: 0.3s;
        }

        .hover:hover {
            font-size: 15px;
        }

        /* slider */
        /* body */

        /* body1 */
        #body1 {
            width: 100%;
            padding-bottom: 100px;
        }

        #body1 .address {
            width: 90%;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: space-between;
        }

        #body1 .address .text-box {
            width: 25%;
            text-align: center;

        }

        #body1 .address .text-box .infor {
            width: 100%;
            font-size: 20px;
            font-weight: 600;

        }

        #body1 .address .text-box p {
            color: #2F3132;
            margin-top: 15px;
            line-height: 35px;
            font-size: 15px;
        }

        /* body1 */
        /* line-body */
        .line-body {
            width: 80%;
            display: flex;
            justify-content: space-between;
            margin: auto;

        }

        .line-body .line {
            width: 40%;
        }

        .line-body h1 {}

        /* line-body */

        /*body2 */
        #body2 {
            margin-top: px;
            width: 100%;
            /* background-color: rgb(255, 0, 0); */
            height: 50vh;

        }

        #body2 .body2-wrap {
            width: 90%;
            float: left;
            height: 60vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #body2 .body2-wrap .commit {
            width: 50%;
            text-align: left;

        }

        #body2 .body2-wrap .video-wrap {
            width: 50%;
            height: 80%;
            background-color: #000;
            display: flex;
            align-items: center;
        }

        .commit h1 {
            margin: 12px 0;
            width: 70%;
            background: linear-gradient(to right, #30CFD0 0%, #5e08c8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .commit form {
            width: 80%;
            height: 100%;
            float: right;
        }


        .commit #name {
            width: 100%;
            height: 30px;
            padding-left: 10px;
            border: #403f3f 1px solid;
            margin: 9px 0;
        }

        .commit #button {
            margin-top: 30px;
            width: 100px;
            height: 30px;
            background-color: #000;
            border-radius: 2px;
            font-weight: 300;
            color: #fff;
            transition: 0.3S;
        }

        .commit #button:hover {
            background: none;
            border: 1px black solid;
            color: #000;
        }



        /*body2 */
        /* body */
        /* footer */

        #footer {
            width: 100%;
            height: 100%;
            background-color: #adadad;
            text-transform: uppercase;
        }

        #footer .footer-infor {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            font-weight: 500;
            justify-content: space-between;
        }

        #footer .footer-infor .site-box {
            margin-top: 100px;
            width: 25%;
            height: 200px;
        }

        #footer .footer-infor .site-box a {
            font-weight: 600;
            text-decoration: none;
            font-size: 15px;
            color: black;
            line-height: 35px;
        }

        #footer .footer-infor .site-box a:hover {
            text-decoration: underline;

        }

        #footer .footer-icon {
            width: 100%;
            text-align: center;
        }

        #footer .footer-icon .box {
            width: 15%;
            height: 100px;
            margin: auto;
            display: flex;
            justify-content: space-between;
        }

        #footer .footer-icon .box i {
            font-size: 25px;
            font-weight: bold;
        }


        /* footer */
    </style>
</head>

<body>
    <main id="main">
        <div id="body">
            <div id="body2">
                <div class="body2-wrap">
                    <div class="video-wrap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245367.87556391515!2d107.91331385924296!3d16.072075930032714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0x1df0cb4b86727e06!2zxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1687004927397!5m2!1svi!2s" width="100%" height="100%" style="border:1px solid rgb(64, 63, 63);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="commit">
                        <form action="">
                            <h1>Write the questions here and we come back ASAP.</h1>
                            <input id="name" class="Fname" type="text" placeholder="First Name"><br>
                            <input id="name" class="Lname" type="text" placeholder="Last Name"><br>
                            <input id="name" class="email" type="email" placeholder="Email"><br>
                            <input id="name" class="questions" type="text" placeholder="Write your questions"><br>
                            <input id="button" type="button" value="Summit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
</div>