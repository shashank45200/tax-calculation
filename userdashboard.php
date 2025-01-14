

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tax Submission System | User DashBoard</title>
    
    <!-- Font Awesome included for icons. -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <script src="script.js"></script>

    <!-- Bootstrap included css jquery and javascript all included -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    
    <style>
         body {
            background-color: #F0F0F0; /* Specify your desired background color using a color code or name */
        }
        .navbar li:hover{
            background-color: silver
        }
        #taxcalc_form{
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
                <ul class="nav navbar-nav navbar-right" id="logout-panel">
                    <li><a href="logout.php" class="logout m-3"style="font-size:22px;"><i class="fa fa-user"></i> LOGOUT </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container"> 

    <form action="userdashboard.php" method="post" style="width: 60%;margin-left:20%;margin-top:50px;padding:50px;background-color:aliceblue;">
        <h2 style="text-align: center; font-family:cursive; margin-bottom: 50px; color: goldenrod;">Tax Calculation</h2>
        
        <div class="form-group row">
            <label for="inputIncome" class="col-sm-4 col-form-label">Total Income</label>
            <div class="col-sm-8">
              <input type="text" name="income" class="form-control" id="inputIncome" placeholder="Your Income" required >
            </div>
        </div>       
        <button type="submit" class="btn btn-primary btn-lg" name="submit">Calculate Tax</button>
    </form>          
</div>
<h1>upload proof for returns</h1>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Choose a file to upload:</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload">
    </form>
<?php

if(isset($_POST['submit'])) {

    $income = $_POST['income'];

    }
    if($income<250000){
        $tax=0;
    }
    if($income>=250000 && $income<500000){
        $tax=$income*(0.05);
    }
    if($income>=500000 && $income<1000000){
        $tax=$income*(0.05);
    }
    if($income>=1000000){
        $tax=$income*(0.30);
    }

    echo  '<h1 style="text-align:center;margin:20px 0px;font-family:cursive;">  Tax on your salary is calculated to be :' .$tax.' </h1>';

?>


<div style="text-align:center;font-family:cursive;">
       <button ><a href="submit.php">Pay & Submit</a></button>
</div>



</body>
</html>