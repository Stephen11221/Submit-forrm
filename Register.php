<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$done=mysqli_connect($server,$username,$password,$database);

if(isset($_POST['enter']))
{
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST ['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];

    $data=mysqli_query($done,"INSERT INTO 
    enrollment(fullname,phonenumber,email,gender,course)VALUE('$fullname','$phonenumber','$email','$gender','$course')");


}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <style>
        main {
            background-color: gray;
        }
        
        span {
            margin-left: 0;
            margin-right: 0;
        }
        
        p {
            word-spacing: 0px;
        }
        
        form {
            width: 850px;
            background-color: white;
            padding: 20px;
            margin: 8% auto 0;
            border-style: groove;
            border-radius: 20px;
        }
        
        label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <main class=" p-5">
            <h2>JULY SOFTWARE ENGINEEERING BOOTCAMP</h2>


            <span><i class="fa fa-calendar fa-4x">    </i></span>
            <span> 20 <Sup>th</Sup>July 2022</span> <br>
            <span><i class="fa fa-map-marker fa-4x "></i></span>
            <span>Zalego Academ <br>Deven Plaza</span>



        </main>
    </div>
    <center>
        <p> Looking for a place kickstart your carrer in Technology? <br> Whether you're a local new in town or just cruising throught we've got <br> loads of great tips and event for you.</p>
    </center>

    <form action="register.php" method="post" class="shadow">
        <center>
            <h2>Sign up today?</h2>
        </center>
        <div class="row">
            <div class="col-lg-6">
                <label for=""> Full Name:</label>
                <input name="fullname" type="text" class="form-control" id="">

            </div>
            <div class="col-lg-6">
                <label for="">phonenumber</label>
                <input name="phonenumber" type="number" class="form-control">
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <label  for="">Email Address</label>
                <input name="email" type="text" class="form-control">

            </div>
            <div class="col-lg-6">
                <label for="">What's your gender</label>
                <select name="gender" class="form-control">
                    <option> <b> --Select your gender-- </b></option>
                    <option>MALE</option>
                    <OPtion>FEMALE</OPtion>
                    

                </select>

            </div>
            <p>In order to complete your registration to the bootcamp you are required to select one course you will be <br> undertaking Please NOTE that this will be your learning track durring 2 -weeks immersion </p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label for="">What's your preferred course?</label>
                <select name="course" class="form-control" id="">
                    <option ><b>--Select your course--</b></option>
                    <option > Cyber security</option>
                    <option >Web development </option>
                


                </select>
            </div>

        </div>
        <p>You agree by providing your information you understand all our data policy and protection policy <br> outlined in our Terms & condition and Privicy Policy statements </p>
        <input type="checkbox">
        <label for="">  Agree terms and condition</label> <br>
        <br> <button type="submit" name="enter" class="btn btn-primary">Submit application </button>



    </form>
    <br>

    <center>

        <p>Subscribe to get information lastest about <br> Zalego Academy</p>
    </center>
    <center>
        <input type="email"  placeholder="Your email address">
        <button type=" submit" class="btn btn-primary ">Subscribe</button>
    </center>
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js "></script>
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js "></script>
</body>

</html>