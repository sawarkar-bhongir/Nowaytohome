<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <title>Home | Axiom EV Products</title>
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
          width: 100%;
          height: 100%;
        }
        </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="desk-menu">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand " href="#">
                        <img src="./img/favicon_axiom.png" alt="Axiom EV Logo" width="30" height="30"
                            class="d-inline-block align-text-center">
                        Axiom
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 desk-menu">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./products.html">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#capability">Capability</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./service.html">Service</a>
                        </li>
                        <li class="nav-item">

                        </li>

                    </ul>
                </div>


                <div>
                    <button class="btn btn-dark text-white mobile-menu" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                            class="fa fa-bars"></i></button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 id="offcanvasRightLabel">Menu</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="./index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./products.html">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./service.html">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </nav>

    </header>
    <main>
        <div class="container">
            <div class="row">
                <p class="mb-3">Dear<em><?php echo $_POST["name"]; ?></em></p>

                <p class="mb-3">We just received your message. Thank you very much for writing to us. </p>
                <p class="mb-3">We are working on your request and will get in touch as soon as possible.</p>
                <p class="mb-3">If you have any urgent issues, please contact our staff by phone ??? Toll free 1800 572 4748 or Enquiry: 99590 55158. We are happy to be of your assistance. </p>
                <p class="mb-3">Kind regards, 

Your friends, <a href="/index.html">Axiom</a></p>

            </div>
        </div>
    </main>
    <footer class="bd-footer  bg-dark text-white text-center">
        <div class="container py-5">
            <div class="row">

                <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/">Home</a></li>
                        <li class="mb-2"><a href="#">About</a></li>
                        <li class="mb-2"><a href="#">Service</a></li>
                        <li class="mb-2"><a href="#">Contact</a></li>
                        <li class="mb-2"><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Chargers</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">48V06A</a></li>
                        <li class="mb-2"><a href="#">48V10A</a></li>
                        <li class="mb-2"><a href="#">48V15A</a></li>
                        <li class="mb-2"><a href="#">48V18A</a></li>
                        <li class="mb-2"><a href="#">48V25A</a></li>
                        <li class="mb-2"><a href="#">48V30A</a></li>


                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Chargers</h5>
                    <ul class="list-unstyled">

                        <li class="mb-2"><a href="#">60V06A</a></li>
                        <li class="mb-2"><a href="#">60V10A</a></li>
                        <li class="mb-2"><a href="#">60V15A</a></li>
                        <li class="mb-2"><a href="#">72V10A</a></li>
                        

                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>DC-DC Converters</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">48V/12V-15A</a></li>
                        <li class="mb-2"><a href="#">48V/12V-30A</a></li>

                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Privacy</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="./Terms-Conditions.html">Terms & Conditions</a></li>
                        <li class="mb-2"><a href="./Disclaimer.html">Disclaimer</a></li>
                        <li class="mb-2"><a href="./privacy-policy.html">Privacy & Policy</a></li>
                     
                
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark ">
            <div class="row text-center">
                <ul class="list-unstyled small text-muted ">
                    <li class="mb-0" py-2>Designed and built with all the love by <a
                            href="https://github.com/sawarkar-bhongir"> Axiom. </a> </li>

                </ul>
            </div>
        </div>
    </footer>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>