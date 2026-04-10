<?php
$base_url = "https://nirajindustry.com/";
include 'include/config.php';

$page_title       = "About Niraj Industries | PVC Pipe Manufacturer in Nagpur";
$meta_description = "Learn about Niraj Industries — a trusted PVC pipe manufacturer in Nagpur. We produce high-quality UPVC, SWR, agriculture and plumbing pipes with reliable supply and competitive pricing across Maharashtra.";
$meta_keywords    = "about niraj industries, pvc pipe manufacturer nagpur, upvc pipe manufacturer nagpur, swr pipe nagpur, agriculture pvc pipes nagpur, plumbing pipes supplier maharashtra, pvc pipe company nagpur india, industrial pipe manufacturer nagpur";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
    <meta name="author" content="Niraj Industries, Nagpur">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
    <meta name="geo.region" content="IN-MH">
    <meta name="geo.placename" content="Nagpur, Maharashtra, India">
    <meta name="geo.position" content="21.1458;79.0882">
    <meta name="ICBM" content="21.1458, 79.0882">
    <link rel="canonical" href="<?php echo $base_url; ?>about-us">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url; ?>about-us">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta property="og:image" content="<?php echo $base_url; ?>assets/img/all-images/about/about-img1.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Niraj Industries PVC Pipe Manufacturing Nagpur">
    <meta property="og:locale" content="en_IN">
    <meta property="og:site_name" content="Niraj Industries">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/img/all-images/about/about-img1.png">
    <meta name="twitter:image:alt" content="Niraj Industries PVC Pipes Nagpur">

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
    <script src="<?php echo $base_url; ?>assets/js/plugins/jquery-3-6-0.min.js"></script>

    <style>
        /* Counter box */
        .counter-text {
            background-color: #B5100E !important;
        }
        .counter-text h2,
        .counter-text p {
            color: #FFFFFF !important;
        }

        /* ===== NEW VALUES SECTION ===== */
        .niraj-values-wrap {
            display: flex;
            gap: 0;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #e0ddd8;
            min-height: 480px;
        }

        /* LEFT — Image column */
        .niraj-values-img {
            position: relative;
            width: 58%;
            flex-shrink: 0;
            overflow: hidden;
        }
        .niraj-values-img img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }
        .niraj-values-img-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(160deg, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0.78) 100%);
            z-index: 1;
        }
        .niraj-values-img-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 32px;
            z-index: 2;
        }
        .niraj-values-img-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(181,16,14,0.92);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 4px;
            margin-bottom: 14px;
        }
        .niraj-values-img-tag::before {
            content: '';
            display: inline-block;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #fff;
        }
        .niraj-values-img-content h3 {
            color: #ffffff;
            font-size: 22px;
            font-weight: 700;
            line-height: 1.35;
            margin: 0 0 12px;
            text-shadow: 0 1px 4px rgba(0,0,0,0.4);
        }
        .niraj-values-img-content p {
            color: rgba(255,255,255,0.85);
            font-size: 14px;
            line-height: 1.65;
            margin: 0 0 20px;
        }
        .niraj-values-img-content .btn-area1 a {
            background: #B5100E;
            color: #fff;
        }
        .niraj-values-img-content .btn-area1 a span {
            background: #fff;
            color: #B5100E;
        }

        /* RIGHT — Mission & Vision cards */
        .niraj-values-cards {
            width: 42%;
            display: flex;
            flex-direction: column;
            background: #ffffff;
        }
        .niraj-val-card {
            flex: 1;
            padding: 36px 30px;
        }
        .niraj-val-card:first-child {
            border-bottom: 1px solid #e8e5e0;
        }
        .niraj-val-card-icon {
            width: 46px;
            height: 46px;
            border-radius: 10px;
            background: #B5100E;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
        }
        .niraj-val-card-icon svg {
            width: 22px;
            height: 22px;
        }
        .niraj-val-card-accent {
            width: 32px;
            height: 3px;
            background: #B5100E;
            border-radius: 2px;
            margin-bottom: 14px;
        }
        .niraj-val-card h4 {
            font-size: 18px;
            font-weight: 700;
            color: #1a1a1a;
            margin: 0 0 8px;
        }
        .niraj-val-card .tagline {
            font-size: 14px;
            font-weight: 600;
            color: black;
            margin: 0 0 10px;
            line-height: 1.45;
        }
        .niraj-val-card p {
            font-size: 14px;
            color: #555555;
            line-height: 1.65;
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .niraj-values-wrap {
                flex-direction: column;
                border-radius: 12px;
            }
            .niraj-values-img {
                width: 100%;
                min-height: 300px;
                position: relative;
            }
            .niraj-values-img img {
                position: relative;
                width: 100%;
                height: 300px;
                object-fit: cover;
            }
            .niraj-values-cards {
                width: 100%;
            }
        }
    </style>
</head>
<body class="homepage4-body">

<div class="paginacontainer">
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
</div>

<?php include 'include/header.php'; ?>

<!--===== HERO / INNER BANNER AREA STARTS =======-->
<div class="inner-hero-area" style="background-image: url(<?php echo $base_url; ?>assets/img/all-images/home/five.webp);" role="banner" aria-label="About Us Banner">
</div>
<!--===== HERO / INNER BANNER AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<section class="about1-section-area sp1" aria-labelledby="about-niraj">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-header heading2">
                    <h5 data-aos="fade-left" data-aos-duration="800" style="color:#B5100E;">
                        <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="" style="filter:invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%);">About Us
                    </h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3" id="about-niraj">Trusted PVC Pipe Manufacturer in Nagpur</h2>
                    <div class="space70 d-lg-block d-none"></div>
                    <div class="space30 d-lg-none d-block"></div>
                    <div class="images-area text-center">
                        <div class="img1 reveal image-anime">
                            <img src="<?php echo $base_url; ?>assets/img/all-images/about/About-section1.webp" alt="Niraj Industries PVC Pipe Manufacturing Unit Nagpur">
                        </div>
                        <div class="text"><p>Our Facility</p></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sucess-text">
                    <div class="images-area2">
                        <div class="img2 reveal image-anime">
                            <img src="<?php echo $base_url; ?>assets/img/all-images/about/About-section2.webp" alt="PVC Pipe Production Process Niraj Industries Nagpur">
                        </div>
                        <div class="text"><p>Our Process</p></div>
                    </div>
                    <div class="counter-text">
                        <h2 class="text-anime-style-3"><span class="counter">100</span>%</h2>
                        <div class="space16"></div>
                        <p>Quality Assurance</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="peragraph heading2">
                    <p data-aos="fade-left" data-aos-duration="1000" style="text-align: justify;">
                        Welcome to Niraj Industries, a leading PVC pipe manufacturer in Nagpur known for delivering high-quality UPVC, SWR and agriculture pipes. With years of industry experience, we focus on durability, precision manufacturing and reliable supply across Maharashtra for contractors, builders and dealers.
                    </p>
                    <div class="space24"></div>
                    <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                        <a href="<?php echo $base_url; ?>contact-us" class="header-btn2-h4" style="background:#B5100E; color:#fff;">Learn More <span style="background:#fff; color:#B5100E;"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                    <div class="space80 d-lg-block d-none"></div>
                    <div class="space30 d-lg-none d-block"></div>
                    <div class="images-area text-center">
                        <div class="img1 reveal image-anime">
                            <img src="<?php echo $base_url; ?>assets/img/all-images/about/About-section3.webp" alt="PVC Pipe Quality Testing Team Niraj Industries">
                        </div>
                        <div class="text"><p>Our Strength</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== ABOUT AREA ENDS =======-->

<!--===== VALUE AREA STARTS =======-->
<section class="value-section-area bg1 sp1" aria-labelledby="value-heading">
    <div class="container">

        <!-- Section Header -->
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="value-header text-center heading2 space-margin60">
                    <h5 style="color:#B5100E;">
                        <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="" style="filter:invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%);">Our Values
                    </h5>
                    <div class="space16"></div>
                    <h2 id="value-heading">Core Values That Drive Our PVC Pipe Manufacturing Excellence in Nagpur</h2>
                </div>
            </div>
        </div>

        <!-- New Values Layout -->
        <div class="row">
            <div class="col-12">
                <div class="niraj-values-wrap">

                    <!-- LEFT: Image with overlay text -->
                    <div class="niraj-values-img">
                        <img src="<?php echo $base_url; ?>assets/img/all-images/about/our_values.webp" alt="Niraj Industries Core Values Quality Innovation Reliability">
                        <div class="niraj-values-img-overlay"></div>
                        <div class="niraj-values-img-content">
                            <div class="niraj-values-img-tag">Our Values</div>
                            <h3>We focus on quality manufacturing, consistency and long-term customer trust</h3>
                            <p>At Niraj Industries, we follow strict quality standards in PVC pipe manufacturing to ensure durability, strength and performance. Our commitment to reliable supply, transparent business practices and continuous improvement helps us serve contractors, builders and dealers across Nagpur and Maharashtra.</p>
                            <div class="btn-area1">
                                <a href="<?php echo $base_url; ?>contact-us" class="header-btn2-h4" style="background:#B5100E; color:#fff;">Learn More <span style="background:#fff; color:#B5100E;"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT: Mission & Vision cards -->
                    <div class="niraj-values-cards">

                        <!-- Mission Card -->
                        <div class="niraj-val-card">
                            <div class="niraj-val-card-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                    <path d="M2 17l10 5 10-5"/>
                                    <path d="M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                            <div class="niraj-val-card-accent"></div>
                            <h4>Our Mission</h4>
                            <p class="tagline">To manufacture high-quality PVC, UPVC and SWR pipes that meet industry standards and support efficient plumbing, drainage and agricultural systems.</p>
                            <p>We aim to deliver consistent product quality, timely supply and cost-effective solutions to our clients across Nagpur and nearby regions.</p>
                        </div>

                        <!-- Vision Card -->
                        <div class="niraj-val-card">
                            <div class="niraj-val-card-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M12 6v6l4 2"/>
                                </svg>
                            </div>
                            <div class="niraj-val-card-accent"></div>
                            <h4>Our Vision</h4>
                            <p class="tagline">To become a trusted PVC pipe manufacturer in Nagpur and a preferred supplier across Maharashtra for quality and reliability.</p>
                            <p>Our vision is to expand with innovation, maintain high manufacturing standards and build long-term relationships with customers and partners.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--===== VALUE AREA ENDS =======-->

<!--===== HISTORY AREA STARTS =======-->
<section class="history-section-area sp1" aria-labelledby="history-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="history-header heading2 text-center space-margin60">
                    <h5 style="color:#B5100E;">
                        <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="" style="filter:invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%);">Our Journey
                    </h5>
                    <div class="space16"></div>
                    <h2 id="history-heading">From Local Supplier to Nagpur's Most Trusted PVC Pipe Manufacturer — Our Story</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="history-details-boxarea">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="history-boxes">
                                <span>2009</span>
                                <div class="space16"></div>
                                <a href="#">The Foundation</a>
                                <div class="space16"></div>
                                <p>Niraj Industries was established in Nagpur with a clear vision — to manufacture reliable, affordable PVC pipes for the growing construction and agriculture sector across Vidarbha.</p>
                                <div class="space16"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="history-boxes">
                                <span>2012</span>
                                <div class="space16"></div>
                                <a href="#">Expanding the Product Range</a>
                                <div class="space16"></div>
                                <p>We expanded beyond standard PVC pipes and introduced UPVC and SWR drainage pipes to meet the rising demand from builders, plumbers and housing projects in Nagpur and surrounding districts.</p>
                                <div class="space16"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="history-boxes">
                                <span>2015</span>
                                <div class="space16"></div>
                                <a href="#">Agriculture Pipe Supply Growth</a>
                                <div class="space16"></div>
                                <p>Niraj Industries became a trusted name among farmers across Vidarbha. Our agriculture-grade PVC pipes gained strong demand in Wardha, Amravati, Yavatmal and Chandrapur for borewell and irrigation use.</p>
                                <div class="space16"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="history-boxes">
                                <span>2018</span>
                                <div class="space16"></div>
                                <a href="#">Manufacturing Capacity Upgraded</a>
                                <div class="space16"></div>
                                <p>To meet the growing bulk order demand from contractors and dealers, we upgraded our production facility at Mahalgaon, Bhandra Road, Nagpur — enabling faster dispatch and consistent quality across every batch.</p>
                                <div class="space16"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="history-boxes" style="padding: 0; border: none;">
                                <span>2021</span>
                                <div class="space16"></div>
                                <a href="#">Pan-Maharashtra Dealer Network</a>
                                <div class="space16"></div>
                                <p>Niraj Industries established a strong dealer and distributor network spanning 20+ districts across Maharashtra — making quality PVC, UPVC and SWR pipes accessible to contractors and builders statewide.</p>
                                <div class="space16"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="history-boxes" style="padding: 0; border: none;">
                                <span>2024</span>
                                <div class="space16"></div>
                                <a href="#">5000+ Clients & Growing</a>
                                <div class="space16"></div>
                                <p>Today, Niraj Industries proudly serves 5000+ satisfied clients across Nagpur and Maharashtra. We continue to grow as Vidarbha's preferred PVC pipe manufacturer — delivering quality, reliability and competitive wholesale pricing.</p>
                                <div class="space16"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img1 image-anime reveal">
                    <img src="<?php echo $base_url; ?>assets/img/all-images/about/history.webp" alt="Niraj Industries PVC Pipe Manufacturer Nagpur — Company Journey Since 2009">
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== HISTORY AREA ENDS =======-->

<!--===== CHOOSE AREA STARTS =======-->
<section class="choose6-section-area sp1" aria-labelledby="choose-heading">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="choose-images">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="img1 reveal image-anime">
                                <img src="<?php echo $base_url; ?>assets/img/all-images/about/why-choose-us1.webp" alt="PVC Pipe Manufacturing Process Niraj Industries Nagpur">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="space30 d-md-none d-block"></div>
                            <div class="img1 reveal image-anime">
                                <img src="<?php echo $base_url; ?>assets/img/all-images/about/why-choose-us2.webp" alt="High Quality UPVC Pipe Production Nagpur Maharashtra">
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="img1 reveal image-anime">
                            <img src="<?php echo $base_url; ?>assets/img/all-images/about/why-choose-us3.webp" alt="Durable PVC Pipes for Plumbing Agriculture and Drainage Systems">
                        </div>
                    </div>
                    <div class="others-area">
                        <div class="widget-text">
                            <div class="icons">
                                <img src="<?php echo $base_url; ?>assets/img/icons/choose10.svg" alt="Quality Icon" style="filter:invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%);">
                            </div>
                            <p>Quality</p>
                        </div>
                        <div class="widget-text">
                            <div class="icons">
                                <img src="<?php echo $base_url; ?>assets/img/icons/choose11.svg" alt="Process Icon" style="filter:invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%);">
                            </div>
                            <p>Precision</p>
                        </div>
                        <div class="widget-text" style="border: none;">
                            <div class="icons">
                                <img src="<?php echo $base_url; ?>assets/img/icons/choose12.svg" alt="Delivery Icon" style="filter:invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%);">
                            </div>
                            <p>Supply</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-header heading4">
                    <h5 data-aos="fade-left" data-aos-duration="800" style="color:#B5100E;">
                        <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="" style="filter:invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%);"> Why Choose Us
                    </h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3" id="choose-heading">Reliable PVC Pipe Manufacturer in Nagpur You Can Trust</h2>
                    <div class="space20"></div>
                    <p data-aos="fade-left" data-aos-duration="900">
                        At Niraj Industries, we are committed to manufacturing high-quality PVC, UPVC and SWR pipes that meet industry standards. Our focus on durability, precision production and consistent supply ensures that contractors, builders and dealers receive reliable products for plumbing, drainage and agricultural applications.
                    </p>
                    <div class="space24"></div>
                    <div class="list-area" data-aos="fade-left" data-aos-duration="1000">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check" style="filter:invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%);">
                        </div>
                        <div class="text">
                            <a href="#">High Quality Manufacturing Standards</a>
                            <p>We use advanced production techniques and strict quality checks to ensure durable and long-lasting PVC pipes for every application.</p>
                        </div>
                    </div>
                    <div class="space24"></div>
                    <div class="list-area" data-aos="fade-left" data-aos-duration="1100">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check" style="filter:invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%);">
                        </div>
                        <div class="text">
                            <a href="#">Trusted by Contractors & Dealers</a>
                            <p>We have built strong relationships by consistently supplying reliable pipes to builders, contractors and distributors across Nagpur and Maharashtra.</p>
                        </div>
                    </div>
                    <div class="space24"></div>
                    <div class="list-area" data-aos="fade-left" data-aos-duration="1200">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check" style="filter:invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%);">
                        </div>
                        <div class="text">
                            <a href="#">Timely Bulk Supply & Competitive Pricing</a>
                            <p>We ensure fast delivery and cost-effective pricing for bulk orders, making us a preferred PVC pipe supplier for large and small projects.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== CHOOSE AREA ENDS =======-->

<div class="space50 d-lg-block d-none"></div>

<!--===== CTA AREA ENDS =======-->

<?php include 'include/footer.php'; ?>

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