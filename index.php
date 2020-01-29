<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a5ddd9268e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>MaxBuild</title>
    </head>
    <body>
    
        <!-- Top Header -->
        <div class="top-header-container">
            <div class="grid-infos-container">
                <div class="grid-infos-item"> <i class="fas fa-phone-alt" style="color: white;"></i> Call: (719)445-2808</div>
                <div class="grid-infos-item"> <i class="far fa-clock" style="color: white;"></i> 24/7 Emergency Service</div>
                <div class="grid-infos-item"> <i class="fas fa-home" style="color: white;"></i> 400 Madison Street, VA, US</div>
                <div class="grid-infos-item"> </div>
                <div class="grid-infos-item"> Login</div>
            </div>
        </div>
        <!-- ./Top Header -->

        <!-- Navbar -->
        <nav class="navbar my-nav navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img src="imgs/invert-logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: goldenrod;">
                        Home
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Features
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--/.Navbar -->

        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="imgs/slide-1-1.jpg"
                        alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h2 class="h2-responsive">Constructing</h2>
                        <h1 class="h1-responsive">Spaces for you</h1>
                        <h3 class="h3-responsive">Providing all kinds of construction service</h3>
                    </div>
                </div>

                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="imgs/slide-2-1.jpg"
                        alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        <h2 class="h2-responsive">Creative</h2>
                        <h1 class="h1-responsive">Civil Engineering</h1>
                        <h3 class="h3-responsive">Our commitment is building your cozy housings</h3>
                    </div>
                </div>

                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="imgs/slide-3-1.jpg"
                        alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <h2 class="h2-responsive">Sustainable</h2>
                        <h1 class="h1-responsive">Construction</h1>
                        <h3 class="h3-responsive">We guarantee our work is highly durable and safe</h3>
                    </div>
                </div>

            </div>
            <!--/.Slides-->

            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

        <!-- About Us -->
        <div class="aboutus-container">
            <div class="aboutus-grid">
                <div class="aboutus-photo">
                <img src="imgs/img-1.jpg">
                </div>
                <div class="aboutus-text">
                    <h4>About Us</h4>
                    <h3>Providing All Kinds of Construction Services</h3>
                    <h5>Our construction company has been founded 10 years ago, 
                    at the very peak of the building frenzy in the US…</h5>
                    <p>Since then we’ve built hundreds of commercial, government and private 
                    buildings and facilities. MaxBuild and their great group of subcontractors 
                    are one of the first places we call. It may not sound like a lot, but if you 
                    estimate the manpower, working hours, materials, planning and correlating that 
                    were all involved in completing each separate project, then our productivity is 
                    immense!</p>

                    <a class="btn btn-warning" href="#" role="button">MORE INFO</a>
                </div>
            </div>
        </div>
        <!-- ./About Us -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>