<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">


    <style>
        .body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    <!--header-->
    <header>
        <div class="container-fluid">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 flex-grow-1 bd-highlight">
                    <a href="#">
                        <img src="assets/img/d.png" alt="" width="100" height="100">
                    </a>
                  
                </div>
                <div class="p-2 bd-highlight"><a href="#" class="text-decoration-none">
                        Portfolio
                    </a></div>
                <div class="p-2 bd-highlight"><a href="#" class="text-decoration-none">
                        Documentation
                    </a></div>
                <div class="p-2 bd-highlight"><img src="assets/svg/menu.svg" alt="" width="50" height="50"></div>
                <div class="p-2 bd-highlight"><button type="button" class="btn btn-primary">Sign in</button></div>
            </div>

        </div>
    </header>
    <!--end header-->
    <!-- start nav-bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar w/ text</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Navbar text with an inline element
                </span>
            </div>
        </div>
    </nav>
    <!-- end nav-bar -->

    <!-- start section -->
    <section>
        <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
        </div>
    </section>
    <!-- end section -->
    <!-- Search -->
    <div class="container text-center">

        <div class="row justify-content-md-center">
            <div class="col">
                <div class="input-group">
                    <input class="form-control py-2 rounded-pill mr-1 pr-5 text-center" type="search" placeholder="search">
                    <span class="input-group-append">
                        <button class="btn rounded-pill border-0 ml-n5" type="button">
                            <i class="fas fa-search"> </i>
                        </button>
                    </span>
                </div>

            </div>
        </div>
    </div>
    <!-- End Search -->
    <section class="fixed-bottom">
        <footer >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h6>Jakarta-Indonesia</h6>
                    </div>
                </div>
                <div class="justify-content">
                    <div class="d-flex justify-content-center">
                        <div class="row text-start">
                            <div class="col-4 ">
                            <h6>Setelan</h6>
                            </div>
                            <div class="col-4">
                            <h6>Privacy</h6>
                            </div>
                            <div class="col-4 text-end">
                            <h6>Persyaratan</h6>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="justify-content">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-4">
                            <h6>Periklanan</h6>
                            </div>
                            <div class="col-4">
                            <h6>Bisnis</h6>
                            </div>
                            <div class="col-4">
                            <h6>Tentang</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>