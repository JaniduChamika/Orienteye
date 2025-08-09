<?php
session_start();
require "connection.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home</title>
    <link rel="icon" href="resourse//logo//logo2.png" />

    <link rel="stylesheet" href="icofont.css" />

    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- slider  -->
    <link rel="stylesheet" href="css/slider2.css" />
    <!-- footer  -->
    <link rel="stylesheet" href="css/footer.css" />
    <!-- heder  -->
    <link rel="stylesheet" href="css/header.css" />
    <!-- service card  -->
    <link rel="stylesheet" href="css/swiper.min.css" />
    <link rel="stylesheet" href="css/serviceCard.css" />
    <!-- svgcss  -->
    <link rel="stylesheet" href="resourse//cssfileimage//content-structure-styles.css" />
    <link rel="stylesheet" href="resourse//cssfileimage//code-typing-styles.css" />
    <link rel="stylesheet" href="resourse//cssfileimage//designer-life-styles.css" />

    <link rel="stylesheet" href="css/portfolio.css" />

    <link rel="stylesheet" href="css/comman.css" />
    <!-- dark mode button font -->
    <link rel="stylesheet" href="css/all.min.css" />

    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel='stylesheet' href='resourse//feedback//animate.min.css'>
    <link rel='stylesheet' href='resourse//feedback//all.min.css'>
    <!-- <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'> -->
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel='stylesheet' href='resourse//feedback//material-icons.min.css'>
    <!-- <link rel="stylesheet" href="test.css"> -->

</head>

<body>
    <div class="loadingScreen" style="z-index: 999; background-color: white;" id="loadingscreen">



        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_f1bzzk5c.json" background="transparent" speed="0.8" style="width: 300px; height: 300px;" loop autoplay></lottie-player>


    </div>
    <div class="container-fluid p-0">

        <div class="row">
            <?php
            require "component//header.php";
            ?>
        </div>
        <!-- </nav> -->

        <?php
        require "chat.php";

        ?>

        <div class="row">

            <div class="col-12 wrapper p-0">

                <!-- <nav class="sticky-top"> -->
                <div class="row wrap">

                    <div class="col-12 position-relative">
                        <!-- fix image  -->
                        <div class="fixImage1" style="position: fixed;" id="fixImage1"></div>

                        <!-- slider  -->
                        <div class="row sli ">
                            <div class="col-12 ">
                                <div class="row ">
                                    <div class="container2 ">
                                        <div class="slider " style="transition-duration: 0s;background-color: black;">

                                            <div class="box1 box">
                                                <div class="bg"></div>
                                                <div class="details">
                                                    <h1 class="titlesider">WEB DESIGN</h1>
                                                    <p class="p1">
                                                        It's not just a service, It's more than service.
                                                        Join us to design your website more effectively.
                                                    </p>
                                                    <br />
                                                    <button class="button1 ">Vist Now</button>
                                                </div>

                                                <div class="illustration">
                                                    <div class="inner"></div>
                                                </div>
                                            </div>
                                            <div class="box2 box">
                                                <div class="bg"></div>
                                                <div class="details">
                                                    <h1 class="titlesider">WEB DEVELOPMENT</h1>
                                                    <p class="p1">
                                                        It's not just a service, It's more than service.
                                                        Convert your business to online platform.
                                                        Join with us and build a web application for your business.

                                                    </p>
                                                    <br />
                                                    <button class="button1">Visit Now</button>
                                                </div>

                                                <div class="illustration">
                                                    <div class="inner"></div>
                                                </div>
                                            </div>

                                            <div class="box3 box">
                                                <div class="bg"></div>
                                                <div class="details">
                                                    <h1 class="titlesider">LOGO DESIGN</h1>
                                                    <p class="p1">
                                                        It's not just a service, It's more than service.
                                                        Deisgn effective logo, flyer & others to your business.

                                                    </p>
                                                    <br />
                                                    <button class="button1">Vist Now</button>
                                                </div>

                                                <div class="illustration">
                                                    <div class="inner"></div>
                                                </div>
                                            </div>


                                            <div class="box5 box">
                                                <div class="bg"></div>
                                                <div class="details">
                                                    <h1 class="titlesider">Customization Plans</h1>
                                                    <p class="p1">
                                                        It's not just a service, It's more than service.
                                                        You can create your own plan to reduce your investment without reducing the benefits.

                                                    </p>
                                                    <br />

                                                    <button class="button1">Visit Now</button>
                                                </div>

                                                <div class="illustration">
                                                    <div class="inner"></div>
                                                </div>
                                            </div>

                                        </div>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="prev d-none" width="56.898" height="91" viewBox="0 0 56.898 91">
                                            <path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(0 91) rotate(-90)" fill="#fff" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="next d-none" width="56.898" height="91" viewBox="0 0 56.898 91">
                                            <path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(56.898) rotate(90)" fill="#fff" />
                                        </svg>
                                        <div class="trail d-none">
                                            <div class="box1 active"></div>
                                            <div class="box2"></div>
                                            <div class="box3"></div>
                                            <!-- <div class="box4"></div> -->
                                            <div class="box5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <!-- card top  -->
                    <div class="col-12 serviceCard bactheame pb-3">
                        <div class="row pt-5 paddinsm">
                            <div class="col-12 magintopsm">
                                <div class="blog-slider tilesTheam" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="blog-slider__wrp swiper-wrapper">
                                        <div class="blog-slider__item swiper-slide">
                                            <div class="blog-slider__img">

                                                <img src="resourse//imagesvg//content-structure-animate.svg">
                                            </div>
                                            <div class="blog-slider__content">

                                                <div class="blog-slider__title">Web Design</div>
                                                <div class="blog-slider__text textcol">Design a creative interface and meaningful website.</div>
                                                <a href="#" class="blog-slider__button fs-6" onclick="gopriceplan2(1)" id="pricecard1">View Plan</a>
                                            </div>
                                        </div>
                                        <div class="blog-slider__item swiper-slide">
                                            <div class="blog-slider__img">
                                                <img src="resourse//imagesvg//code-typing-animate.svg">
                                            </div>
                                            <div class="blog-slider__content">

                                                <div class="blog-slider__title">Web Development</div>
                                                <div class="blog-slider__text textcol">Build up a web application to manage your businesses and make extra income.</div>
                                                <a href="#" class="blog-slider__button fs-6" onclick="gopriceplan2(2)" id="pricecard2">View Plan</a>
                                            </div>
                                        </div>

                                        <div class="blog-slider__item swiper-slide">
                                            <div class="blog-slider__img">
                                                <img src="resourse//imagesvg//designer-life-animate.svg">
                                            </div>
                                            <div class="blog-slider__content">

                                                <div class="blog-slider__title">Logo Design</div>
                                                <div class="blog-slider__text textcol">Design an attractive logo for your business.</div>
                                                <a href="#" class="blog-slider__button fs-6" onclick="gopriceplan2(3)" id="pricecard3">View Plan</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-slider__pagination"></div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 con bactheame">

                        <div class="row ">

                            <div class="col-12 col-md-11 offset-md-1 offset-lg-0 col-lg-6 col-xxl-6 col-xxl2-5 offset-xxl2-1">
                                <div class="row ps-md-0 ps-lg-4 pe-0 h-100">
                                    <div class="col-12 div4 " data-aos="fade-up-right" data-aos-duration="1000">
                                        <div class="row p-4 p-md-4  px-xl-1 px-xxl-4 h-100">
                                            <div class="col-12 contenctbox h-100 tilesTheam">
                                                <div class="row p-4 p-md-5 ">
                                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6 imagebox" style="background-image: url('resourse//appimg//home//webdesign.jpg');">

                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6  ps-md-4 pt-4 pt-md-0 pt-lg-4 ps-lg-4 ps-xl-1 pt-xl-0 pb-0">
                                                        <h1 class="headTopic1 ms-1 ms-xl-4">Web Design</h1>
                                                        <ul class="fs-6 list1 mt-md-3 mb-0">
                                                            <li>Mobile responsive designs</li>
                                                            <li>E-Commerce web designs </li>
                                                            <li>Customization available</li>
                                                            <li>3 month free service</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12  px-0 pt-3 pt-md-1  ">
                                                        <p class="fs-6 para mt-md-3">The user interface has the greatest impact on the growth or
                                                            success of your business. The user or customer can get an idea about you or
                                                            your business from the interface of your application or website. As a result,
                                                            you have to get the most suitable interface for your app or website. Here we
                                                            design your web application or site interface.
                                                            <a href="#" class="text-end text-decoration-none"> Read More <i class="icofont-rounded-double-right"></i></a>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-11 col-lg-6 col-xxl-6 col-xxl2-5">
                                <div class="row  pe-md-0 pe-lg-4 ps-0 h-100">
                                    <div class="col-12 div5 " data-aos="fade-up-left" data-aos-duration="1000">
                                        <div class="row p-4 pt-0 p-md-4  px-xl-1 px-xxl-4 h-100">
                                            <div class="col-12 contenctbox h-100 tilesTheam">
                                                <div class="row p-4  p-md-5">
                                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6 imagebox" style="background-image: url('resourse//appimg//home//webdevelop.jpg');">

                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6 ps-md-4 pt-4 pt-md-0 pt-lg-4 ps-lg-4 ps-xl-1 pt-xl-0 pb-0">
                                                        <h1 class="headTopic1 ms-1 ms-xl-4">Web Development</h1>
                                                        <ul class="fs-6 list1 mt-md-3 mt-xl-3 mb-0">
                                                            <li>E-Commerce web application</li>
                                                            <li>Payment gateways integration</li>
                                                            <!-- <li>With database management system</li> -->
                                                            <li>Customization available</li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-12  px-0 pt-3 pt-md-1 ">


                                                        <p class="fs-6 para mt-md-3">The web app can help you grow your business or bring your business down.
                                                            It is affected by the application interface and user-friendliness. User-friendliness is more important in this case.
                                                            Also, the web application should be friendly to the owner. That way he can easily manage his business.
                                                            Join us to create a web application to grow your business easily.<a href="#" class="text-end text-decoration-none"> Read More <i class="icofont-rounded-double-right"></i></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 transdiv1">
                                <div class="row text-center h-100">
                                    <span class="trantopic my-auto text-light">
                                        Web Development
                                        <br />
                                        Join Us
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 con bactheame">
                        <div class="row">
                            <div class="col-12 col-lg-11 col-xxl-10  m-auto">
                                <div class="row p-4 p-md-5 pb-2">
                                    <div class="col-12 div3 tilesTheam" data-aos="zoom-in" data-aos-duration="1000">

                                        <div class="row p-3 px-2 p-md-5" style="height: 100%;">
                                            <div class="col-12 col-lg-6 my-auto">
                                                <div class="row">
                                                    <div class="col-12 text-center ">
                                                        <p class="h2">BEST WEB DESIGN</p>
                                                    </div>
                                                    <div class="col-10 offset-1 col-lg-8 offset-lg-2 align-items-center mt-3">
                                                        <div class="row">
                                                            <ul class="nav nav-tabs tab1my txcolr">
                                                                <li class="nav-item togtex  mx-auto nt active text-center align-items-center " id="tbox1" onclick="change1();">

                                                                    <p class="mt-3 nt1">OUR VISION</p>

                                                                </li>
                                                                <li class="nav-item togtex  mx-auto  nt text-center align-items-center navlist1" id="tbox2" onclick="change2();">

                                                                    <p class="mt-3 nt1">OUR MISSION</p>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p id="content1" class="text-center fs-6 pt-2" style="height: auto;">The vision of Orianteye Solutions is that we can do anything through support, commitment and hard work. And We are hoping to be a leading software company in the World.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 d-none d-lg-block">
                                                <div class="row h-100">
                                                    <div class="col-12 text-center my-auto ">
                                                        <div class="row ">
                                                            <div class="col-12">
                                                                <img src="resourse//logo//logo2.png" class=" imagelogo" />

                                                            </div>
                                                            <div class="col-12 pt-5">
                                                                <span class="companyName2 fs-3">Orianteye <br /></span><span>Solutions</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 con bactheame">
                        <div class="row">
                            <div class="col-12 col-lg-11 col-xxl-10 m-auto">
                                <div class="row p-4 px-md-5 pt-0 pb-1">
                                    <div class="col-12 bigbox2 contenctbox tilesTheam" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="row  d-flex justify-content-center  p-3 pb-5 p-md-5 pt-md-4 ">
                                            <div class="col-12 mb-3">
                                                <p class="text-center h2 latestTitel fw-bold">OUR PORTFOLIO</p>

                                            </div>
                                            <?php
                                            $pf = Database::search("SELECT * FROM `project` INNER JOIN `project_type` ON `project_type`.pt_id = `project`.project_type ORDER BY `pro_id` DESC LIMIT 4");
                                            for ($i = 0; $i < $pf->num_rows; $i++) {
                                                $pf_d = $pf->fetch_assoc();
                                            ?>
                                                <div class="entry position-relative" data-aos="zoom-in-up" data-aos-duration="500">
                                                    <div class="position-absolute w-100 h-100 tracsdark">

                                                        <a>
                                                            <div class="title">
                                                                <strong><?php echo $pf_d["project_name"] ?></strong>
                                                                <br />
                                                                <span><?php echo $pf_d["pt_name"] ?></span>
                                                            </div>
                                                            <img src="resourse/portfolio/<?php echo $pf_d["p_image"] ?>" />

                                                            <a href="<?php echo $pf_d["link"] ?>"> <i class="icofont-link"></i></a>
                                                        </a>
                                                    </div>
                                                    <ul style="white-space: nowrap;" class="d-flex">
                                                        <li style="background-color:<?php echo $pf_d["theam1"] ?>"></li>
                                                        <li style="background-color:<?php echo $pf_d["theam2"] ?>"></li>
                                                        <li style="background-color:<?php echo $pf_d["theam3"] ?>"></li>


                                                    </ul>

                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <div class="col-12 text-center pt-2">
                                                <a href="portfolio.php" class="btn lblue-outline px-4">More</a>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-12 con bactheame">
                        <div class="row">
                            <div class="col-12 col-lg-11 col-xxl-10 m-auto">
                                <div class="row p-4 p-md-5 pb-2">
                                    <div class="col-12 bigbox2 contenctbox tilesTheam position-relative" data-aos="fade-up" data-aos-duration="1000">


                                        <div class="row bodybg  p-3 pb-5 p-md-5 pt-md-4">
                                            <div class="col-12">

                                            </div>
                                            <!-- <div class="position-absolute w-100 h-100 darkbackcount" style="left: 0px;">
                                        </div> -->
                                            <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-4">
                                                <div class="row">
                                                    <span class="fs-6 text-white-50">
                                                    Orianteye Solutions, We are the best software solution providing company.
                                                    </span>
                                                    <!-- <span class="fs-3 fw-bold text-white">WE ARE SPECIAL...</span> -->
                                                    <!-- //////////////////// -->
                                                    <div class="decode-text">
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">W</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">E</div>
                                                        <div class="space"></div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">A</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">R</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">E</div>
                                                        <div class="space"></div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">S</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">P</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">E</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">C</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">I</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">A</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">L</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">.</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">.</div>
                                                        <div class="text-animation fs-3" style="display:inline-block;position:relative;">.</div>
                                                    </div>
                                                    <!-- ///////////////////// -->
                                                    <br />
                                                    <span class="fs-6 text-white">
                                                        Our company provides the best software solution.
                                                        As a company we have trustworthy, flexible, creative,
                                                        skillful, professional team to resolve challenges and
                                                        to give new life to client requirments. We are a company
                                                        that leads to success of your business. We do our best and
                                                        give strength,instructions to take your business a step further,
                                                        achieve your business goals and expand your business to
                                                        whole over the world.
                                                    </span>

                                                </div>
                                                <?php $cou = Database::search("SELECT * FROM `counter`;");
                                                if ($cou->num_rows == 1) {
                                                    $cou_dat = $cou->fetch_assoc();
                                                } ?>

                                                <div class="row mt-3 d-flex justify-content-center">

                                                    <div class="col-6 col-xl-3 text-center ">
                                                        <div class="row p-2  h-100">
                                                            <div class="col-12">
                                                                <div class="row border border-1 border-white rounded-3  shadow pt-4 pb-4  h-100">
                                                                    <span class="fs-4 text-white"><span class="fs-4 text-white" id="nbr"><?php echo $cou_dat["workingHours"]; ?></span>+</span>
                                                                    <br />
                                                                    <span class="text-white" style="font-size: 13px;">
                                                                        Working Hours
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-6 col-xl-3 text-center ">
                                                        <div class="row p-2  h-100">
                                                            <div class="col-12">
                                                                <div class="row border border-1 border-white rounded-3  shadow pt-4 pb-4 h-100">
                                                                    <span class="fs-4 text-white"><span class="fs-4 text-white" id="nbr1"><?php echo $cou_dat["completedProject"]; ?></span>+</span>
                                                                    <br />
                                                                    <span class="text-white" style="font-size: 13px;">
                                                                        Completed Projects
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-xl-3 text-center ">
                                                        <div class="row p-2 h-100">
                                                            <div class="col-12">
                                                                <div class="row border border-1 border-white rounded-3  shadow pt-4 pb-4 h-100">
                                                                    <span class="fs-4 text-white"><span class="fs-4 text-white" id="nbr2"><?php echo $cou_dat["happyClient"]; ?></span>+</span>
                                                                    <br />
                                                                    <span class="text-white" style="font-size: 13px;">
                                                                        Happy Clients
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-xl-3 text-center ">
                                                        <div class="row p-2  h-100">
                                                            <div class="col-12">
                                                                <div class="row border border-1 border-white rounded-3  shadow pt-4 pb-4 h-100">
                                                                    <span class="fs-4 text-white"><span class="fs-4 text-white" id="nbr3"><?php echo $cou_dat["hardWork"]; ?></span>+</span>
                                                                    <br />
                                                                    <span class="text-white" style="font-size: 13px;">
                                                                        Hard Workers
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 con bactheame">
                        <div class="row">
                            <div class="col-12 col-lg-11 col-xxl-10 m-auto">
                                <div class="row p-4 px-md-5 pb-0 pt-0">
                                    <div class="col-12 bigbox2 contenctbox tilesTheam" data-aos="fade-up" data-aos-duration="1000">


                                        <!-- partial:index.partial.html -->
                                        <section id="testimonial-area" class="p-3 pb-3 p-md-5 pt-md-4">
                                            <div class="container">
                                                <div class="row"></div>

                                                <div class="col-md-8 offset-md-2">
                                                    <div class="section-heading text-center">

                                                        <p class="text-center h2 latestTitel fw-bold">A Word From Our Customers</p>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testi-wrap mt-2">
                                                <?php

                                                $fb = Database::search("SELECT * FROM `feedback`  LIMIT 7;");
                                                for ($x = 0; $x < $fb->num_rows; $x++) {
                                                    $fbd = $fb->fetch_assoc();
                                                    if ($x == 0) {
                                                ?>
                                                        <div class="client-single active_feedback position-<?php echo $x + 1 ?>" data-position="position-<?php echo $x + 1 ?>">
                                                            <div class="client-img">
                                                                <img src="resourse//feedback//<?php echo $fbd["image"]; ?>" alt="">
                                                            </div>
                                                            <div class="client-comment">
                                                                <p class="h2 textcol"><?php echo $fbd["clinetName"] ; ?></p>
                                                                <p class="fs-4" style="color: gray;"><?php echo $fbd["feed"]; ?></p>

                                                                <span><i class="icofont-quote-left"></i></span>
                                                            </div>

                                                        </div>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <div class="client-single inactive position-<?php echo $x + 1 ?>" data-position="position-<?php echo $x + 1 ?>">
                                                            <div class="client-img">
                                                                <img src="resourse//feedback//<?php echo $fbd["image"]; ?>" alt="">
                                                            </div>
                                                            <div class="client-comment">
                                                                <p class="h2 textcol"><?php echo $fbd["clinetName"]  ?></p>
                                                                <p class="fs-4" style="color: gray;"><?php echo $fbd["feed"]; ?></p>

                                                                <span><i class="icofont-quote-left"></i></span>
                                                            </div>

                                                        </div>
                                                <?php
                                                    }
                                                }

                                                ?>



                                                <!-- <div class="client-single inactive position-2" data-position="position-2">
                                                    <div class="client-img">
                                                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
                                                    </div>
                                                    <div class="client-comment">
                                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                                        <span><i class="icofont-quote-left"></i></span>
                                                    </div>

                                                </div>

                                                <div class="client-single inactive position-3" data-position="position-3">
                                                    <div class="client-img">
                                                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
                                                    </div>
                                                    <div class="client-comment">
                                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                                        <span><i class="icofont-quote-left"></i></span>
                                                    </div>

                                                </div>

                                                <div class="client-single inactive position-4" data-position="position-4">
                                                    <div class="client-img">
                                                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
                                                    </div>
                                                    <div class="client-comment">
                                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                                        <span><i class="icofont-quote-left"></i></span>
                                                    </div>

                                                </div>

                                                <div class="client-single inactive position-5" data-position="position-5">
                                                    <div class="client-img">
                                                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
                                                    </div>
                                                    <div class="client-comment">
                                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                                        <span><i class="icofont-quote-left"></i></span>
                                                    </div>

                                                </div>

                                                <div class="client-single inactive position-6" data-position="position-6">
                                                    <div class="client-img">
                                                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
                                                    </div>
                                                    <div class="client-comment">
                                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                                        <span><i class="icofont-quote-left"></i></span>
                                                    </div>

                                                </div>

                                                <div class="client-single inactive position-7" data-position="position-7">
                                                    <div class="client-img">
                                                        <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" width="40px" alt="">
                                                    </div>
                                                    <div class="client-comment">
                                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                                        <span><i class="icofont-quote-left"></i></span>
                                                    </div>

                                                </div> -->

                                            </div>

                                        </section>
                                        <!-- partial -->




                                    </div>
                                </div>

                            </div>

                        </div>
                        <!--  -->
                        <!-- news  -->
                        <div class="col-12 con bactheame pb-2">
                            <div class="row">
                                <div class="col-12 col-lg-11 col-xxl-10 m-auto">
                                    <div class="row p-4 p-md-5 pb-0">
                                        <div class="col-12 bigbox2 contenctbox tilesTheam" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="row p-3 p-md-5">
                                                <div class="col-12 mb-3">
                                                    <p class="text-center h2 latestTitel fw-bold">LATEST NEWS & ARTICLES</p>

                                                </div>
                                                <div class="col-12 d-grid ">
                                                    <div class="row ">
                                                        <?php

                                                        $rs = Database::search("SELECT * FROM `news` ORDER BY `nid` DESC LIMIT 3");
                                                        for ($i = 0; $i < $rs->num_rows; $i++) {
                                                            $d = $rs->fetch_assoc();

                                                        ?>
                                                            <div class="col-12 col-md-6 col-xl-4 mx-auto " data-aos="flip-down" data-aos-duration="1000" data-aos-delay="<?php echo 50 + ($i * 200) ?>">
                                                                <div class="row p-1 p-xl-1 px-xxl-2 h-100">

                                                                    <div class="col-12 col-xl-12 m-auto fetuersContent h-100 lightdarkTiles">
                                                                        <div class="row">
                                                                            <div class="col-12 text-center my-4">
                                                                                <span class="topicsize"><?php echo  $d['topic'] ?> </h1>
                                                                            </div>
                                                                            <div class="col-10 offset-1 updateImg" style="background-image: url('resourse//news//<?php echo $d["img_path"] ?>');">

                                                                            </div>
                                                                            <div class="col-12 px-4 px-md-0 col-md-10 offset-md-1 contentUpdate py-4">
                                                                                <P class="fs-6" style="text-align: left;">
                                                                                    <?php echo $d['details'] ?> <a href="#" class="text-end text-decoration-none"> Read More <i class="icofont-rounded-double-right"></i></a>
                                                                                </P>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 con bactheame">
                            <div class="row">
                                <div class="col-12 col-lg-11 col-xxl-10 m-auto">
                                    <div class="row p-4 p-md-5">
                                        <div class="col-12 contenctbox contactbox tilesTheam" data-aos="zoom-in-up" data-aos-duration="1000">
                                            <div class="row h-100 ">
                                                <div class="m-auto text-center">
                                                    <p class="fs-2 ">LET'S GET YOUR PROJECT
                                                        <br />
                                                        STARTED!
                                                    </p>
                                                    <a class="btn transbtn px-5 py-3 fs-5" href="contact.php" id="contact1btn">Contact Us</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="fixtheamBtn">
                <div class="form-check form-switch myswich">
                    <?php
                    require "darkmodebtn.php";
                    ?>
                    <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label> -->
                </div>

            </div>


            <!-- footer  -->
            <?php
            require "component//footer.php";
            ?>
        </div>



        <!-- home  -->
        <!-- sign up moda  -->
        <!-- <script src="js//signinup.js"></script>-->
        <script src="bootstrap.js"></script>
        <!-- footer hader -->
        <script src="jquery//jquery.min.js"></script>

        <!-- slider  -->
        <script src="jquery//slider//gsap-latest-beta.min.js"></script>
        <script src="js//slider2.js"></script>
        <!-- footer  -->
        <script src="js//footer.js"></script>

        <!-- heder  -->
        <script src="jquery//heder//bootstrap.min.js"></script>
        <script src="js//header.js"></script>

        <!-- Service  -->
        <!-- <script src="jquery//servicesJs//jquery.min.js"></script> -->
        <script src="jquery//servicesJs//swiper.min.js"></script>
        <script src="js//serviceCard.js"></script>
        <script src="js//commen.js"></script>
        <script src="aos.js"></script>
        <script src="js//home.js"></script>


        <script src="js//lottie-player.js"></script>
        <!-- <script src="jquery.min.js"></script> -->
        <!-- <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'> -->
        <?php
        if (isset($_GET["thw"])) {
        ?>
            <script>
                themeChanger();
            </script>

        <?php
        }
        ?>
        <script>
            AOS.init();

            const checkbox = document.getElementById('themechangerID');

            checkbox.addEventListener('change', () => {
                document.body.classList.toggle('dark');
            })
        </script>
        <!--Typekit-->
        <script type="text/javascript" src="//use.typekit.net/wyr7rug.js"></script>
        <script type="text/javascript">
            try {
                Typekit.load();
            } catch (e) {}
        </script>
        <script src="js//portfolio.js"></script>

</body>

</html>