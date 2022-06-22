<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);

 if(isset($_POST['submitbutton']))
 {
     $email=$_POST['email'];

    $insertdata=mysqli_query($conn, "INSERT INTO subcribers(email)VALUE('$email') " );
    if($insertdata)
    {
        echo "works";
    }
    else{
        echo "nope";
    }
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">

</head>

<body>

    <!-- <div class="container">
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow"> 
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Zalego Academy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-link active">Home</a>
                        <a href="#" class="nav-link">About us</a>
                        <a href="#" class="nav-link">Contact us</a>
                    </div>

                </div>
            </div>

         </nav> --> 

        <br>
        <main class="mb-4 p-5 bg-light">
            <h1>About Us</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias perferendis, animi debitis eaque soluta dicta fuga, blanditiis nemo qui sit a! Reprehenderit repellendus deserunt amet tenetur beatae molestiae laboriosam ullam?</p>
        </main>
        <div class="container">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <h1>our program</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate ullam minus nisi doloribus ex? Commodi nihil impedit aperiam laboriosam. Rem error quidem modi fuga vel reiciendis repudiandae praesentium odit numquam voluptatum
                        excepturi amet, eveniet laudantium accusamus maxime necessitatibus! Cumque, nam. Nulla dolore, rerum vero iusto pariatur reiciendis illum. Facilis, expedita?</p>
                </div>


                <div class="mb-3 col-lg-6"> <img src="images/download.jpg" alt=""></div>

            </div>

        </div>
        <h1>the programs</h1>

        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Skill Discovery</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sunt tenetur voluptate repudiandae minima recusandae pariatur eos consectetur alias odit.</p>

                        <button class="btn  btn-primary">View details</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Upskilling program
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sunt tenetur voluptate repudiandae minima recusandae pariatur eos consectetur alias odit.</p>

                        <button class="btn  btn-primary">View details</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow margin-5x" style="width: 18rem" margin="0">
                    <div class="card-body">
                        <h5 class="card-title">path finding program

                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sunt tenetur voluptate repudiandae minima recusandae pariatur eos consectetur alias odit.</p>

                        <button class="btn  btn-primary">View details</button>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <h2>
        <center> path finding programs </center>
    </h2>
    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-3">
            <p class="align text -center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aut iure quibusdam magnam, quasi dolorem eos voluptas velit alias dolores vero necessitatibus nostrum libero dolorum nesciunt iusto quas cumque laudantium.
            </p>
        </div>
        <div class="col-lg-3">

        </div>
    </div>


    <form action="aboutus.php" method="POST">
        <div class="row">
            <div class="col-lg-12">
                <center> <label for="">Email</label>
                </center>
                <input type="email" name="email" class="form-control">
                <button type="submit" name="submitbutton" class="btn btn-primary">Subscribe  </button>



            </div>
        </div>
    </form>


    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

</body>

</html>