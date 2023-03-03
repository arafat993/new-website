<?php
    require '../database.php';
?>
<?php
    $select        = "SELECT * FROM tbl_banner";
    $select_result = mysqli_query($db_connection, $select);
    $result_tokra  = mysqli_fetch_array($select_result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Yucel Yilmaz">
    <meta name="robots" content="index,follow">
    <meta name="publisher" content="Yücel Yilmaz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Filaous - Portfolio Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $result_tokra['name']; ?></title>
    <!--// Boostrap v5 //-->
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <!--// Magnific Popup //-->
    <link rel="stylesheet" href="vendor/css/magnific.popup.min.css">
    <!--// Animate Css //-->
    <link rel="stylesheet" href="vendor/css/animate.min.css">
    <!--// Owl Carousel //-->
    <link rel="stylesheet" href="vendor/css/owl.carousel.min.css">
    <!--// Owl Carousel Default //-->
    <link rel="stylesheet" href="vendor/css/owl.carousel.default.min.css">
    <!--// Font Awesome //-->
    <link rel="stylesheet" href="fonts/font_awesome/css/all.css">
    <!--// Flat Icons //-->
    <link rel="stylesheet" href="fonts/flat_icons/flaticon.css">
    <!--// Theme Main Css //-->
    <link rel="stylesheet" href="css/style.css">
    <!--// Theme Color Css //-->
    <link rel="stylesheet" href="css/skins/default-color.css" id="theme-color-toggle" />
</head>
<body data-bs-spy="scroll" data-bs-target="#fixedNavbar">

    <!--// Page Wrapper Start //-->
    <div class="page-wrapper" id="wrapper">

        <!--// Header Start //-->
        <header class="header fixed-top" id="header">
            <div id="nav-menu-wrap">
                <div class="container">
                    <nav class="navbar navbar-expand-lg p-0">
                        <a class="navbar-brand" title="Home" href="index.html">
                            <img src="img/bg/logo_white.png" alt="Logo White" class="img-fluid logo-transparent">
                            <img src="img/bg/logo_black.png" alt="Logo Black" class="img-fluid logo-normal">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#fixedNavbar" 
                            aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="togler-icon-inner">
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#" data-scroll-nav="1">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#" data-scroll-nav="2">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#" data-scroll-nav="3">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#" data-scroll-nav="4">Portfolio</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="blogDropdownMenu" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="blogDropdownMenu">
                                        <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                        <a class="dropdown-item" href="blog-sidebar.html">Blog Sidebar</a>
                                        <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#" data-scroll-nav="7">Contact</a>
                                </li>
                                <li class="nav-item navbar-btn-resp d-flex align-items-center">
                                    <a href="#" data-scroll-nav="7"  class="primary-btn">
                                        <span class="text">Hire Me</span>
                                        <span class="icon"><i class="fa fa-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--// Header End  //-->

        <!--// Main Area Start //-->
        <main class="main-area">

            <!--// Hero Section Start //-->
            <section class="hero-banner" id="hero-particles-effect" data-scroll-index="1">
                <div id="heroparticles"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-xl-6 col-md-10 wow fadeInUp">
                            <div class="hero-inner">
                                <h1>
                                    I'm <br>
                                    <?php echo $result_tokra['name']; ?>
                                </h1>
                                <h2>
                                    <?php echo $result_tokra['descrip']; ?>
                                </h2>
                                <a href="<?php echo $result_tokra['btn_url']; ?>" data-scroll-nav="4"  class="white-btn" style="position: relative;">
                                    <span class="text"><?php echo $result_tokra['btn']; ?></span>
                                    <span class="icon"><i class="fa fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-6 col-md-12 hero-img-resp wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
                            <div class="hero-img">
                                <div class="border-line-outer">
                                    <div class="border-line-inner">
                                        <img src="img/bg/hero-img.jpg" title="HovyLee phone image" alt="HovyLee phone image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="hero-social-list">
                    <li><a href="javascript:void(0)"><i class="fab fa-github"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <a href="mailto:filaous@example.com" class="hero-email-link">filaous@example.com</a>
                <a href="#" data-scroll-nav="2" class="scroll-down-btn">Scroll Down</a>
            </section>
            <!--// Hero Section End //-->
            
            <!--// About Section Start //-->
            <section class="section" id="about" data-scroll-index="2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-img wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s"> 
                                <img src="img/bg/about-img.jpg" alt="About image" title="About image" class="img-fluid">
                                <a class="about-video-btn" href="https://www.youtube.com/watch?v=YqQx75OPRa0"><i class="fa fa-play"></i></a>
                                <div class="video-border-line"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-inner wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
                                <h6>About Me</h6>
                                <h2>I am here with 10 years of user experience</h2>
                                <p>
                                    I prevent your loss of time and indecision in the works I have 
                                    taken and the projects I have done and offer the best solution.
                                    Many of my customers and brands express their satisfaction with 
                                    working with me.We can appeal to a huge audience and grow your business.
                                </p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="mb-resp-15">
                                            <li>
                                                <div class="text">
                                                    <h5>Name :</h5>
                                                    <p>Matheus Bartelli</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="text">
                                                    <h5>Country :</h5>
                                                    <p>United States</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="text">
                                                    <h5>Freelance :</h5>
                                                    <p>Available</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <ul>
                                            <li>
                                                <div class="text">
                                                    <h5>University :</h5>
                                                    <p>Pratt Institute</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="text">
                                                    <h5>Languages :</h5>
                                                    <p>English,Deutch,Arabic</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="text">
                                                    <h5>Address :</h5>
                                                    <p>Etowah, TN 37331 United States</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" class="primary-btn">
                                    <span class="text">Download Cv</span>
                                    <span class="icon"><i class="fa fa-download"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// About Section End //-->

            <!--// Resume Section Start //-->
            <section class="section pb-minus-76 bg-primary-light" id="myresume">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-heading-left">
                                <span>Resume</span>
                                <h2>My Resume</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s">
                            <div class="resume-item">
                                <div class="body">
                                    <div class="icon-outer-line">
                                        <div class="icon-inner-line">
                                            <span class="fab fa-google"></span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h6>Google LLC</h6>
                                        <h5>Web Designer</h5>
                                        <span>2018-2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <div class="resume-item">
                                <div class="body">
                                    <div class="icon-outer-line">
                                        <div class="icon-inner-line">
                                            <span class="fab fa-wordpress"></span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h6>Wordpress</h6>
                                        <h5>Web Developer</h5>
                                        <span>2016-2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">
                            <div class="resume-item">
                                <div class="body">
                                    <div class="icon-outer-line">
                                        <div class="icon-inner-line">
                                            <span class="fab fa-dribbble"></span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h6>Dribbble</h6>
                                        <h5>UI Designer</h5>
                                        <span>2012-2014</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.4s">
                            <div class="resume-item">
                                <div class="body">
                                    <div class="icon-outer-line">
                                        <div class="icon-inner-line">
                                            <span class="fab fa-youtube"></span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h6>Youtube LLC</h6>
                                        <h5>Seo Manager</h5>
                                        <span>2017-2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
                            <div class="resume-item">
                                <div class="body">
                                    <div class="icon-outer-line">
                                        <div class="icon-inner-line">
                                            <span class="fab fa-amazon"></span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h6>Amazon</h6>
                                        <h5>Sales Manager</h5>
                                        <span>2012-2014</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.6s">
                            <div class="resume-item">
                                <div class="body">
                                    <div class="icon-outer-line">
                                        <div class="icon-inner-line">
                                            <span class="fab fa-behance"></span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h6>Behance</h6>
                                        <h5>Graphic Designer</h5>
                                        <span>2012-2014</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// Resume Section End //-->

            <!--// Services Section Start //-->
            <section class="section pb-minus-70" data-scroll-index="3">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-heading">
                                <span>Services</span>
                                <h2>My Services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.1s">
                            <div class="services-item">
                                <img src="img/services/services-bg-img-1.jpg" alt="Services image" class="services-bg-img">
                                <div class="body">
                                    <h4>01</h4>
                                    <h5>Web Design</h5>
                                    <p>
                                        It is a long established fact that a reader will be 
                                        distracted by the readable content of a page when 
                                        looking at its layout. 
                                    </p>
                                    <a href="services-detail.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                                <div class="icon">
                                    <span class="fa fa-tablet"></span>
                                </div>
                                <div class="icon-border"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <div class="services-item">
                                <img src="img/services/services-bg-img-2.jpg" alt="Services image" class="services-bg-img">
                                <div class="body">
                                    <h4>02</h4>
                                    <h5>Graphic Design</h5>
                                    <p>
                                        It is a long established fact that a reader will be 
                                        distracted by the readable content of a page when 
                                        looking at its layout. 
                                    </p>
                                    <a href="services-detail.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                                <div class="icon">
                                    <span class="fa fa-adjust"></span>
                                </div>
                                <div class="icon-border"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.1s">
                            <div class="services-item">
                                <img src="img/services/services-bg-img-3.jpg" alt="Services image" class="services-bg-img">
                                <div class="body">
                                    <h4>03</h4>
                                    <h5>UI/UX Design</h5>
                                    <p>
                                        It is a long established fact that a reader will be 
                                        distracted by the readable content of a page when 
                                        looking at its layout. 
                                    </p>
                                    <a href="services-detail.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                                <div class="icon">
                                    <span class="fab fa-uikit"></span>
                                </div>
                                <div class="icon-border"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.1s">
                            <div class="services-item">
                                <img src="img/services/services-bg-img-4.jpg" alt="Services image" class="services-bg-img">
                                <div class="body">
                                    <h4>04</h4>
                                    <h5>Content Writing</h5>
                                    <p>
                                        It is a long established fact that a reader will be 
                                        distracted by the readable content of a page when 
                                        looking at its layout. 
                                    </p>
                                    <a href="services-detail.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                                <div class="icon">
                                    <span class="fa fa-blog"></span>
                                </div>
                                <div class="icon-border"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <div class="services-item">
                                <img src="img/services/services-bg-img-5.jpg" alt="Services image" class="services-bg-img">
                                <div class="body">
                                    <h4>05</h4>
                                    <h5>Scripts & Plugin</h5>
                                    <p>
                                        It is a long established fact that a reader will be 
                                        distracted by the readable content of a page when 
                                        looking at its layout. 
                                    </p>
                                    <a href="services-detail.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                                <div class="icon">
                                    <span class="fa fa-code"></span>
                                </div>
                                <div class="icon-border"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.1s">
                            <div class="services-item">
                                <img src="img/services/services-bg-img-6.jpg" alt="Services image" class="services-bg-img">
                                <div class="body">
                                    <h4>06</h4>
                                    <h5>Digital Marketing</h5>
                                    <p>
                                        It is a long established fact that a reader will be 
                                        distracted by the readable content of a page when 
                                        looking at its layout. 
                                    </p>
                                    <a href="services-detail.html">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                                <div class="icon">
                                    <span class="fa fa-bullhorn"></span>
                                </div>
                                <div class="icon-border"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// Services Section End //-->

            <!--// Counter Section Start //-->
            <section class="section pb-minus-70" id="counters">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-heading light">
                                <h2>More than 10,000 customers trusted me</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.1s">
                            <div class="counter-item">
                                <h3 class="counter">5,700</h3>
                                <p>Happy Customer</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.3s">
                            <div class="counter-item">
                                <h3 class="counter">500</h3>
                                <p>Project Complete</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.1s">
                            <div class="counter-item">
                                <h3 class="counter">1,250</h3>
                                <p>Cups Of Coffee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  
            <!--// Counter Section End //-->

            <!--// How I Work Section Start //-->
            <section class="section bg-dark-blue pb-30">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-heading">
                                <span>How I Work</span>
                                <h2>I prepare your projects in 3 stages</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.2s">
                            <div class="how-i-work-item">
                                <img src="img/bg/arrow-img.png" alt="Arrrow image" class="arrow-dashed-img">
                                <div class="number">
                                    <span>01</span>
                                </div>
                                <div class="number-border"></div>
                                <div class="img">
                                    <img src="img/bg/how-i-work-img-1.png" class="img-fluid" alt="How i work">
                                </div>
                                <div class="text">
                                    <h5>Thinking</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.4s">
                            <div class="how-i-work-item">
                                <img src="img/bg/arrow-img.png" alt="Arrrow image" class="arrow-dashed-img">
                                <div class="number">
                                    <span>02</span>
                                </div>
                                <div class="number-border"></div>
                                <div class="img">
                                    <img src="img/bg/how-i-work-img-2.png" class="img-fluid" alt="How i work">
                                </div>
                                <div class="text">
                                    <h5>Research</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.6s">
                            <div class="how-i-work-item">
                                <div class="number">
                                    <span>03</span>
                                </div>
                                <div class="number-border"></div>
                                <div class="img">
                                    <img src="img/bg/how-i-work-img-3.png" class="img-fluid" alt="How i work">
                                </div>
                                <div class="text">
                                    <h5>Design</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// How I Work Section End //-->

            <!--// Skills Section Start //-->
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0.3s">
                            <div class="skills-img">
                                <img src="img/bg/skills-img.jpg" alt="About image" title="About image" class="img-fluid">
                                <span class="icon-check"><i class="fa fa-check"></i></span>
                                <div class="icon-border-line"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.3s">
                            <div class="skills-inner">
                                <h6>Skills</h6>
                                <h2>I specialize in frameworks UI for years</h2>
                                <p>
                                    A front end library is being released every day and it is requested 
                                    to master these technologies.I also follow the market every day and 
                                    follow the updates of new frontend frameworks and programming frameworks.
                                    It is easier for me to keep up with new technologies in projects
                                </p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="mb-resp-15">
                                           <li>Full Responsive Design</li>
                                           <li>Modern Browser Compatible</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6  col-sm-6">
                                        <ul>
                                           <li>Clean & Quality Code</li>
                                           <li>7/24 Customer Support</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 skills-item-resp">
                                        <div class="skills-item">
                                            <div class="skills-item-text">
                                                <h5>Design</h5>
                                            </div>
                                            <div class="body">
                                                <h2 class="counter">80</h2>
                                                <div class="skills-progress-bar">
                                                    <div class="skills-progress-value slideInLeft wow" data-percent="80"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 skills-item-resp">
                                        <div class="skills-item">
                                            <div class="skills-item-text">
                                                <h5>Coding</h5>
                                            </div>
                                            <div class="body">
                                                <h2 class="counter">90</h2>
                                                <div class="skills-progress-bar">
                                                    <div class="skills-progress-value slideInLeft wow" data-percent="90"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// Skills Section End //-->

            <!--// My Works Start //-->
            <section class="section pb-0 bg-primary-light" id="porfolio" data-scroll-index="4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section-heading-left">
                                <span>Works</span>
                                <h2>My Works</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-filter">
                                <a href="#" data-portfolio-filter="*" class="current">All</a>
                                <a href="#" data-portfolio-filter=".mockup">Mockup</a>
                                <a href="#" data-portfolio-filter=".ui">UI/UX</a>
                            </div>
                        </div>
                    </div>
                    <div class="row portfolio-grid" id="portfolio-masonry-wrap">
                        <div class="col-md-6 col-lg-4 portfolio-item mockup">
                            <div class="portfolio-item-inner">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/portfolio-img-1.jpg" alt="Portfolio image" class="img-fluid">
                                    <a href="img/portfolio/portfolio-img-1.jpg" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="portfolio-details">
                                        <span>Mockup</span>
                                        <h5>Card Mockup</h5>
                                    </div>
                                    <a href="portfolio-single.html" class="portfolio-link">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 portfolio-item mockup">
                            <div class="portfolio-item-inner">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/portfolio-img-2.jpg" alt="Portfolio image" class="img-fluid">
                                    <a href="img/portfolio/portfolio-img-2.jpg" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="portfolio-details">
                                        <span>Mockup</span>
                                        <h5>Mockup Box</h5>
                                    </div>
                                    <a href="portfolio-single.html" class="portfolio-link">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 portfolio-item mockup">
                            <div class="portfolio-item-inner">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/portfolio-img-3.jpg" alt="Portfolio image" class="img-fluid">
                                    <a href="img/portfolio/portfolio-img-3.jpg" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="portfolio-details">
                                        <span>Mockup</span>
                                        <h5>Coffee Mockup</h5>
                                    </div> 
                                    <a href="portfolio-single.html" class="portfolio-link">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 portfolio-item mockup">
                            <div class="portfolio-item-inner">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/portfolio-img-4.jpg" alt="Portfolio image" class="img-fluid">
                                    <a href="img/portfolio/portfolio-img-4.jpg" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="portfolio-details">
                                        <span>Mockup</span>
                                        <h5>Square Box</h5>
                                    </div> 
                                    <a href="portfolio-single.html" class="portfolio-link">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 portfolio-item ui">
                            <div class="portfolio-item-inner">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/portfolio-img-5.jpg" alt="Portfolio image" class="img-fluid">
                                    <a href="img/portfolio/portfolio-img-5.jpg" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="portfolio-details">
                                        <span>Ui Design</span>
                                        <h5>Paper Design</h5>
                                    </div>
                                    <a href="portfolio-single.html" class="portfolio-link">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 portfolio-item mockup">
                            <div class="portfolio-item-inner">
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/portfolio-img-6.jpg" alt="Portfolio image" class="img-fluid">
                                    <a href="img/portfolio/portfolio-img-6.jpg" class="portfolio-zoom-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="portfolio-details">
                                        <span>Mockup</span>
                                        <h5>Business Card</h5>
                                    </div> 
                                    <a href="portfolio-single.html" class="portfolio-link">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="call-to-action">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="call-to-action-inner">
                                    <h2>Dou you need a new project ?</h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="call-to-action-btn">
                                    <a href="#" data-scroll-nav="7"  class="white-btn">
                                        <span class="text">Contact Me</span>
                                        <span class="icon"><i class="fa fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// My Works End //-->

            <!--// Team Section Start //-->
            <section class="section" id="team">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-heading">
                                <span>Team</span>
                                <h2>My Team</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0.1s">
                            <div class="team-card">
                                <div class="img">
                                    <img src="img/team/team-img-1.jpg" alt="Team image">
                                </div>
                                <div class="body">
                                    <div class="text">
                                        <h5>George Avenue</h5>
                                        <p>Web Designer</p>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0.2s">
                            <div class="team-card">
                                <div class="img">
                                    <img src="img/team/team-img-2.jpg" alt="Team image">
                                </div>
                                <div class="body">
                                    <div class="text">
                                        <h5>Dominick A. Gray</h5>
                                        <p>App Developer</p>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0.3s">
                            <div class="team-card">
                                <div class="img">
                                    <img src="img/team/team-img-3.jpg" alt="Team image">
                                </div>
                                <div class="body">
                                    <div class="text">
                                        <h5>Michael L. Lloyd</h5>
                                        <p>UI Designer</p>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// Team Section End //-->

            <!--// Testimonial Section Start //-->
            <section class="section pb-minus-76 bg-primary-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section-heading-left">
                                <span>Testimonial</span>
                                <h2>My Clients</h2>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme" id="testimonialCarousel">
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="img">
                                    <img src="img/testimonial/testimonial-img-1.jpg" alt="Testimonial image" class="img-fluid">
                                </div>
                                <div class="body">
                                    <h5>Jeff N. Hood</h5>
                                    <span>New Customer</span>
                                    <p>
                                        It is a long established fact that a reader will be distracted 
                                        by the readable content of a page when looking at its layout. 
                                    </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <span class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="img">
                                    <img src="img/testimonial/testimonial-img-2.jpg" alt="Testimonial image" class="img-fluid">
                                </div>
                                <div class="body">
                                    <h5>James E. Nelson</h5>
                                    <span>New Customer</span>
                                    <p>
                                        It is a long established fact that a reader will be distracted 
                                        by the readable content of a page when looking at its layout. 
                                    </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <span class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="img">
                                    <img src="img/testimonial/testimonial-img-3.jpg" alt="Testimonial image" class="img-fluid">
                                </div>
                                <div class="body">
                                    <h5>Wallace Chuck</h5>
                                    <span>New Customer</span>
                                    <p>
                                        It is a long established fact that a reader will be distracted 
                                        by the readable content of a page when looking at its layout. 
                                    </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <span class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="img">
                                    <img src="img/testimonial/testimonial-img-4.jpg" alt="Testimonial image" class="img-fluid">
                                </div>
                                <div class="body">
                                    <h5>Nitin Khajotia</h5>
                                    <span>New Customer</span>
                                    <p>
                                        It is a long established fact that a reader will be distracted 
                                        by the readable content of a page when looking at its layout. 
                                    </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <span class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// Testimonial Section End //-->
            
            <!--// Blog Section Start //-->
            <section class="section pb-minus-76" id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section-heading-left">
                                <span>Blog</span>
                                <h2>My Blog</h2>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme" id="blogCarousel">
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="blog-single.html">
                                        <img src="img/blog/blog-img-1.jpg" alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-body">
                                    <img src="img/blog/blog-author-img.jpg" alt="Blog author image" class="blog-author-img">
                                    <div class="blog-meta">
                                        <a href="#"><span><i class="far fa-user"></i>By Admin</span></a>
                                        <a href="#"><span><i class="far fa-bookmark"></i>Design</span></a>
                                    </div>
                                    <h5>
                                        <a href="blog-single.html">
                                            How To Create A Design Brief
                                        </a>
                                    </h5>
                                    <p>
                                        It is a long established fact that a reader will be distracted [..]
                                    </p>
                                    <a href="blog-single.html" class="blog-link">
                                        Read More
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="blog-single.html">
                                        <img src="img/blog/blog-img-2.jpg" alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-body">
                                    <img src="img/blog/blog-author-img.jpg" alt="Blog author image" class="blog-author-img">
                                    <div class="blog-meta">
                                        <a href="#"><span><i class="far fa-user"></i>By Admin</span></a>
                                        <a href="#"><span><i class="far fa-bookmark"></i>Design</span></a>
                                    </div>
                                    <h5>
                                        <a href="blog-single.html">
                                            Work On The Latest UI Design Models
                                        </a>
                                    </h5>
                                    <p>
                                        It is a long established fact that a reader will be distracted [..]
                                    </p>
                                    <a href="blog-single.html" class="blog-link">
                                        Read More
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="blog-single.html">
                                        <img src="img/blog/blog-img-3.jpg" alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-body">
                                    <img src="img/blog/blog-author-img.jpg" alt="Blog author image" class="blog-author-img">
                                    <div class="blog-meta">
                                        <a href="#"><span><i class="far fa-user"></i>By Admin</span></a>
                                        <a href="#"><span><i class="far fa-bookmark"></i>Design</span></a>
                                    </div>
                                    <h5>
                                        <a href="blog-single.html">
                                            The Golden Rule Between Unique Design
                                        </a>
                                    </h5>
                                    <p>
                                        It is a long established fact that a reader will be distracted [..]
                                    </p>
                                    <a href="blog-single.html" class="blog-link">
                                        Read More
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="blog-single.html">
                                        <img src="img/blog/blog-img-4.jpg" alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-body">
                                    <img src="img/blog/blog-author-img.jpg" alt="Blog author image" class="blog-author-img">
                                    <div class="blog-meta">
                                        <a href="#"><span><i class="far fa-user"></i>By Admin</span></a>
                                        <a href="#"><span><i class="far fa-bookmark"></i>Wordpress</span></a>
                                    </div>
                                    <h5>
                                        <a href="blog-single.html">
                                            How to set up a Wordpress website ?
                                        </a>
                                    </h5>
                                    <p>
                                        It is a long established fact that a reader will be distracted [..]
                                    </p>
                                    <a href="blog-single.html" class="blog-link">
                                        Read More
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// Blog Section End //-->

            <!--// Contact Section Start //-->
            <section class="section bg-primary-light" id="contact" data-scroll-index="7">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-heading">
                                <span>Contact Me</span>
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <span class="fa fa-map-marker-alt"></span>
                                </div>
                                <div class="body">
                                    <h5>Address</h5>
                                    <p>1395 Nixon Avenue Etowah, TN 37331 
                                        <br>
                                        United States
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <span class="fas fa-envelope-open-text"></span>
                                </div>
                                <div class="body">
                                    <h5>E-Mail Phone:</h5>
                                    <p>filaous@example.com</p>
                                    <p>+1 422-200-5555</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="contact-form-wrap">
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="contact-form-group">
                                                <input type="text" class="form-control" name="contact_name" id="contactName" placeholder="Your Name *">
                                                <div class="form-validate-icons">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-form-group">
                                                <input type="text" class="form-control" name="contact_phone" id="contactPhone" placeholder="Phone Exp. 200-255-4444 *">
                                                <div class="form-validate-icons">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-form-group">
                                                <input type="text" class="form-control" name="contact_email" id="contactEmail" placeholder="Your Email *">
                                                <div class="form-validate-icons">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-form-group custom-select-wrapper">
                                                <select name="contact_subject" class="form-control" id="contactSubject">
                                                    <option value="Please Select">Please Select</option>
                                                    <option value="Sales">Sales</option>
                                                    <option value="Services">Services</option>
                                                    <option value="Support">Support</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="contact-form-group">
                                                <textarea name="contact_message" id="contactMessage" class="form-control"  placeholder="Your Message *" cols="20" rows="8"></textarea>
                                                <div class="form-validate-icons">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="form-alerts">
                                                <div class="empty-form text-center" style="display: none;"><span>Please Fill Required Fields</span></div>
                                                <div class="terms-alert text-center" style="display: none;"><span>Please Accept The Terms</span></div>
                                                <div class="subject-alert text-center" style="display: none;"><span>Please Select Subject</span></div>
                                                <div class="security-alert text-center" style="display: none;"><span>Security code does not match !</span></div>
                                                <div class="email-invalid text-center" style="display: none;"><span>Please enter a valid email address.Exp. example@gmail.com</span></div>
                                                <div class="phone-invalid text-center" style="display: none;"><span>Please enter a valid phone number.Exp. 200-255-4444</span></div>
                                            </div>
                                            <div class="contact-btn-left">
                                                <button type="submit" id="contactBtn" class="primary-btn">
                                                    <span class="text">Send Message</span>
                                                    <span class="icon"><i class="fa fa-arrow-right"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// Contact Section End //-->

            <!--//Google Map Section Start //-->
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3209.9276396281293!2d-82.32472778472037!3d36.43513238002549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885a86bd9ebc8df3%3A0xa66b715302e6215a!2s381%20Allison%20Rd%2C%20Piney%20Flats%2C%20TN%2037686%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1607771147842!5m2!1str!2str" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!--// Google Map Section End //-->

            <!--// Footer Start //-->
            <footer class="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 footer-widget-resp">
                                <div class="footer-widget">
                                    <h6 class="footer-title">About Me</h6>
                                    <img src="img/bg/logo_white.png" alt="footer logo" class="img-fluid footer-logo">
                                    <p class="footer-desc">
                                        It is a long established fact that a reader will be 
                                        distracted by the readable content..
                                    </p>
                                    <div class="footer-social-links">
                                        <a href="javascript:void(0)">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 footer-widget-resp">
                                <div class="footer-widget footer-widget-pl">
                                    <h6 class="footer-title">Usefull Links</h6>
                                    <ul class="footer-links">
                                        <li>
                                            <a href="javascript:void(0)">My Team</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">My Services</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">My Resume</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">My Works</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Get in Touch</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 footer-widget-resp">
                                <div class="footer-widget">
                                    <h6 class="footer-title">Contact Info</h6>
                                    <div class="footer-contact-info-wrap">
                                        <ul class="footer-contact-info-list">
                                            <li>
                                                <h6>Address:</h6>
                                                <p>
                                                    1395 Nixon Avenue Etowah, TN 37331
                                                    <br>United States
                                                </p>
                                            </li>
                                            <li>
                                                <h6>E-Mail & Phone:</h6>
                                                <div class="text">
                                                    <p>+1 422-200-5555</p>
                                                    <p>filaous@example.com</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p class="copyright-text">© Copyright 2021. Designed By Aip Themes</p>
                    </div>
                </div>
            </footer>
            <!--// Footer End //-->
        </main>
        <!--// Main Area End //-->

        <a href="#" class="scroll-top-btn" data-scroll-goto="1">
            <i class="fa fa-arrow-up"></i>
        </a>
        <!--// .scroll-top-btn // -->

        <div id="preloader-wrap">
            <div class="preloader-inner">
                <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        <!--// Preloader // -->

    </div>
    <!--// Page Wrapper End //-->

    <!-- Success Modal Start -->
    <div class="modal fade custom-modal" id="formSuccessModal" tabindex="-1" role="dialog" aria-labelledby="formSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header success">
                    <h5 class="modal-title" id="formSuccessModalLabel">Success</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-popup-inner">
                        <div class="form-icon success">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                <circle class="path circle" fill="none"  stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                <polyline class="path check" fill="none" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                            </svg>
                        </div>
                        <div class="form-body">
                            <p>
                                Your message has been sent.We will contact you as soon as possible.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="popup-btn success" data-bs-dismiss="modal">Okay</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Success Modal End -->

    <!-- Danger Modal Start -->
    <div class="modal fade custom-modal" id="formDangerModal" tabindex="-1" role="dialog" aria-labelledby="formDangerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header danger">
                    <h5 class="modal-title" id="formDangerModalLabel">Error</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-popup-inner">
                        <div class="form-icon danger">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                <circle class="path circle" fill="none" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                <line class="path line" fill="none" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3" />
                                <line class="path line" fill="none" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2" />
                            </svg>
                        </div>
                        <div class="form-body">
                            <p>
                                Error!Something went wrong.There was an error sending your message.
                                <span id="error_message"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="popup-btn danger" data-bs-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Danger Modal End -->

    <div id="colorOptionsSidebar">
        <div class="color-options-wrap">
            <button type="button" id="colorOptionsSidebarToggle">
                <i class="fa fa-cog fa-spin"></i>
            </button>
            <div class="color-options-list">
                <span class="color-options-item default" data-skins-css-path="css/skins/default-color.css"></span>
                <span class="color-options-item blue" data-skins-css-path="css/skins/blue-color.css"></span>
                <span class="color-options-item red" data-skins-css-path="css/skins/red-color.css"></span>
                <span class="color-options-item yellow" data-skins-css-path="css/skins/yellow-color.css"></span>
                <span class="color-options-item green" data-skins-css-path="css/skins/green-color.css"></span>
                <span class="color-options-item pink" data-skins-css-path="css/skins/pink-color.css"></span>
                <span class="color-options-item turquose" data-skins-css-path="css/skins/turquose-color.css"></span>
                <span class="color-options-item purple" data-skins-css-path="css/skins/purple-color.css"></span>
                <span class="color-options-item blue2" data-skins-css-path="css/skins/blue-color-2.css"></span>
                <span class="color-options-item orange" data-skins-css-path="css/skins/orange-color.css"></span>
                <span class="color-options-item magenta" data-skins-css-path="css/skins/magenta-color.css"></span>
                <span class="color-options-item orange2" data-skins-css-path="css/skins/orange-color-2.css"></span>
            </div>
        </div>
    </div>
    <!--// #colorOptionsSidebar //-->

    <div id="rtlSidebar">
        <button type="button" id="rtlToggle">RTL</button>
    </div>
    <!--// #rtlSidebar //-->

    <!--// JQuery //-->
    <script src="vendor/js/jquery.min.js"></script>
    <!--// Bootstrap //-->
    <script src="vendor/js/bootstrap.min.js"></script>
    <!--// Images Loaded Js //-->
    <script src="vendor/js/images.loaded.min.js"></script>
    <!--// Wow Js //-->
    <script src="vendor/js/wow.min.js"></script>
    <!--// Magnific Popup //-->
    <script src="vendor/js/magnific.popup.min.js"></script>
    <!--// Waypoint Js //-->
    <script src="vendor/js/waypoint.min.js"></script>
    <!--// Counter Up Js //-->
    <script src="vendor/js/counter.up.min.js"></script>
    <!--// JQuery Easing Functions //-->
    <script src="vendor/js/jquery.easing.min.js"></script>
    <!--// Owl Carousel //-->
    <script src="vendor/js/owl.carousel.min.js"></script>
    <!--// Form Validate //-->
    <script src="vendor/js/validate.min.js"></script>
    <!--// Form Validate //-->
    <script src="vendor/js/custom.select.plugin.js"></script>
    <!--// Scroll It //-->
    <script src="vendor/js/scrollit.min.js"></script>
    <!--// Isotope Js //-->
    <script src="vendor/js/isotope.min.js"></script>
    <!--// Particles Js //-->
    <script src="vendor/js/particles.js"></script>
    <!--// Main Js //-->
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from aipthemes.com/filaous/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Feb 2023 05:57:41 GMT -->
</html>