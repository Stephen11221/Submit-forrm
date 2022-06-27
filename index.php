<?php include(' process.php')?>
<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap </title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">

</head>

<body>
    <!-- navigation bar -->
    <br>
    <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav">
                    <a href="#" class="nav-link active">Home</a>
                    <a href="aboutus.html" class="nav-link">About us</a>
                    <a href="#" class="nav-link">Contact us</a>
                </div>

            </div>
        </div>

    </nav> -->
    <!-- end navigation bar -->
     <main class="p-5 mb-4 bg-lightext-dark ">
        <h1>Welcome, Stephet n Muema</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia autem laboriosam incidunt est sed animi labore ut voluptatum ex, possimus qui similique maiores quo quod? Labore molestiae illum consequatur ut, vel fugit placeat voluptas beatae possimus
            itaque animi recusandae quasi, asperiores a pariatur dolor quibusdam, cupiditate sunt repudiandae neque.</p>
        <button class="btn btn-primary">Learn more</button>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1>header 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla hic deserunt nostrum? Ipsa ex dolorem quibusdam suscipit, maxime reiciendis quia incidunt odio dolore tempora dolor velit, ut eveniet fuga illo magni quos. Expedita, eaque
                    aspernatur! Iusto rerum assumenda animi soluta est, eaque ab exceptu ri. Deserunt rerum ratione laboriosam commodi ex!</p>
                <button class="btn btn-primary">Learn more</button>
            </div>
            <div class="col-lg-4">
                <h1>Header 2</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus enim aut neque non iusto veritatis tenetur inventore est nesciunt quas dolorem architecto aliquid quo corporis error delectus placeat dolor, vitae pariatur id voluptatibus
                    eligendi. Natus atque, nostrum vitae, ipsam architecto recusandae corrupti fugit ipsa repudiandae dolores sint eveniet et fuga!</p>
                <button class="btn btn-primary">Learn more</button>


            </div>
            <div class="col-lg-4">
                <h1>Header 3</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus enim aut neque non iusto veritatis tenetur inventore est nesciunt quas dolorem architecto aliquid quo corporis error delectus placeat dolor, vitae pariatur id voluptatibus
                    eligendi. Natus atque, nostrum vitae, ipsam architecto recusandae corrupti fugit ipsa repudiandae dolores sint eveniet et fuga!</p>
                <button class="btn btn-primary">Learn more</button>
            </div>
        </div>
        <br>

        <!-- Contact us -->
        <div class="row pt-5">
            <h1>Contact us</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptatem minus rerum culpa quasi repudiandae optio officia. Consectetur facere doloremque vitae eligendi minus, beatae dolor tempore optio quaerat non aspernatur.
            </p>
            <form action="index.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control"  name="firstname" placeholder="enter your firstname ">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="">Last name</label>
                        <input type="text" class="form-control" name="lastname" placeholder=" enter your last  name">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for=""> Phone number</label>
                        <input type="tel" class="form-control" name="phonenumber">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="row">

                        <div class="mb-3 col-lg-12">
                            <label for="">Massege</label>
                            <textarea cols="30" rows="5" name="message" class="form-control"></textarea>

                        </div>
                    </div>
                </div>
                <button type="submit" name="submitbutton" class="btn btn-primary">Send a Massege  </button>

            </form>


        </div>

        <!-- end contact us -->
    </div>

    <hr>
    <footer>
        &copy; Coppyright
    </footer>


    <!-- <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script> -->

    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
</body>

</html> 