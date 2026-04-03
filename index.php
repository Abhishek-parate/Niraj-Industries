<?php
/**
 * Homepage — Rebuilders Construction Company
 * SEO-Optimized | E-E-A-T Ready | Local SEO
 */
$base_url = "http://localhost/nirajindustries/";
include 'include/config.php';

$page_title       = "Rebuilders Construction Company | Building Dreams, Restoring Trust";
$meta_description = "Rebuilders Construction Company — over 20 years of delivering exceptional quality construction services including design & build, commercial and residential construction. Get a free quote today.";
$meta_keywords    = "construction company, building construction, renovation, residential construction, commercial construction, design and build, rebuilders construction, construction services";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary SEO -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
    <meta name="author" content="Rebuilders Construction Company">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="<?php echo $base_url; ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url; ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta property="og:image" content="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img6.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Rebuilders Construction Company — Building Dreams, Restoring Trust">
    <meta property="og:locale" content="en_IN">
    <meta property="og:site_name" content="Rebuilders Construction Company">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img6.png">
    <meta name="twitter:image:alt" content="Rebuilders Construction Company">

    <!--===== FAV ICON =======-->
    <link rel="shortcut icon" href="<?php echo $base_url; ?>assets/img/logo/fav-logo4.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>assets/img/logo/fav-logo4.png">

    <!--===== CSS LINKS =======-->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/swiper.bundle.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/aos.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/mobile.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/owlcarousel.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/slick-slider.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/main.css">

    <!--===== jQuery (must be first) =======-->
    <script src="<?php echo $base_url; ?>assets/js/plugins/jquery-3-6-0.min.js"></script>
</head>
<body class="homepage4-body">

<!--===== PRELOADER STARTS =======-->
<div class="preloader preloader4">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="<?php echo $base_url; ?>assets/img/logo/preloader3.png" alt="Rebuilders Construction"></div>
    </div>
</div>
<!--===== PRELOADER ENDS =======-->

<?php include 'include/header.php'; ?>
<!--===== MOBILE HEADER ENDS =======-->

<!--===== HERO AREA STARTS =======-->
<div class="hero4-slider-area" role="banner" aria-label="Rebuilders Construction Hero Section">
    <img src="<?php echo $base_url; ?>assets/img/elements/elements4.png" alt="" class="elements4" aria-hidden="true">
    <img src="<?php echo $base_url; ?>assets/img/all-images/bg/bg3.png" alt="" class="bg3" aria-hidden="true">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-main-slider">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slideshow">
                                <div class="slider">
                                    <div class="item">
                                        <div class="main-img">
                                            <img src="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img6.png" alt="Rebuilders Construction — Building Dreams Restoring Trust" class="hero-img6" loading="eager" fetchpriority="high">
                                        </div>
                                        <div class="heading-area heading6">
                                            <h5><img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="">Rebuilders Construction Company</h5>
                                            <div class="space20"></div>
                                            <h1>Building Dreams Restoring Trust</h1>
                                            <div class="space16"></div>
                                            <p>Our team of experienced professionals is dedicated to turning your vision into reality with precision and care.</p>
                                            <div class="space32"></div>
                                            <div class="btn-area1">
                                                <a href="<?php echo $base_url; ?>contact-us.php" class="header-btn2-h4">Contact Us <span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="main-img">
                                            <img src="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img7.png" alt="Quality Construction Services by Rebuilders" class="hero-img6" loading="lazy">
                                        </div>
                                        <div class="heading-area heading6">
                                            <h5><img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="">Rebuilders Construction Company</h5>
                                            <div class="space20"></div>
                                            <h2>Building Dreams Restoring Trust</h2>
                                            <div class="space16"></div>
                                            <p>Our team of experienced professionals is dedicated to turning your vision into reality with precision and care.</p>
                                            <div class="space32"></div>
                                            <div class="btn-area1">
                                                <a href="<?php echo $base_url; ?>contact-us.php" class="header-btn2-h4">Contact Us <span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="main-img">
                                            <img src="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img9.png" alt="Expert Construction Team at Rebuilders" class="hero-img6" loading="lazy">
                                        </div>
                                        <div class="heading-area heading6">
                                            <h5><img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="">Rebuilders Construction Company</h5>
                                            <div class="space20"></div>
                                            <h2>Building Dreams Restoring Trust</h2>
                                            <div class="space16"></div>
                                            <p>Our team of experienced professionals is dedicated to turning your vision into reality with precision and care.</p>
                                            <div class="space32"></div>
                                            <div class="btn-area1">
                                                <a href="<?php echo $base_url; ?>contact-us.php" class="header-btn2-h4">Contact Us <span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="hero-side-area">
                                <div class="start-dream">
                                    <div class="img1">
                                        <img src="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img8.png" alt="Start Your Dream Construction Project with Rebuilders" loading="lazy">
                                    </div>
                                    <div class="text">
                                        <div class="link">
                                            <a href="<?php echo $base_url; ?>project.php">Start Your Dream</a>
                                        </div>
                                        <div class="arrow">
                                            <a href="<?php echo $base_url; ?>project.php" aria-label="View Our Projects"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="space30"></div>
                                <div class="author-area">
                                    <img src="<?php echo $base_url; ?>assets/img/all-images/others/author-img2.png" alt="Happy Clients of Rebuilders Construction" loading="lazy">
                                    <div class="space16"></div>
                                    <ul aria-label="5 Star Rating">
                                        <li><i class="fa-solid fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa-solid fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa-solid fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa-solid fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa-solid fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                    <div class="space8"></div>
                                    <p>850+ Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== BRANDS SLIDER STARTS =======-->
<div class="others4-slider-area1" aria-label="Our Brand Partners" role="region">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="others4-slider-area owl-carousel">
                    <div class="img1"><img src="<?php echo $base_url; ?>assets/img/elements/brand-img1.png" alt="Brand Partner 1" loading="lazy"></div>
                    <div class="img1"><img src="<?php echo $base_url; ?>assets/img/elements/brand-img2.png" alt="Brand Partner 2" loading="lazy"></div>
                    <div class="img1"><img src="<?php echo $base_url; ?>assets/img/elements/brand-img3.png" alt="Brand Partner 3" loading="lazy"></div>
                    <div class="img1"><img src="<?php echo $base_url; ?>assets/img/elements/brand-img4.png" alt="Brand Partner 4" loading="lazy"></div>
                    <div class="img1"><img src="<?php echo $base_url; ?>assets/img/elements/brand-img5.png" alt="Brand Partner 5" loading="lazy"></div>
                    <div class="img1"><img src="<?php echo $base_url; ?>assets/img/elements/brand-img1.png" alt="Brand Partner 1" loading="lazy"></div>
                    <div class="img1"><img src="<?php echo $base_url; ?>assets/img/elements/brand-img2.png" alt="Brand Partner 2" loading="lazy"></div>
                    <div class="img1"><img src="<?php echo $base_url; ?>assets/img/elements/brand-img3.png" alt="Brand Partner 3" loading="lazy"></div>
                    <div class="img1"><img src="<?php echo $base_url; ?>assets/img/elements/brand-img4.png" alt="Brand Partner 4" loading="lazy"></div>
                    <div class="img1"><img src="<?php echo $base_url; ?>assets/img/elements/brand-img5.png" alt="Brand Partner 5" loading="lazy"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== BRANDS SLIDER ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<section class="about4-section-area sp1" aria-labelledby="about-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="space100 d-lg-block d-none"></div>
                <div class="space20 d-lg-block d-none"></div>
                <div class="img1 image-anime reveal">
                    <img src="<?php echo $base_url; ?>assets/img/all-images/about/about-img6.png" alt="Rebuilders Construction Work — Quality Craftsmanship" loading="lazy">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="space20 d-lg-none d-block"></div>
                <div class="img1 image-anime reveal">
                    <img src="<?php echo $base_url; ?>assets/img/all-images/about/about-img7.png" alt="Rebuilders Construction Project — Expert Team at Work" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-header heading4">
                    <h5 data-aos="fade-left" data-aos-duration="800">
                        <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="">About Rebuilders Company
                    </h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3" id="about-heading">The Journey, Values, and Vision of Rebuilders Construction Company</h2>
                    <div class="space20"></div>
                    <p data-aos="fade-left" data-aos-duration="1000">Rebuilders Construction Company was founded over 20 years ago with a mission to build exceptional structures and restore properties to their former glory — started as a small family business.</p>
                    <div class="space32"></div>
                    <ul data-aos="fade-left" data-aos-duration="1100">
                        <li><img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check"> First Class Quality Service</li>
                        <li><img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check"> Stylistic Formula Method</li>
                        <li><img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check"> Service With Reasonable Price</li>
                        <li><img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check"> Immediate 24/7 Emergency</li>
                    </ul>
                    <div class="space32"></div>
                    <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
                        <a href="<?php echo $base_url; ?>about-us.php" class="header-btn2-h4">About More <span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span></a>
                    </div>
                    <div class="succes-rate-area" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="successful">
                            <h3><span class="counter">100</span>%</h3>
                            <div class="space16"></div>
                            <p>Success Rate</p>
                        </div>
                        <div class="space20"></div>
                        <div class="client">
                            <h3><span class="counter">3592</span>+</h3>
                            <div class="space16"></div>
                            <p>Satisfied Client</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<section class="service4-section-area sp1" aria-labelledby="service-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="service4-header text-center heading2 space-margin60">
                    <h5><img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="">Our Products</h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3" id="service-heading">Delivering Quality Construction Services for Over 20 Years</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="service4-slider-area owl-carousel" role="region" aria-label="Our Construction Services">
                    <div class="service4-slider-box">
                        <div class="img1">
                            <img src="<?php echo $base_url; ?>assets/img/all-images/service/service-img13.png" alt="Design & Build Construction Service by Rebuilders" loading="lazy">
                        </div>
                        <div class="heading">
                            <a href="<?php echo $base_url; ?>service2.php">Design &amp; Build</a>
                        </div>
                        <div class="arrow">
                            <a href="<?php echo $base_url; ?>service2.php">Read More <span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                    <div class="service4-slider-box">
                        <div class="img1">
                            <img src="<?php echo $base_url; ?>assets/img/all-images/service/service-img14.png" alt="Commercial Construction Service by Rebuilders" loading="lazy">
                        </div>
                        <div class="heading">
                            <a href="<?php echo $base_url; ?>service3.php">Commercial Construction</a>
                        </div>
                        <div class="arrow">
                            <a href="<?php echo $base_url; ?>service3.php">Read More <span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                    <div class="service4-slider-box">
                        <div class="img1">
                            <img src="<?php echo $base_url; ?>assets/img/all-images/service/service-img15.png" alt="Residential Construction Service by Rebuilders" loading="lazy">
                        </div>
                        <div class="heading">
                            <a href="<?php echo $base_url; ?>service4.php">Residential Construction</a>
                        </div>
                        <div class="arrow">
                            <a href="<?php echo $base_url; ?>service4.php">Read More <span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="space40"></div>
                <div class="btn-area1 text-center">
                    <a href="<?php echo $base_url; ?>service1.php" class="header-btn2-h4">View All Products <span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== SERVICE AREA ENDS =======-->

<!--===== COST CALCULATOR AREA STARTS =======-->
<section class="cost4-calculator-area sp1" aria-labelledby="cost-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="cost-header text-center space-margin60 heading1">
                    <h5 data-aos="fade-left" data-aos-duration="800">
                        <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo1.svg" alt="">Estimated Price
                    </h5>
                    <div class="space16"></div>
                    <h3 class="text-anime-style-3" id="cost-heading">Cost Calculator</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="cost-section-boxarea">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                                    <div class="slider-area">
                                        <h3>Home Size:</h3>
                                        <div class="space16"></div>
                                        <div class="slider-container">
                                            <div id="slider-value" class="slider-value">150</div>
                                            <input type="range" min="0" max="300" value="150" id="slider" aria-label="Home Size Slider">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="900">
                                    <div class="slider-area">
                                        <h3>Number Of Floors:</h3>
                                        <div class="space16"></div>
                                        <div class="slider-container">
                                            <div id="slider-value2" class="slider-value2">5</div>
                                            <input type="range" min="0" max="10" value="5" id="slider2" aria-label="Number of Floors Slider">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="space32"></div>
                                    <div class="select-area">
                                        <h3>Energetic Class:</h3>
                                        <div class="space16"></div>
                                        <select aria-label="Select Energetic Class">
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                            <option value="5">Option 05</option>
                                            <option value="6">Option 06</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="space32"></div>
                                    <div class="select-area">
                                        <h3>Bathroom:</h3>
                                        <div class="space16"></div>
                                        <select aria-label="Select Number of Bathrooms">
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                            <option value="5">Option 05</option>
                                            <option value="6">Option 06</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="space32"></div>
                                    <div class="select-area">
                                        <h3>Terrace:</h3>
                                        <div class="space16"></div>
                                        <div class="btn-area1">
                                            <a href="javascript:void(0);" class="yes active-size" aria-label="Terrace Yes">Yes</a>
                                            <a href="javascript:void(0);" class="no" aria-label="Terrace No">No</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="space32"></div>
                                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="materials-area">
                                        <h3>Building Materials:</h3>
                                        <ul>
                                            <li><a href="#">Cellular Concrete</a></li>
                                            <li><a href="#">Ventilated Bricks</a></li>
                                            <li><a href="#">Wood</a></li>
                                            <li><a href="#" style="margin: 16px 0 0 0;">Prefabricated</a></li>
                                        </ul>
                                    </div>
                                    <div class="space32"></div>
                                    <h2 class="text-anime-style-3">$<span class="counter">32,500</span></h2>
                                    <div class="space16"></div>
                                    <p>Estimated Price</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cost-head">
                                <h4 data-aos="fade-left" data-aos-duration="800">Terms &amp; Condition</h4>
                                <div class="space16"></div>
                                <p data-aos="fade-left" data-aos-duration="900">By accessing or using our website, you agree to comply with and be bound by the following terms and conditions.</p>
                                <div class="space16"></div>
                                <ul data-aos="fade-left" data-aos-duration="1000">
                                    <li><img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check"> Planning and Budget</li>
                                    <li><img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check"> Start For New Construction</li>
                                    <li><img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check"> Interior Quality Finishes</li>
                                </ul>
                                <div class="space32"></div>
                                <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
                                    <a href="<?php echo $base_url; ?>contact-us.php" class="header-btn2-h4">Request It Now <span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== COST CALCULATOR AREA ENDS =======-->

<!--===== TEAM AREA STARTS =======-->
<section class="team4-section-area sp2" aria-labelledby="team-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="team-header text-center heading4 space-margin60">
                    <h5 data-aos="fade-left" data-aos-duration="800">
                        <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="">Our Team
                    </h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3" id="team-heading">Our Professional Team Members</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="900">
                <div class="team-boxarea">
                    <div class="img1">
                        <img src="<?php echo $base_url; ?>assets/img/all-images/team/team-img1.png" alt="Annette Zboncak — Founder, Rebuilders Construction Company" loading="lazy">
                    </div>
                    <div class="content">
                        <a href="<?php echo $base_url; ?>team.php">Annette Zboncak</a>
                        <div class="space12"></div>
                        <p>Founder</p>
                    </div>
                    <ul aria-label="Annette Zboncak Social Links">
                        <li><a href="#" aria-label="Annette on Twitter"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Annette on Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Annette on Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Annette on YouTube"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="team-boxarea">
                    <div class="img1">
                        <img src="<?php echo $base_url; ?>assets/img/all-images/team/team-img2.png" alt="Freddie Gerlach — Site Manager, Rebuilders Construction Company" loading="lazy">
                    </div>
                    <div class="content">
                        <a href="<?php echo $base_url; ?>team.php">Freddie Gerlach</a>
                        <div class="space12"></div>
                        <p>Site Manager</p>
                    </div>
                    <ul aria-label="Freddie Gerlach Social Links">
                        <li><a href="#" aria-label="Freddie on Twitter"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Freddie on Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Freddie on Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Freddie on YouTube"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1100">
                <div class="team-boxarea">
                    <div class="img1">
                        <img src="<?php echo $base_url; ?>assets/img/all-images/team/team-img3.png" alt="Tom Gusikowski V — Engineer, Rebuilders Construction Company" loading="lazy">
                    </div>
                    <div class="content">
                        <a href="<?php echo $base_url; ?>team.php">Tom Gusikowski V</a>
                        <div class="space12"></div>
                        <p>Engineer</p>
                    </div>
                    <ul aria-label="Tom Gusikowski Social Links">
                        <li><a href="#" aria-label="Tom on Twitter"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Tom on Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Tom on Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Tom on YouTube"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                <div class="team-boxarea">
                    <div class="img1">
                        <img src="<?php echo $base_url; ?>assets/img/all-images/team/team-img4.png" alt="Beatrice Raynor — Architect, Rebuilders Construction Company" loading="lazy">
                    </div>
                    <div class="content">
                        <a href="<?php echo $base_url; ?>team.php">Beatrice Raynor</a>
                        <div class="space12"></div>
                        <p>Architecture</p>
                    </div>
                    <ul aria-label="Beatrice Raynor Social Links">
                        <li><a href="#" aria-label="Beatrice on Twitter"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Beatrice on Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Beatrice on Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" aria-label="Beatrice on YouTube"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== TEAM AREA ENDS =======-->

<!--===== TESTIMONIAL AREA STARTS =======-->
<section class="testimonial4-section-area sp1" aria-labelledby="testimonial-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="testimonial-header text-center heading2 space-margin60">
                    <h5><img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="">Testimonials</h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3" id="testimonial-heading">What Our Customers Say</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testionial4-slider-area owl-carousel" role="region" aria-label="Customer Testimonials Slider">
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"Rebuilders Construction Company transformed our outdated kitchen into a modern masterpiece. Their team was professional, efficient, and attentive to our needs. We couldn't be happier with the results!"</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="<?php echo $base_url; ?>team.php">Enring Haaland</a>
                                <div class="space8"></div>
                                <p>Client</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"From start to finish, the team at Rebuilders Construction Company exceeded our expectations. Their attention to detail and commitment to quality made our home renovation project a success. Highly recommend!"</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="<?php echo $base_url; ?>team.php">S. Ramos</a>
                                <div class="space8"></div>
                                <p>Client</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"Rebuilders Construction Company transformed our outdated kitchen into a modern masterpiece. Their team was professional, efficient, and attentive to our needs. We couldn't be happier with the results!"</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="<?php echo $base_url; ?>team.php">Enring Haaland</a>
                                <div class="space8"></div>
                                <p>Client</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"From start to finish, the team at Rebuilders Construction Company exceeded our expectations. Their attention to detail and commitment to quality made our home renovation project a success. Highly recommend!"</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="<?php echo $base_url; ?>team.php">S. Ramos</a>
                                <div class="space8"></div>
                                <p>Client</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"Rebuilders Construction Company transformed our outdated kitchen into a modern masterpiece. Their team was professional, efficient, and attentive to our needs. We couldn't be happier with the results!"</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="<?php echo $base_url; ?>team.php">Enring Haaland</a>
                                <div class="space8"></div>
                                <p>Client</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"From start to finish, the team at Rebuilders Construction Company exceeded our expectations. Their attention to detail and commitment to quality made our home renovation project a success. Highly recommend!"</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="<?php echo $base_url; ?>team.php">S. Ramos</a>
                                <div class="space8"></div>
                                <p>Client</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== TESTIMONIAL AREA ENDS =======-->

<!--===== FOOTER AREA STARTS =======-->
<?php include 'include/footer.php'; ?>
<!--===== FOOTER AREA ENDS =======-->

<!--===== JS SCRIPT LINKS =======-->
<script src="<?php echo $base_url; ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/fontawesome.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/aos.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/swiper.bundle.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/counter.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/gsap.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/ScrollTrigger.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/Splitetext.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/sidebar.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/magnific-popup.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/mobilemenu.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/owlcarousel.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/gsap-animation.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/nice-select.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/waypoints.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/slick-slider.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/circle-progress.js"></script>
<script src="<?php echo $base_url; ?>assets/js/main.js"></script>

</body>
</html>