<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
$email = $_SESSION["email"];
session_abort();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Online Shopping Site for Mobiles, Electronics, Furniture, Grocery, Lifestyle, Books &amp; More. Best Offers!
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="https://img1a.flixcart.com/www/promos/new/20150528-140547-favicon-retina.ico">
    <link rel="stylesheet" href="./login.html">
    <link rel="stylesheet" href="./addtocart.html">
    <link rel="stylesheet" href="./addcart.css">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="./style.css">
    <script src="script.js"></script>
</head>

<body>
    <!-- Header section -->
    <div class="container-fluid bg-primary Header fixed-top">
        <div class="row py-2 d-flex">
            <!-- Logo -->
            <div class="col logo offset-lg-1">
                <a href="#">
                    <img width="75" src="//img1a.flixcart.com/www/linchpin/fk-cp-zion/img/flipkart-plus_8d85f4.png"
                        alt="Flipkart" title="Flipkart">
                </a>
                <a href="#">Explore <span>Plus</span>
                    <img width="10" src="//img1a.flixcart.com/www/linchpin/fk-cp-zion/img/plus_aef861.png">
                </a>
            </div>

            <!-- Search -->
            <div class="col col-md-4  search d-flex dropdown bg-white">
                <input class="form-control dropdown-toggle" type="search"
                    placeholder="Search for products, brands and more" aria-label="Search" id="navbarDropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-search mt-2 ml-sm-1 text-primary"></i>
                <div class="dropdown-menu col-12 search-item" aria-labelledby="navbarDropdown">
                    <h6 class="ml-4">Discover More</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item py-2" href=""><i class="fa fa-search text-secondary mr-3"></i>mobiles</a>
                    <a class="dropdown-item py-2" href=""><i class="fa fa-search text-secondary mr-3"></i>t-shirts</a>
                    <a class="dropdown-item py-2" href=""><i class="fa fa-search text-secondary mr-3"></i>shoes</a>
                    <a class="dropdown-item py-2" href=""><i class="fa fa-search text-secondary mr-3"></i>laptop</a>
                    <a class="dropdown-item py-2" href=""><i class="fa fa-search text-secondary mr-3"></i>tv</a>
                    <a class="dropdown-item py-2" href=""><i class="fa fa-search text-secondary mr-3"></i>sarees</a>
                </div>
            </div>

            <!-- Login -->
            <div class="col dropdown login">
                <button class="btn bg-white text-primary" type="button" id="loginMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    Login
                </button>
                <div class="dropdown-menu login-list col-12 aria-labelledby="loginMenuButton">
                    <div class="d-flex">
                        <h6 class="ml-md-1">New Customer?</h6>
                        <a href="login.html" class="ml-auto mr-2" id="signUp">Sign Up</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex">
                        <i class="fa fa-user-circle text-primary mt-2 ml-2" aria-hidden="true"></i>
                        <a class="dropdown-item" href=""><?php echo $email;?></a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex">
                        <i class="fa fa-plus text-primary mt-2 ml-2" aria-hidden="true"></i>
                        <a class="dropdown-item" href="">Flipkart Plus Zone</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex">
                        <i class="fa fa-book text-primary mt-2 ml-2" aria-hidden="true"></i>
                        <a class="dropdown-item" href="">Orders</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex">
                        <i class="fa fa-heart text-primary mt-2 ml-2" aria-hidden="true"></i>
                        <a class="dropdown-item" href="">Wishlist</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex">
                        <i class="fa fa-chess-bishop text-primary mt-2 ml-2" aria-hidden="true"></i>
                        <a class="dropdown-item" href="">Rewards</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex">
                        <i class="fa fa-gift text-primary mt-2 ml-2" aria-hidden="true"></i>
                        <a class="dropdown-item" href="">Gift Cards</a>
                    </div>
                </div>
            </div>

            <!-- More -->
            <div class="col dropdown more">
                <a class="btn dropdown-toggle text-white ml-lg-2 ml-sm-0" href="#" role="button" id="moreMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                </a>

                <div class="dropdown-menu more-list" aria-labelledby="moreMenuLink">
                    <div class="d-flex">
                        <i class="fa fa-bell text-primary ml-md-3 mt-2" aria-hidden="true"></i>
                        <a class="dropdown-item" href="#">Notification Preferences</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex">
                        <i class="fa fa-archive text-primary ml-md-3 mt-2" aria-hidden="true"></i>
                        <a class="dropdown-item" href="#">Sell On Flipkart</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex">
                        <i class="fa fa-question-circle text-primary ml-md-3 mt-2" aria-hidden="true"></i>
                        <a class="dropdown-item" href="#">24x7 Customer Care</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex">
                        <i class="fa fa-chart-line text-primary ml-md-3 mt-2" aria-hidden="true"></i>
                        <a class="dropdown-item" href="#">Advertise</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex">
                        <i class="fa fa-download text-primary ml-md-3 mt-2" aria-hidden="true"></i>
                        <a class="dropdown-item" href="#">Download App</a>
                    </div>
                </div>
            </div>
            
            <!-- Cart -->
            <div class="col col-md-1 d-flex justify-content-center">
                <i class="fa fa-shopping-cart text-white mt-2" aria-hidden="true"></i>
                <a href="newCart.html" class="btn text-white">Cart</a>
            </div>
        </div>
    </div>

    <!--Navigation Bar-->
    <div class="container-fluid Navbar shadow-sm">
        <div class="Nav">
            <a href="#">Electronics</a>
            <i class="fas fa-angle-down pt-1"></i>
        </div>
        <div class="Nav">
            <a href="#">TVs & Appliances</a>
            <i class="fas fa-angle-down pt-1"></i>
        </div>
        <div class="Nav">
            <a href="#">Men</a>
            <i class="fas fa-angle-down pt-1"></i>
        </div>
        <div class="Nav">
            <a href="#">Women</a>
            <i class="fas fa-angle-down pt-1"></i>
        </div>
        <div class="Nav">
            <a href="#">Babies & Kids</a>
            <i class="fas fa-angle-down pt-1"></i>
        </div>
        <div class="Nav">
            <a href="#">Home & Furniture</a>
            <i class="fas fa-angle-down pt-1"></i>
        </div>
        <div class="Nav">
            <a href="#">Sports & More</a>
            <i class="fas fa-angle-down pt-1"></i>
        </div>
        <div class="Nav">
            <a href="#">Flights</a>
        </div>
        <div class="Nav">
            <a href="#">Offer Zone</a>
        </div>
    </div>

    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide my-1" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="img-fluid w-100"
                    src="https://rukminim1.flixcart.com/flap/3376/560/image/c984b5508dd7784a.jpg?q=50"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100"
                    src="https://rukminim1.flixcart.com/flap/3376/560/image/869463be68567c24.jpg?q=50"
                    alt="Third slide">
            </div>
            <div class="carousel-item active">
                <img class="img-fluid w-100"
                    src="https://rukminim1.flixcart.com/flap/1688/280/image/56b20fa729139bde.jpg?q=50"
                    alt="First slide">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href=" #carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- sales and banner -->
    <div class="d-flex pt-2 my-3">
        <div class="container-fluid bg-white pb-2 border" style="height: fit-content;">
            <div class="row pt-3">
                <div class="col slider-heading">
                    <h4>Deals Of the Day</h4>
                </div>
                <div class="col col-sm-4 view-btn">
                    <div>
                        <button class="btn btn-primary shadow">View All</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row d-flex nowrap justify-content-center">
                <div class="card text-center sales">
                    <img class="card-img-top p-2 img-fluid w-100" alt="Logitech C310 HD Webcam"
                        src="https://rukminim1.flixcart.com/image/150/150/ja73ki80/webcam/pc-webcam/7/q/e/logitech-c310-original-imaeztzqny7jh7gh.jpeg?q=70"
                        srcset="https://rukminim1.flixcart.com/image/300/300/ja73ki80/webcam/pc-webcam/7/q/e/logitech-c310-original-imaeztzqny7jh7gh.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/ja73ki80/webcam/pc-webcam/7/q/e/logitech-c310-original-imaeztzqny7jh7gh.jpeg?q=70 1x">
                    <div class="card-body p-1" title="From ₹490">
                        <h6 class="card-title">Webcams</h6>
                        <a href="#" class="card-link">Logitech</a>
                        <p class="card-subtitle text-muted">₹490</p>
                        <a href="cart.html">buy now</a>

                    </div>
                </div>

                <div class="card text-center sales">
                    <img class="card-img-top p-2 ml-5 img-fluid w-50" alt="Samsung Galaxy M11 (5000 mAh Battery)"
                        src="https://rukminim1.flixcart.com/image/150/150/kavefm80/mobile/6/y/t/samsung-galaxy-m11-sm-m115fzkeins-original-imafscjyhxwghgwf.jpeg?q=70"
                        srcset="https://rukminim1.flixcart.com/image/300/300/kavefm80/mobile/6/y/t/samsung-galaxy-m11-sm-m115fzkeins-original-imafscjyhxwghgwf.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/kavefm80/mobile/6/y/t/samsung-galaxy-m11-sm-m115fzkeins-original-imafscjyhxwghgwf.jpeg?q=70 1x">
                    <div class="card-body p-1" title="5000 mAh Battery">
                        <h6 class="card-title">Samsung Galaxy M11</h6>
                        <a href="#" class="card-link">5000 mAh Battery</a>
                        <p class="card-subtitle text-muted">₹10150</p>
                        <a href="cart.html">buy now</a>
                    </div>
                </div>

                <div class="card text-center sales">
                    <img class="card-img-top p-2 img-fluid w-100" alt="Woodland Men Brown Sports Sandals"
                        src="https://rukminim1.flixcart.com/image/150/150/jvv9zm80/sandal/j/g/w/gd-2665117camel-40-woodland-camel-original-imafgztfhjdp6xmg.jpeg?q=70"
                        srcset="https://rukminim1.flixcart.com/image/300/300/jvv9zm80/sandal/j/g/w/gd-2665117camel-40-woodland-camel-original-imafgztfhjdp6xmg.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/jvv9zm80/sandal/j/g/w/gd-2665117camel-40-woodland-camel-original-imafgztfhjdp6xmg.jpeg?q=70 1x">
                    <div class="card-body p-1" title="Upto 50% Off">
                        <h6 class="card-title">Woodland</h6>
                        <a href="#" class="card-link">Sandals and Floaters</a>
                        <p class="card-subtitle text-muted">₹1080</p>
                        <a href="cart.html">buy now</a>
                    </div>
                </div>

                <div class="card text-center sales">
                    <img class="card-img-top p-2 img-fluid w-100" alt="WDS Velvet 3 Seater Inflatable Sofa"
                        src="https://rukminim1.flixcart.com/image/150/150/inflatable-sofa/6/j/s/wsb031a-velvet-wds-original-imaeaphzbkgrz3xp.jpeg?q=70"
                        srcset="https://rukminim1.flixcart.com/image/300/300/inflatable-sofa/6/j/s/wsb031a-velvet-wds-original-imaeaphzbkgrz3xp.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/inflatable-sofa/6/j/s/wsb031a-velvet-wds-original-imaeaphzbkgrz3xp.jpeg?q=70 1x">
                    <div class="card-body p-1" title="Min 50% Off">
                        <h6 class="card-title">Inflatable Sofas</h6>
                        <a href="#" class="card-link">Furniture & more</a>
                        <p class="card-subtitle text-muted">₹15000</p>
                        <a href="cart.html">buy now</a>
                    </div>
                </div>

                <div class="card text-center sales">
                    <img class="card-img-top p-2 img-fluid w-100"
                        alt="one click Solid Single Breasted Party, Casual, Wedding Men Blazer"
                        src="https://rukminim1.flixcart.com/image/150/150/jcdoscw0/blazer/p/w/e/42-rlblu01-one-click-original-imaffg49ehyycgch.jpeg?q=70"
                        srcset="https://rukminim1.flixcart.com/image/300/300/jcdoscw0/blazer/p/w/e/42-rlblu01-one-click-original-imaffg49ehyycgch.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/jcdoscw0/blazer/p/w/e/42-rlblu01-one-click-original-imaffg49ehyycgch.jpeg?q=70 1x">
                    <div class="card-body p-1" title="50-80% Off">
                        <h6 class="card-title">Party blazers for men</h6>
                        <a href="#" class="card-link">Hangup</a>
                        <p class="card-subtitle text-muted">₹15000</p>
                        <a href="cart.html">buy now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card ml-2 p-2" style="height: 15%;">
            <img class="card-img img-fluid w-100"
                src="https://rukminim1.flixcart.com/flap/600/358/image/633789f7def60050.jpg?q=70" alt="IKFS">
        </div>
    </div>

    <!-- 3-Card Banner Section -->
    <div class="container-fluid">
        <div class="row row-cols-3">
            <div class="col pl-0 pr-2">
                <img class="img-fluid cur" alt="Furniture Bestsellers"
                    srcset="https://rukminim1.flixcart.com/flap/960/960/image/084789479074d2b2.jpg?q=50 2x, https://rukminim1.flixcart.com/flap/480/480/image/084789479074d2b2.jpg?q=50 1x"
                    src="https://rukminim1.flixcart.com/flap/480/480/image/084789479074d2b2.jpg?q=50">
            </div>
            <div class="col pl-0 pr-2">
                <img class="img-fluid cur" alt="cv"
                    srcset="https://rukminim1.flixcart.com/flap/960/960/image/280f4c9921a571d5.png?q=50 2x, https://rukminim1.flixcart.com/flap/480/480/image/280f4c9921a571d5.png?q=50 1x"
                    src="https://rukminim1.flixcart.com/flap/480/480/image/280f4c9921a571d5.png?q=50">
            </div>
            <div class="col px-0">
                <img class="img-fluid cur" alt="Wash5thFeb"
                    srcset="https://rukminim1.flixcart.com/flap/960/960/image/1ce0c4c1fb501b45.jpg?q=50 2x, https://rukminim1.flixcart.com/flap/480/480/image/1ce0c4c1fb501b45.jpg?q=50 1x"
                    src="https://rukminim1.flixcart.com/flap/480/480/image/1ce0c4c1fb501b45.jpg?q=50">
            </div>
        </div>
    </div>

    <!-- Ease your Daily Chores Slider -->
    <div class="container-fluid bg-white my-1 py-2 border shadow">
        <div class="row pt-3">
            <div class="col">
                <h4>Ease your Daily Chores</h4>
            </div>
            <div class="col col-sm-4 view-btn">
                <div>
                    <button class="btn btn-primary shadow">View All</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row d-flex nowrap justify-content-center">
            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Usha Marvella Electric Sewing Machine"
                    src="https://rukminim1.flixcart.com/image/150/150/sewing-machine/f/c/y/usha-marvella-original-imaegyvtgv6k4rvk.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/sewing-machine/f/c/y/usha-marvella-original-imaegyvtgv6k4rvk.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/sewing-machine/f/c/y/usha-marvella-original-imaegyvtgv6k4rvk.jpeg?q=70 1x">
                <div class="card-body p-1" title="Shop Now!">
                    <h6 class="card-title">Sewing Machines</h6>
                    <a href="#" class="card-link">Usha, Singer &amp; more</a>
                    <p class="card-subtitle text-muted">₹18000</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Inverters (Shop Now!)"
                    src="https://rukminim1.flixcart.com/image/150/150/k5ihzm80/inverter/v/k/z/zelio-1100-12v-luminous-original-imafz6gnztg3p8fg.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/k5ihzm80/inverter/v/k/z/zelio-1100-12v-luminous-original-imafz6gnztg3p8fg.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/k5ihzm80/inverter/v/k/z/zelio-1100-12v-luminous-original-imafz6gnztg3p8fg.jpeg?q=70 1x">
                <div class="card-body p-1" title="Shop Now!">
                    <h6 class="card-title">Inverters</h6>
                    <a href="#" class="card-link">Luminous, Microtek</a>
                    <p class="card-subtitle text-muted">₹9000</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Power Packed TVs for You! (Starting at ₹8,499)"
                    src="https://rukminim1.flixcart.com/image/150/150/keuagsw0/television/y/e/y/panasonic-th-50hx450dx-th-50hx450dx-original-imafvf3sbzgzygu2.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/keuagsw0/television/y/e/y/panasonic-th-50hx450dx-th-50hx450dx-original-imafvf3sbzgzygu2.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/keuagsw0/television/y/e/y/panasonic-th-50hx450dx-th-50hx450dx-original-imafvf3sbzgzygu2.jpeg?q=70 1x">
                <div class="card-body p-1" title="Starting at ₹8,499">
                    <h6 class="card-title">Power Packed TVs</h6>
                    <a href="#" class="card-link">Captivating Display</a>
                    <p class="card-subtitle text-muted">₹8,499</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Philips Vacuum Cleaners (Run Time: 15 min)"
                    src="https://rukminim1.flixcart.com/image/150/150/kg40k280/vacuum-cleaner/n/f/9/philips-fc9352-01-innovation-and-new-original-imafwffhen7zwrzu.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/kg40k280/vacuum-cleaner/n/f/9/philips-fc9352-01-innovation-and-new-original-imafwffhen7zwrzu.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/kg40k280/vacuum-cleaner/n/f/9/philips-fc9352-01-innovation-and-new-original-imafwffhen7zwrzu.jpeg?q=70 1x">
                <div class="card-body p-1" title="Run Time: 15 min">
                    <h6 class="card-title">Philips Vacuum Cleaners</h6>
                    <a href="#" class="card-link">Run Time: 15 min</a>
                    <p class="card-subtitle text-muted">₹4999</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Kaff Microwave Oven (Convection &amp; Grill)"
                    src="https://rukminim1.flixcart.com/image/150/150/kdt50nk0/microwave-new/u/f/m/ov-81-gikf-kaff-original-imafumd6khqsa9hv.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/kdt50nk0/microwave-new/u/f/m/ov-81-gikf-kaff-original-imafumd6khqsa9hv.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/kdt50nk0/microwave-new/u/f/m/ov-81-gikf-kaff-original-imafumd6khqsa9hv.jpeg?q=70 1x">
                <div class="card-body p-1" title="Convection & Grill">
                    <h6 class="card-title">Kaff Microwave Oven</h6>
                    <a href="#" class="card-link">Convection & Grill</a>
                    <p class="card-subtitle text-muted">₹2000</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="The Best of TVs are here! (Just from ₹12999)"
                    src="https://rukminim1.flixcart.com/image/150/150/kc54ivk0/television/r/q/g/mi-l43m4-4ain-original-imaftc5fy6bfmhyb.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/kc54ivk0/television/r/q/g/mi-l43m4-4ain-original-imaftc5fy6bfmhyb.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/kc54ivk0/television/r/q/g/mi-l43m4-4ain-original-imaftc5fy6bfmhyb.jpeg?q=70 1x">
                <div class="card-body p-1" title="Just from ₹12999">
                    <h6 class="card-title">The Best of TVs are here!</h6>
                    <a href="#" class="card-link">Trending on Flipkart</a>
                    <p class="card-subtitle text-muted">₹12999</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Furniture Bestsellers Slider -->
    <div class="container-fluid bg-white my-3 py-2 border shadow-sm">
        <div class="row pt-3">
            <div class="col slider-heading">
                <h4>Furniture Bestsellers</h4>
                <h6 class="text-muted">Furniture Bestsellers</h6>
            </div>
            <div class="col col-sm-4 view-btn">
                <div>
                    <button class="btn btn-primary shadow">View All</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row d-flex nowrap justify-content-center">
            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100"
                    alt="Swingzy Handmade Cotton Hanging Swing Cotton, Wooden Small Swing"
                    src="https://rukminim1.flixcart.com/image/150/150/kdyus280/hammock-swing/m/5/z/white-hammock-swing-hanging-chair-swingzy-original-imafuqwjpzmgrnnu.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/kdyus280/hammock-swing/m/5/z/white-hammock-swing-hanging-chair-swingzy-original-imafuqwjpzmgrnnu.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/kdyus280/hammock-swing/m/5/z/white-hammock-swing-hanging-chair-swingzy-original-imafuqwjpzmgrnnu.jpeg?q=70 1x">
                <div class="card-body p-1" title="From ₹1,169">
                    <h6 class="card-title">Swings</h6>
                    <a href="#" class="card-link">Trendy Collection</a>
                    <p class="card-subtitle text-muted">₹1,169</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100"
                    alt="The Furniture Store XXXL Bean Bag Cover  (Without Beans)"
                    src="https://rukminim1.flixcart.com/image/150/150/bean-bag/h/v/b/f8-the-furniture-store-xxxl-original-imae65d3wg7qzpkn.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/bean-bag/h/v/b/f8-the-furniture-store-xxxl-original-imae65d3wg7qzpkn.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/bean-bag/h/v/b/f8-the-furniture-store-xxxl-original-imae65d3wg7qzpkn.jpeg?q=70 1x">
                <div class="card-body p-1" title="Min 80% Off">
                    <h6 class="card-title">Bean Bag Covers</h6>
                    <a href="#" class="card-link">Min 80% Off</a>
                    <p class="card-subtitle text-muted">₹1,000</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100"
                    alt="Flipkart Perfect Homes Julian Engineered Wood 4 Door Wardrobe"
                    src="https://rukminim1.flixcart.com/image/150/150/jo8xg280/wardrobe-closet/n/h/9/particle-board-w4wal00ed2wmp-flipkart-perfect-homes-american-original-imaf9m4hh8mg5e79.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/jo8xg280/wardrobe-closet/n/h/9/particle-board-w4wal00ed2wmp-flipkart-perfect-homes-american-original-imaf9m4hh8mg5e79.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/jo8xg280/wardrobe-closet/n/h/9/particle-board-w4wal00ed2wmp-flipkart-perfect-homes-american-original-imaf9m4hh8mg5e79.jpeg?q=70 1x">
                <div class="card-body p-1" title="From ₹5,999">
                    <h6 class="card-title">Wardrobes</h6>
                    <a href="#" class="card-link">By Flipkart Home</a>
                    <p class="card-subtitle text-muted">₹5,999</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Woodness Jenson Solid Wood Bunk Bed"
                    src="https://rukminim1.flixcart.com/image/150/150/jsm3vrk0/bunk-loft-bed/w/b/q/na-rubber-wood-27035-woodness-dark-brown-original-imafe47eukgzsjkr.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/jsm3vrk0/bunk-loft-bed/w/b/q/na-rubber-wood-27035-woodness-dark-brown-original-imafe47eukgzsjkr.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/jsm3vrk0/bunk-loft-bed/w/b/q/na-rubber-wood-27035-woodness-dark-brown-original-imafe47eukgzsjkr.jpeg?q=70 1x">
                <div class="card-body p-1" title="Upto 78% off">
                    <h6 class="card-title">Furniture Accessories</h6>
                    <a href="#" class="card-link">Bunk Beds, Benches</a>
                    <p class="card-subtitle text-muted">₹8,999</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="WDS Velvet 3 Seater Inflatable Sofa"
                    src="https://rukminim1.flixcart.com/image/150/150/inflatable-sofa/6/j/s/wsb031a-velvet-wds-original-imaeaphzbkgrz3xp.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/inflatable-sofa/6/j/s/wsb031a-velvet-wds-original-imaeaphzbkgrz3xp.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/inflatable-sofa/6/j/s/wsb031a-velvet-wds-original-imaeaphzbkgrz3xp.jpeg?q=70 1x">
                <div class="card-body p-1" title="Min 50% Off">
                    <h6 class="card-title">Inflatable Sofas</h6>
                    <a href="#" class="card-link">Furn Central & more</a>
                    <p class="card-subtitle text-muted">₹8,999</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Marusthalee Designer Temple Solid Wood Home Temple"
                    src="https://rukminim1.flixcart.com/image/150/150/jm6mjrk0/home-temple/k/g/g/designer-tample-marusthalee-original-imaf958ryaufedqj.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/jm6mjrk0/home-temple/k/g/g/designer-tample-marusthalee-original-imaf958ryaufedqj.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/jm6mjrk0/home-temple/k/g/g/designer-tample-marusthalee-original-imaf958ryaufedqj.jpeg?q=70 1x">
                <div class="card-body p-1" title="From &#x20B9;699">
                    <h6 class="card-title">Home Temples</h6>
                    <a href="#" class="card-link">Trendy Made In India</a>
                    <p class="card-subtitle text-muted">₹699</p>
                    <a href="cart.html">buy now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 3-Card Banner Section -->
    <div class="container-fluid">
        <div class="row row-cols-3">
            <div class="col pl-0 pr-2">
                <img class="img-fluid cur" alt="SHA"
                    srcset="https://rukminim1.flixcart.com/flap/960/960/image/961504bea58924f1.jpg?q=50 2x, https://rukminim1.flixcart.com/flap/480/480/image/961504bea58924f1.jpg?q=50 1x"
                    src="https://rukminim1.flixcart.com/flap/480/480/image/961504bea58924f1.jpg?q=50">
            </div>
            <div class="col pl-0 pr-2">
                <img class="img-fluid cur" alt="DT"
                    srcset="https://rukminim1.flixcart.com/flap/960/960/image/4224c093ab3f6206.jpg?q=50 2x, https://rukminim1.flixcart.com/flap/480/480/image/4224c093ab3f6206.jpg?q=50 1x"
                    src="https://rukminim1.flixcart.com/flap/480/480/image/4224c093ab3f6206.jpg?q=50">
            </div>
            <div class="col px-0">
                <img class="img-fluid cur" alt="Shirt"
                    srcset="https://rukminim1.flixcart.com/flap/960/960/image/8cce25a66aceee84.jpg?q=50 2x, https://rukminim1.flixcart.com/flap/480/480/image/8cce25a66aceee84.jpg?q=50 1x"
                    src="https://rukminim1.flixcart.com/flap/480/480/image/8cce25a66aceee84.jpg?q=50">
            </div>
        </div>
    </div>

    <!-- Best of Electronics Slider -->
    <div class="container-fluid bg-white my-3 py-2 border shadow-sm">
        <div class="row pt-3">
            <div class="col slider-heading">
                <h4>Best of Electronics</h4>
                <h6 class="text-muted">Devices and Accessories</h6>
            </div>
            <div class="col col-sm-4 view-btn">
                <div>
                    <button class="btn btn-primary shadow">View All</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row d-flex nowrap justify-content-center">
            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Best Brands (Shop Now)"
                    src="https://rukminim1.flixcart.com/image/150/150/kg15ocw0/cases-covers/back-cover/3/y/n/spigen-acs00565-original-imafwcw8bz2tnzgp.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/kg15ocw0/cases-covers/back-cover/3/y/n/spigen-acs00565-original-imafwcw8bz2tnzgp.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/kg15ocw0/cases-covers/back-cover/3/y/n/spigen-acs00565-original-imafwcw8bz2tnzgp.jpeg?q=70 1x">
                <div class="card-body p-1" title="Shop Now!">
                    <h6 class="card-title">Best Brands</h6>
                    <a href="#" class="card-link">Shop Now!</a>
                    <p class="card-subtitle text-muted">For All Phone Models</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-5 img-fluid w-50" alt="JioFi JMR 541 Data Card"
                    src="https://rukminim1.flixcart.com/image/150/150/k6mibgw0/datacard/r/h/g/jiofi-jmr-541-original-imafpfhandhkptwc.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/k6mibgw0/datacard/r/h/g/jiofi-jmr-541-original-imafpfhandhkptwc.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/k6mibgw0/datacard/r/h/g/jiofi-jmr-541-original-imafpfhandhkptwc.jpeg?q=70 1x">
                <div class="card-body p-1" title="Upto 60% off">
                    <h6 class="card-title">Data Cards</h6>
                    <a href="#" class="card-link">Upto 60% off</a>
                    <p class="card-subtitle text-muted">JioFi, Huawei & more</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Logitech C310 HD Webcam"
                    src="https://rukminim1.flixcart.com/image/150/150/ja73ki80/webcam/pc-webcam/7/q/e/logitech-c310-original-imaeztzqny7jh7gh.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/ja73ki80/webcam/pc-webcam/7/q/e/logitech-c310-original-imaeztzqny7jh7gh.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/ja73ki80/webcam/pc-webcam/7/q/e/logitech-c310-original-imaeztzqny7jh7gh.jpeg?q=70 1x">
                <div class="card-body p-1" title="From ₹490">
                    <h6 class="card-title">Webcams</h6>
                    <a href="#" class="card-link">From ₹490</a>
                    <p class="card-subtitle text-muted">Logitech, Quantum & more</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Gaming Headsets (Best Selling)"
                    src="https://rukminim1.flixcart.com/image/150/150/k2w6xe80/headphone/k/m/d/acer-predator-galea-311-phw910-np-hds11-00b-original-imafm58gaeg3hb7x.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/k2w6xe80/headphone/k/m/d/acer-predator-galea-311-phw910-np-hds11-00b-original-imafm58gaeg3hb7x.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/k2w6xe80/headphone/k/m/d/acer-predator-galea-311-phw910-np-hds11-00b-original-imafm58gaeg3hb7x.jpeg?q=70 1x">
                <div class="card-body p-1" title="Best Selling">
                    <h6 class="card-title">Gaming Headsets</h6>
                    <a href="#" class="card-link">Best Selling</a>
                    <p class="card-subtitle text-muted">Cosmic Byte, Acer, HyperX & more</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Best Selling Laptops (Upto 40% off)"
                    src="https://rukminim1.flixcart.com/image/150/150/kctf0cw0/computer/7/j/c/dell-original-imaftuvztweg8kf8.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/kctf0cw0/computer/7/j/c/dell-original-imaftuvztweg8kf8.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/kctf0cw0/computer/7/j/c/dell-original-imaftuvztweg8kf8.jpeg?q=70 1x">
                <div class="card-body p-1" title="Upto 40% Off">
                    <h6 class="card-title">Best Selling Laptops</h6>
                    <a href="#" class="card-link">Upto 40% Off</a>
                    <p class="card-subtitle text-muted">Asus, Acer, Dell & More</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100"
                    alt="BeFunky Back Cover for Apple iPhone X, Apple iPhone XS"
                    src="https://rukminim1.flixcart.com/image/150/150/jd0jtzk0/cases-covers/back-cover/z/b/f/befunky-isimple-matte-finish-flexible-soft-tpu-skin-support-original-imafyfmje9mvkfea.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/jd0jtzk0/cases-covers/back-cover/z/b/f/befunky-isimple-matte-finish-flexible-soft-tpu-skin-support-original-imafyfmje9mvkfea.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/jd0jtzk0/cases-covers/back-cover/z/b/f/befunky-isimple-matte-finish-flexible-soft-tpu-skin-support-original-imafyfmje9mvkfea.jpeg?q=70 1x">
                <div class="card-body p-1" title="Just ₹159">
                    <h6 class="card-title">For Vivo</h6>
                    <a href="#" class="card-link">Just ₹159</a>
                    <p class="card-subtitle text-muted">Plain Case Covers</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Best Battery Phones Slider -->
    <div class="container-fluid bg-white my-3 py-2 border shadow-sm">
        <div class="row pt-3">
            <div class="col slider-heading">
                <h4>Best Battery Phones</h4>
                <h6 class="text-muted">More than 4000mAh</h6>
            </div>
            <div class="col col-sm-4 view-btn">
                <div>
                    <button class="btn btn-primary shadow">View All</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row d-flex nowrap justify-content-center">
            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-5 img-fluid w-50" alt="realme Narzo 10A (5000 mAh Battery)"
                    src="https://rukminim1.flixcart.com/image/150/150/k8ddoy80/mobile/u/g/w/realme-narzo-10a-rmx2020-original-imafqechxsprgfgr.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/k8ddoy80/mobile/u/g/w/realme-narzo-10a-rmx2020-original-imafqechxsprgfgr.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/k8ddoy80/mobile/u/g/w/realme-narzo-10a-rmx2020-original-imafqechxsprgfgr.jpeg?q=70 1x">
                <div class="card-body p-1" title="5000 mAh Battery">
                    <h6 class="card-title">Realme Narzo 10A (White)</h6>
                    <a href="#" class="card-link">5000 mAh Battery</a>
                    <p class="card-subtitle text-muted">Now ₹9999</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-5 img-fluid w-50" alt="Poco X2 (4500 mAh Battery)"
                    src="https://rukminim1.flixcart.com/image/150/150/k65d18w0/mobile/4/k/4/poco-x2-mzb9011in-original-imafzz2hbfkvftm5.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/k65d18w0/mobile/4/k/4/poco-x2-mzb9011in-original-imafzz2hbfkvftm5.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/k65d18w0/mobile/4/k/4/poco-x2-mzb9011in-original-imafzz2hbfkvftm5.jpeg?q=70 1x">
                <div class="card-body p-1" title="4500 mAh Battery">
                    <h6 class="card-title">POCO X2 (Atlantis Blue)</h6>
                    <a href="#" class="card-link">4500 mAh Battery</a>
                    <p class="card-subtitle text-muted">Now ₹17499</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-5 img-fluid w-50" alt="Moto Edge Plus (5000 mAh Battery)"
                    src="https://rukminim1.flixcart.com/image/150/150/k9loccw0/mobile/h/f/h/motorola-racer-turbo-edge-xt2061-3-original-imafrcvgpqx23mcq.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/k9loccw0/mobile/h/f/h/motorola-racer-turbo-edge-xt2061-3-original-imafrcvgpqx23mcq.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/k9loccw0/mobile/h/f/h/motorola-racer-turbo-edge-xt2061-3-original-imafrcvgpqx23mcq.jpeg?q=70 1x">
                <div class="card-body p-1" title="5000 mAh Battery">
                    <h6 class="card-title">Motorola Edge+ (Thunder Grey)</h6>
                    <a href="#" class="card-link">5000 mAh Battery</a>
                    <p class="card-subtitle text-muted">Now ₹64999</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-5 img-fluid w-50" alt="OPPO A9 2020 (5000 mAh Battery)"
                    src="https://rukminim1.flixcart.com/image/150/150/k51cpe80pkrrdj/mobile/z/y/h/oppo-a9-2020-cph1937-original-imafkhhxh2vsxnmq.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/k51cpe80pkrrdj/mobile/z/y/h/oppo-a9-2020-cph1937-original-imafkhhxh2vsxnmq.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/k51cpe80pkrrdj/mobile/z/y/h/oppo-a9-2020-cph1937-original-imafkhhxh2vsxnmq.jpeg?q=70 1x">
                <div class="card-body p-1" title="5000 mAh Battery">
                    <h6 class="card-title">OPPO A9 2020 (Marine Green)</h6>
                    <a href="#" class="card-link">5000 mAh Battery</a>
                    <p class="card-subtitle text-muted">Now ₹15990</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-5 img-fluid w-50" alt="Samsung Galaxy M11 (5000 mAh Battery)"
                    src="https://rukminim1.flixcart.com/image/150/150/kavefm80/mobile/6/y/t/samsung-galaxy-m11-sm-m115fzkeins-original-imafscjyhxwghgwf.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/kavefm80/mobile/6/y/t/samsung-galaxy-m11-sm-m115fzkeins-original-imafscjyhxwghgwf.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/kavefm80/mobile/6/y/t/samsung-galaxy-m11-sm-m115fzkeins-original-imafscjyhxwghgwf.jpeg?q=70 1x">
                <div class="card-body p-1" title="5000 mAh Battery">
                    <h6 class="card-title">Samsung Galaxy M11 (Black)</h6>
                    <a href="#" class="card-link">5000 mAh Battery</a>
                    <p class="card-subtitle text-muted">Now ₹10150</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-5 img-fluid w-50" alt="Samsung Galaxy M01 (4000 mAh Battery)"
                    src="https://rukminim1.flixcart.com/image/150/150/kavefm80/mobile/d/f/a/samsung-galaxy-m01-sm-m015gzbdins-original-imafscggmdqgt62q.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/kavefm80/mobile/d/f/a/samsung-galaxy-m01-sm-m015gzbdins-original-imafscggmdqgt62q.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/kavefm80/mobile/d/f/a/samsung-galaxy-m01-sm-m015gzbdins-original-imafscggmdqgt62q.jpeg?q=70 1x">
                <div class="card-body p-1" title="4000 mAh Battery">
                    <h6 class="card-title">Samsung Galaxy M01 (Blue)</h6>
                    <a href="#" class="card-link">4000 mAh Battery</a>
                    <p class="card-subtitle text-muted">Now ₹8354</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Deals on Fashion Slider -->
    <div class="container-fluid bg-white my-3 py-2 border shadow-sm">
        <div class="row pt-3">
            <div class="col slider-heading">
                <h4>Top Deals on Fashion</h4>
            </div>
            <div class="col col-sm-4 view-btn">
                <div>
                    <button class="btn btn-primary shadow">View All</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row d-flex nowrap justify-content-center">
            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt=" Pearl Jewellery"
                    src="https://rukminim1.flixcart.com/flap/150/150/image/d1b1c172484ce877.jpg?q=70"
                    srcset="https://rukminim1.flixcart.com/flap/300/300/image/d1b1c172484ce877.jpg?q=70 2x, https://rukminim1.flixcart.com/flap/150/150/image/d1b1c172484ce877.jpg?q=70 1x">
                <div class="card-body p-1" title="40-80% Off">
                    <h6 class="card-title">Grand Pearl Jewellery</h6>
                    <a href="#" class="card-link">40-80% Off</a>
                    <p class="card-subtitle text-muted">Zaveri Pearls , Voylla &amp; more</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-3 img-fluid w-75" alt="Ishin Women Embroidered Anarkali Kurta" src="https://rukminim1.flixcart.com/image/150/150/k1pbpu80/kurta/m/q/s/m-kurpram-gb-565-ishin-original-imafh7d8mhxdpveg.jpeg?q=70" srcset="https://rukminim1.flixcart.com/image/300/300/k1pbpu80/kurta/m/q/s/m-kurpram-gb-565-ishin-original-imafh7d8mhxdpveg.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/k1pbpu80/kurta/m/q/s/m-kurpram-gb-565-ishin-original-imafh7d8mhxdpveg.jpeg?q=70 1x">
                <div class="card-body p-1" title="From ₹299">
                    <h6 class="card-title">Ishin</h6>
                    <a href="#" class="card-link">From ₹299</a>
                    <p class="card-subtitle text-muted">Ethnic Wear</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100"
                    alt="one click Solid Single Breasted Party, Casual, Wedding Men Blazer"
                    src="https://rukminim1.flixcart.com/image/150/150/jcdoscw0/blazer/p/w/e/42-rlblu01-one-click-original-imaffg49ehyycgch.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/jcdoscw0/blazer/p/w/e/42-rlblu01-one-click-original-imaffg49ehyycgch.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/jcdoscw0/blazer/p/w/e/42-rlblu01-one-click-original-imaffg49ehyycgch.jpeg?q=70 1x">
                <div class="card-body p-1" title="50-80% Off">
                    <h6 class="card-title">Party blazers for men</h6>
                    <a href="#" class="card-link">50-80% Off</a>
                    <p class="card-subtitle text-muted">Hangup</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-3 img-fluid w-75"
                    alt="Saara Digital Print, Floral Print Semi Stitched Lehenga Choli"
                    src="https://rukminim1.flixcart.com/image/150/150/k7jdg280/lehenga-choli/m/h/f/free-na-102l10171-saara-original-imafprdmenpgbx2n.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/k7jdg280/lehenga-choli/m/h/f/free-na-102l10171-saara-original-imafprdmenpgbx2n.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/k7jdg280/lehenga-choli/m/h/f/free-na-102l10171-saara-original-imafprdmenpgbx2n.jpeg?q=70 1x">
                <div class="card-body p-1" title="Min 60% Off">
                    <h6 class="card-title">Lehenga Cholis</h6>
                    <a href="#" class="card-link">Min 60% Off</a>
                    <p class="card-subtitle text-muted">Embeoidered</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Woodland Men Brown Sports Sandals"
                    src="https://rukminim1.flixcart.com/image/150/150/jvv9zm80/sandal/j/g/w/gd-2665117camel-40-woodland-camel-original-imafgztfhjdp6xmg.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/jvv9zm80/sandal/j/g/w/gd-2665117camel-40-woodland-camel-original-imafgztfhjdp6xmg.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/jvv9zm80/sandal/j/g/w/gd-2665117camel-40-woodland-camel-original-imafgztfhjdp6xmg.jpeg?q=70 1x">
                <div class="card-body p-1" title="Upto 50% Off">
                    <h6 class="card-title">Woodland</h6>
                    <a href="#" class="card-link">Upto 50% Off</a>
                    <p class="card-subtitle text-muted">Sandals and Floaters</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 img-fluid w-100" alt="Puma Jaunt IDP Running Shoes For Men"
                    src="https://rukminim1.flixcart.com/image/150/150/k6s82vk0/shoe/9/q/9/373642-9-puma-peacoat-jaffa-orange-original-imafp64sswgfxt7f.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/k6s82vk0/shoe/9/q/9/373642-9-puma-peacoat-jaffa-orange-original-imafp64sswgfxt7f.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/k6s82vk0/shoe/9/q/9/373642-9-puma-peacoat-jaffa-orange-original-imafp64sswgfxt7f.jpeg?q=70 1x">
                <div class="card-body p-1" title="From &#x20B9;399">
                    <h6 class="card-title">Puma, Asian &amp; more</h6>
                    <a href="#" class="card-link">From &#x20B9;399</a>
                    <p class="card-subtitle text-muted">Sports Shoes &amp; more</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Picks on Men's Clothing slider -->
    <div class="container-fluid bg-white my-3 py-2 border shadow-sm">
        <div class="row pt-3">
            <div class="col slider-heading">
                <h4>Top Picks On Men's Clothing</h4>
            </div>
            <div class="col col-sm-4 view-btn">
                <div>
                    <button class="btn btn-primary shadow">View All</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row slider d-flex nowrap justify-content-center">
            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-3 img-fluid w-75"
                    alt="Redwood Solid Single Breasted Party, Formal, Casual, Wedding Men Blazer"
                    src="https://rukminim1.flixcart.com/image/150/150/jbgtnrk0/blazer/a/y/q/44-blkp01-redwood-original-imafyr84ngqzxvqb.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/jbgtnrk0/blazer/a/y/q/44-blkp01-redwood-original-imafyr84ngqzxvqb.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/jbgtnrk0/blazer/a/y/q/44-blkp01-redwood-original-imafyr84ngqzxvqb.jpeg?q=70 1x">
                <div class="card-body p-1" title="Under ₹1500">
                    <h6 class="card-title">Party blazers for men</h6>
                    <a href="#" class="card-link">Under ₹1500</a>
                    <p class="card-subtitle text-muted">Best Prices</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-3 img-fluid w-75" alt="Puma Solid Men Hooded Black, Grey T-Shirt"
                    src="https://rukminim1.flixcart.com/image/150/150/jll6xzk0/t-shirt/z/3/h/m-51700902black-puma-original-imaf8zhfvp83rghg.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/jll6xzk0/t-shirt/z/3/h/m-51700902black-puma-original-imaf8zhfvp83rghg.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/jll6xzk0/t-shirt/z/3/h/m-51700902black-puma-original-imaf8zhfvp83rghg.jpeg?q=70 1x">
                <div class="card-body p-1" title="Min. 50% Off">
                    <h6 class="card-title">T-Shirts</h6>
                    <a href="#" class="card-link">Min. 50% Off</a>
                    <p class="card-subtitle text-muted">U.S. Polo Assn, Adidas...</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-3 img-fluid w-75" alt="Dennis Lingo Men Solid Casual Multicolor Shirt"
                    src="https://rukminim1.flixcart.com/image/150/150/jpk2z680/shirt/a/y/q/xl-c501-towelblue-dennis-lingo-original-imafbryzzcnw92cw.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/jpk2z680/shirt/a/y/q/xl-c501-towelblue-dennis-lingo-original-imafbryzzcnw92cw.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/jpk2z680/shirt/a/y/q/xl-c501-towelblue-dennis-lingo-original-imafbryzzcnw92cw.jpeg?q=70 1x">
                <div class="card-body p-1" title="Min 60% off">
                    <h6 class="card-title">Denim Shirts</h6>
                    <a href="#" class="card-link">Min 60% off</a>
                    <p class="card-subtitle text-muted">Not to be Missed!</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-3 img-fluid w-75" alt="Crease &amp; Clips Men Cargos"
                    src="https://rukminim1.flixcart.com/image/150/150/k5vcya80/cargo/f/3/k/36-k2s-465-10394-maartiza-original-imafcyz5qyjjk2ph.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/k5vcya80/cargo/f/3/k/36-k2s-465-10394-maartiza-original-imafcyz5qyjjk2ph.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/k5vcya80/cargo/f/3/k/36-k2s-465-10394-maartiza-original-imafcyz5qyjjk2ph.jpeg?q=70 1x">
                <div class="card-body p-1" title="From ₹599">
                    <h6 class="card-title">Popular Cargos</h6>
                    <a href="#" class="card-link">From ₹599</a>
                    <p class="card-subtitle text-muted">Best Collection</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-3 img-fluid w-75" alt="KJS Solid Multicolor Lungi"
                    src="https://rukminim1.flixcart.com/image/150/150/dhoti/y/k/u/one-dhoti-fancy-white-pitaliya-free-original-imaeg3y2fgmx8twz.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/dhoti/y/k/u/one-dhoti-fancy-white-pitaliya-free-original-imaeg3y2fgmx8twz.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/dhoti/y/k/u/one-dhoti-fancy-white-pitaliya-free-original-imaeg3y2fgmx8twz.jpeg?q=70 1x">
                <div class="card-body p-1" title="Min 40% Off">
                    <h6 class="card-title">Lungi</h6>
                    <a href="#" class="card-link">Min 40% Off</a>
                    <p class="card-subtitle text-muted">Handpicked Collection</p>
                </div>
            </div>

            <div class="card text-center sales">
                <img class="card-img-top p-2 ml-3 img-fluid w-75" alt="URBAN LEGENDS Men Cargos"
                    src="https://rukminim1.flixcart.com/image/150/150/kchzhjk0/cargo/m/a/v/34-r20splgreen-urban-legends-original-imaftm3ajnvhgsxh.jpeg?q=70"
                    srcset="https://rukminim1.flixcart.com/image/300/300/kchzhjk0/cargo/m/a/v/34-r20splgreen-urban-legends-original-imaftm3ajnvhgsxh.jpeg?q=70 2x, https://rukminim1.flixcart.com/image/150/150/kchzhjk0/cargo/m/a/v/34-r20splgreen-urban-legends-original-imaftm3ajnvhgsxh.jpeg?q=70 1x">
                <div class="card-body p-1" title="Under ₹999">
                    <h6 class="card-title">Popular Cargos</h6>
                    <a href="#" class="card-link">Under ₹999</a>
                    <p class="card-subtitle text-muted">Grab or Gone!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- information -->

    <!-- Footer -->
    <footer class="container-fluid">
        <div class="row">
            <div class="col ml-md-3 Footer">
                <h6>ABOUT</h6>
                <div>
                    <a href="#">Contact Us</a>
                    <a href="#">About Us</a>
                    <a href="#">Careers</a>
                    <a href="#">Flipkart Stories</a>
                    <a href="#">Press</a>
                    <a href="#">Flipkart</a>
                    <a href="#">Wholesale</a>
                </div>
            </div>
            <div class="col Footer">
                <h6>HELP</h6>
                <div>
                    <a href="#">Payments</a>
                    <a href="#">Shipping</a>
                    <a href="#">Cancellation & Returns</a>
                    <a href="#">FAQ</a>
                    <a href="#">Report</a>
                    <a href="#">Infringement</a>
                </div>
            </div>
            <div class="col Footer">
                <h6>POLICY</h6>
                <div>
                    <a href="#">Return Policy</a>
                    <a href="#">Term of Use</a>
                    <a href="#">Security</a>
                    <a href="#">Privacy</a>
                    <a href="#">Sitemap</a>
                    <a href="#">EPR Compliance</a>
                </div>
            </div>
            <div class="col Footer">
                <h6>SOCIAL</h6>
                <div>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">You Tube</a>
                </div>
            </div>
            <div class="col Footer border-left border-secondary">
                <h6>Mail Us:</h6>
                <div>
                    <p>Flipkart Internet Private Limited,</p>
                    <p>Buildings Alyssa, Begonia &</p>
                    <p>Clove Embassy Tech Village,</p>
                    <p>Outer Ring Road, Devarabeesanahalli Village,</p>
                    <p>Bengaluru, 560103,</p>
                    <p>Karnataka, India</p>
                </div>
            </div>
            <div class="col Footer">
                <h6>Registered Office Address:</h6>
                <div>
                    <p>Flipkart Internet Private Limited,</p>
                    <p>Buildings Alyssa, Begonia &</p>
                    <p>Clove Embassy Tech Village,</p>
                    <p>Outer Ring Road, Devarabeesanahalli Village,</p>
                    <p>Bengaluru, 560103,</p>
                    <p>Karnataka, India</p>
                    <p>CIN : U51109KA2012PTC066107</p>
                    <p>Telephone: <a href="#" class="text-primary">1800 208 9898</a></p>
                </div>
            </div>
        </div>

        <div class="row border-top mt-5 py-3 border-secondary">
            <div class="col">
                <i class="fa fa-briefcase text-warning"></i>
                <span>Sell On Flipkart</span>
            </div>
            <div class="col">
                <i class="fab fa-stumbleupon-circle text-warning"></i>
                <span>Advertise</span>
            </div>
            <div class="col">
                <i class="fa fa-gift text-warning"></i>
                <span>Gift Cards</span>
            </div>
            <div class="col">
                <i class="fa fa-question-circle text-warning"></i>
                <span>Help Center</span>
            </div>
            <!-- <div class="col col-md-2 col-xs-4">
                <span>&copy; 2007-2020 Flipkart.com</span> -->
            </div>
            <div class="col col-md-5 col-xs-6">
                <img class="img-fluid" src="//img1a.flixcart.com/www/linchpin/fk-cp-zion/img/payment-method_7934bc.svg">
            </div>
        </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="./script.js"></script>
</body>

</html>
