<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tax Payment System | Home Page</title>
    
    <!-- Font Awesome included for icons. -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <script src="script.js"></script>

    <!-- Bootstrap included css jquery and javascript all included -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    
    <style>
        .navbar li:hover{
            background-color: silver
        }
        #login_form{
            margin: auto;
            width:450px;
            border-radius:20px;
            border:2px solid #ccc;
            padding:10px 40px 25px;
            background-color:#b6e6ff;
        }
        input[type=text],input[type=password]{
            width:96.5%;
            padding:10px;
            margin-top:8px;
            border:1px solid #ccc;
            padding-left:5px;
            font-size:20px;
        }
        input[type=submit]{
            width:100%;
            background-color:#2f90ff;
            color:#fff;
            border:2px solid #white;
            padding:10px;
            font-size:20px;
            cursor:pointer;
            border-radius:5px;
        }

    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="img/Applogo.png" height="80px" width="120px" alt="Logo not found" style="border-radius: 20px; margin-left: 20px;">
        <div class="container">
        <a class="navbar-brand" style="font-size:24px; font-family:cursive" href="#">Tax Submission System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
                    <li class="nav-item">
                        <a class="nav-link ml-2 " style="font-size:18px;" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:18px;" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2" style="font-size:18px;" href="#">Contact Us</a>
                    </li>
                </ul>
                <!-- <ul class="nav navbar-nav navbar-right active" id="login-panel">
                    <li><a href="admin.php" class="login m-3"style="font-size:18px;"><i class="fa fa-user"></i> ADMIN LOGIN </a></li>
                </ul> -->
                <ul class="nav navbar-nav navbar-right" id="login-panel">
                    <li><a href="user.php" class="login m-3"style="font-size:18px;"><i class="fa fa-user"></i> USER LOGIN </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <img src="img/d.jpg" alt="Tax payment System" width="100%" height="250px">
<div class="container">
    <div class="row" style="margin-top: 25px;">
    <div class="col-6">
    <div class="card" style="background-color:#918698;">
        <div class ="card-header" style="text-align:center; color:#add8e6;">
             Tax Management
        </div>
        <div class="card-body">
                           The objective of Tax Management is to comply with the provisions <br/>
                            of Income Tax Law and its allied rules.<br/>
                            Tax Management deals with filing of Return in time,<br/>
                            getting the accounts audited, deducting tax at source etc.<br/>
                            Tax Management relates to Past ,. Present, Future.<br/>
                            Tax Management helps in avoiding payment of interest, penalty, prosecution .<br/>
                             Tax Management is essential for every assessee<br/>
        </div>
    </div>
    </div>

    <div class="col-6">
        <div class="card" style="background-color:#918698;">
            
            <div class = "card-header" style="text-align:center; color:#add8e6;">
              Tax Submission and payment
            </div>
            <div class="card-body">
                             A tax return is the completion of documentation that calculates <br/>
                          an entity’s income earnedwith the amount of tax payable to the government, <br/>
                          government organisations or to potential taxpayers.<br/>
                           Specific tax forms are intended to be used by taxpayers,<br/>
                          or private entities that are required to report information<br/>
                          on the tax liabilities together with income earners, <br/>
                          businesses and companies
            </div>
        </div>
    </div>   
</div>

</div>
</body>
</html>