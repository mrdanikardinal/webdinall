<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dinall.css">
    <!-- <link rel="stylesheet" href="scss/dinall.scss"> -->
    

    <title>Hello, world!</title>
</head>

<body>
    <!-- header -->
    <div class="container-fluid py-2">
        <header>
            <div class="d-flex bd-highlight mb-3 align-items-center">
                <div class="p-2 bd-highlight">
                    <a href="#">
                        <img src="assets/img/d.png" alt="" width="100" height="100">
                    </a>
                </div>
                <div class="p-2 bd-highlight">
                    <h1>WEB Dinall</h1>
                </div>
                <div class="ms-auto p-2 bd-highlight">
                    <a href="#" class="text-decoration-none">
                        Portfolio
                    </a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="#" class="text-decoration-none">
                        Documentation
                    </a>
                </div>
                <div class="p-2 bd-highlight"><a href="#"><img src="assets/svg/menu1.svg" alt="" width="50" height="50"></a></div>
                <div class="p-2 bd-highlight"><button type="button" class="btn btn-primary">Sign in</button></div>
            </div>
        </header>
    </div>
    <!-- end header -->
    <!-- search -->
    <div class="container-fluid py-2">
        <section>
            <div class="row">
                <div class="col-12 text-center">
                    <img src="assets/img/example.png" alt="" width="279" height="79">
                </div>
            </div>
            <div class="container py-5">
                <div class="row">
                    <div class="col-12">
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
                </div>

            </div>
        </section>
    </div>
    <!-- end search -->
    <!-- button dooble -->
    <section>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end button dooble -->
    <!-- notif -->
    <section>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <p>Layanan iklan</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <p>Layanan Edukasi</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <div class="slider round"></div>
                        </label>
                        <!-- <em>Enable Dark Mode!</em> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end notif -->
    <!-- footer -->
    <section class="fixed-bottom">
        <footer>
            <div class="d-flex bd-highlight mb-3 align-items-center border-bottom">
                <div class="p-2 bd-highlight">
                    <a href="#" class="text-decoration-none">
                        <h6>Bogor-Indonesia</h6>
                    </a>
                </div>

            </div>
            <div class="d-flex bd-highlight mb-3 align-items-center">
                <div class="p-2 bd-highlight">
                    <a href="#" class="text-decoration-none">
                        <p>Tentang</p>
                    </a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="#" class="text-decoration-none">
                        <p>Periklanan</p>
                    </a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="#" class="text-decoration-none">
                        <p>Bisnis</p>
                    </a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="#" class="text-decoration-none">
                        <p>Cara Kerja Web-Dinall</p>
                    </a>
                </div>
                <div class="ms-auto p-2 bd-highlight">
                    <a href="#" class="text-decoration-none">
                        <p>Privasi</p>
                    </a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="#" class="text-decoration-none">
                        <p>Persyaratan</p>
                    </a>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="#" class="text-decoration-none">
                        <p>Setelan</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p>
                        Copyright © Web dinall 2017 - {{ date('Y') }}
                    </p>
                </div>
            </div>

        </footer>
    </section>

    <!-- end footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/dinall.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>