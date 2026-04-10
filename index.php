<?php
/**
 * Homepage — Niraj Industries
 * PVC Pipe Manufacturer in Nagpur
 * SEO-Optimized | E-E-A-T Ready | Local SEO
 */
$base_url = "https://nirajindustry.com/";
include 'include/config.php';

$page_title       = "Niraj Industries | PVC Pipe Manufacturer in Nagpur";
$meta_description = "Niraj Industries — trusted PVC pipe manufacturer in Nagpur. We supply PVC, UPVC, SWR, agriculture & plumbing pipes across Maharashtra. Get bulk pricing & free quote today.";
$meta_keywords    = "PVC pipe manufacturer in Nagpur, UPVC pipe manufacturer Nagpur, SWR drainage pipe Nagpur, agriculture PVC pipe Nagpur, wholesale PVC pipe Nagpur, plumbing pipe dealer Nagpur";
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
    <meta name="author" content="Niraj Industries, Nagpur">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">

    <!-- Local SEO -->
    <meta name="geo.region" content="IN-MH">
    <meta name="geo.placename" content="Nagpur, Maharashtra, India">
    <meta name="geo.position" content="21.1458;79.0882">
    <meta name="ICBM" content="21.1458, 79.0882">

    <!-- Canonical -->
    <link rel="canonical" href="<?php echo $base_url; ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url; ?>">
    <meta property="og:title" content="Niraj Industries | PVC Pipe Manufacturer in Nagpur">
    <meta property="og:description" content="Nagpur's trusted PVC, UPVC & SWR pipe manufacturer. Wholesale pricing, pan-Maharashtra delivery. Call for bulk orders.">
    <meta property="og:image" content="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img6.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Niraj Industries — PVC Pipe Manufacturer in Nagpur">
    <meta property="og:locale" content="en_IN">
    <meta property="og:site_name" content="Niraj Industries">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Niraj Industries | PVC Pipe Manufacturer in Nagpur">
    <meta name="twitter:description" content="PVC, UPVC, SWR & agriculture pipes — manufactured in Nagpur. Wholesale pricing for contractors & dealers across Maharashtra.">
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img6.png">
    <meta name="twitter:image:alt" content="Niraj Industries PVC Pipes Nagpur">

  
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
    <style>
        /*
 * ============================================================
 *  NIRAJ INDUSTRIES — BRAND THEME OVERRIDE
 *  Brand Colors: #B5100E (Primary Red) | #1D1D1E (Near Black)
 *  Drop this file AFTER main.css in your <head>
 *  Author: Niraj Industries Dev Team
 * ============================================================
 */

/* ============================================================
   ROOT VARIABLES — Single source of truth
   ============================================================ */
:root {
  --ni-red:          #B5100E;
  --ni-red-dark:     #8C0C0B;
  --ni-red-deep:     #6A0907;
  --ni-red-light:    #D42220;
  --ni-red-glow:     rgba(181, 16, 14, 0.12);
  --ni-red-border:   rgba(181, 16, 14, 0.25);

  --ni-black:        #1D1D1E;
  --ni-black-soft:   #262627;
  --ni-black-muted:  #2E2E30;
  --ni-black-card:   #222223;

  --ni-white:        #FFFFFF;
  --ni-offwhite:     #F9F6F6;
  --ni-light-bg:     #FBF5F5;
  --ni-light-bg2:    #F7EFEF;

  --ni-gray-soft:    #E8E0E0;
  --ni-gray-mid:     #9A8F8F;
  --ni-gray-text:    #5C5050;

  --ni-gold-accent:  #C8860A;   /* subtle warm accent — used sparingly */

  --ni-shadow-sm:    0 2px 12px rgba(181, 16, 14, 0.08);
  --ni-shadow-md:    0 6px 28px rgba(181, 16, 14, 0.14);
  --ni-shadow-lg:    0 12px 48px rgba(181, 16, 14, 0.18);
  --ni-shadow-dark:  0 4px 20px rgba(0, 0, 0, 0.35);

  --ni-radius-sm:    6px;
  --ni-radius-md:    10px;
  --ni-radius-lg:    16px;
  --ni-radius-pill:  50px;

  --ni-transition:   all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}


/* ============================================================
   BODY & GLOBAL BASE
   ============================================================ */
body,
body.homepage4-body {
  background-color: var(--ni-white) !important;
  color: var(--ni-black) !important;
}

/* Smooth scrolling */
html { scroll-behavior: smooth; }

/* Selection highlight */
::selection {
  background: var(--ni-red);
  color: var(--ni-white);
}


/* ============================================================
   TYPOGRAPHY — Headings & Text Colors
   ============================================================ */
h1, h2, h3, h4, h5, h6 {
  color: var(--ni-black) !important;
}

/* Heading accent lines / eyebrow labels */
.heading1 h5,
.heading2 h5,
.heading3 h5,
.heading4 h5,
.heading5 h5,
[class*="heading"] h5 {
  color: var(--ni-red) !important;
}

/* Section heading underlines */
.heading2 h2::after,
.heading4 h2::after,
[class*="heading"] h2::after {
  background: var(--ni-red) !important;
}




/* ============================================================
   HERO SECTION
   ============================================================ */
.hero3-section-area,
[class*="hero3-section"],
[class*="hero-section"] {
  background-color: var(--ni-offwhite) !important;
  position: relative;
  overflow: hidden;
}

/* Subtle red pattern overlay on hero */
.hero3-section-area::before {
  content: '';
  position: absolute;
  top: 0; right: 0;
  width: 55%;
  height: 100%;
  background: linear-gradient(135deg, transparent 40%, rgba(181,16,14,0.04) 100%);
  pointer-events: none;
  z-index: 0;
}

/* Hero sub-label */
.hero3-section-area .hero-header-area h5,
[class*="hero"] .heading5 h5 {
  color: var(--ni-red) !important;
}

/* Hero H1 */
.hero3-section-area h1,
[class*="hero-section"] h1 {
  color: var(--ni-black) !important;
}

/* Hero description para */
.hero3-section-area p,
[class*="hero-section"] .hero-header-area p {
  color: var(--ni-gray-text) !important;
}

/* Hero Counter boxes */
.counter-box h3,
.hero-counter-area h3 {
  color: var(--ni-red) !important;
}

.counter-box p,
.hero-counter-area p {
  color: var(--ni-gray-text) !important;
}

.hero-counter-area {
  border-top: 1px solid var(--ni-gray-soft) !important;
  padding-top: 24px !important;
}


/* ============================================================


/* Bootstrap btn-primary */
.btn-primary,
.btn.btn-primary {
  background-color: var(--ni-red) !important;
  border-color: var(--ni-red) !important;
  color: var(--ni-white) !important;
}
.btn-primary:hover { background-color: var(--ni-red-dark) !important; }

/* View All / generic outline btns */
.btn-outline,
.btn-outline-primary,
[class*="btn-outline"] {
  border-color: var(--ni-red) !important;
  color: var(--ni-red) !important;
}
[class*="btn-outline"]:hover {
  background-color: var(--ni-red) !important;
  color: var(--ni-white) !important;
}


/* ============================================================
   ABOUT SECTION
   ============================================================ */
.about4-section-area,
[class*="about4-section"],
[class*="about-section"] {
  background-color: var(--ni-white) !important;
}

/* About checklist icons */
.about4-section-area ul li img,
[class*="about"] ul li img.check-icon {
  filter: none !important;
}

/* Success rate boxes */
.succes-rate-area,
.successful,
.client {
  background: var(--ni-light-bg) !important;
  border-left: 3px solid var(--ni-red) !important;
  border-radius: var(--ni-radius-md) !important;
  padding: 10px 15px !important;
}

.succes-rate-area h3,
.successful h3,
.client h3 {
  color: var(--ni-red) !important;
}



/* ============================================================
   PRODUCTS / SERVICES SECTION
   ============================================================ */
.service4-section-area,
[class*="service4-section"],
[class*="service-section"] {
  background-color: var(--ni-white) !important;
}

.service4-section-area h5,
[class*="service-section"] h5 {
  color: var(--ni-red) !important;
}

/* Product card */
.service4-slider-box,
[class*="service4-slider-box"],
[class*="product-card"],
[class*="service-card"] {
  background-color: var(--ni-white) !important;
  border: 1px solid var(--ni-gray-soft) !important;
  border-radius: var(--ni-radius-lg) !important;
  overflow: hidden !important;
  transition: var(--ni-transition) !important;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05) !important;
}

.service4-slider-box:hover,
[class*="service4-slider-box"]:hover {
  box-shadow: var(--ni-shadow-md) !important;
  transform: translateY(-4px) !important;
  border-color: var(--ni-red-border) !important;
}

/* Product card "View Details" link */
.service4-slider-box .arrow a,
[class*="service4-slider-box"] .arrow a {
  color: var(--ni-red) !important;
  font-weight: 600 !important;
  display: inline-flex !important;
  align-items: center !important;
  gap: 6px !important;
  transition: var(--ni-transition) !important;
}

.service4-slider-box .arrow a:hover,
[class*="service4-slider-box"] .arrow a:hover {
  color: var(--ni-red-dark) !important;
  gap: 10px !important;
}

/* Category tag */
.product-category-tag {
  color: var(--ni-gray-mid) !important;
  font-size: 11px !important;
  text-transform: uppercase !important;
  letter-spacing: 0.8px !important;
}

/* Owl carousel dots */
.owl-dots .owl-dot span {
  background: var(--ni-gray-soft) !important;
}
.owl-dots .owl-dot.active span,
.owl-dots .owl-dot:hover span {
  background: var(--ni-red) !important;
}

/* Owl carousel nav arrows */
.owl-nav button,
.owl-prev,
.owl-next {
  background: var(--ni-white) !important;
  border: 1.5px solid var(--ni-red) !important;
  color: var(--ni-red) !important;
  border-radius: 50% !important;
  width: 40px !important;
  height: 40px !important;
  transition: var(--ni-transition) !important;
}

.owl-nav button:hover,
.owl-prev:hover,
.owl-next:hover {
  background: var(--ni-red) !important;
  color: var(--ni-white) !important;
}


/* ============================================================
   HOW WE WORK / STEPS SECTION
   ============================================================ */
.works-section-area,
[class*="works-section"] {
  background-color: var(--ni-black) !important;
  color: var(--ni-white) !important;
  position: relative;
  overflow: hidden;
}

/* Subtle texture on dark section */
.works-section-area::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: repeating-linear-gradient(
    45deg,
    rgba(181,16,14,0.03) 0px,
    rgba(181,16,14,0.03) 1px,
    transparent 1px,
    transparent 40px
  );
  pointer-events: none;
}

.works-section-area h5,
[class*="works-section"] h5 {
  color: var(--ni-red-light) !important;
}

.works-section-area h3,
.works-section-area h2,
[class*="works-section"] h3 {
  color: var(--ni-white) !important;
}

.works-section-area p,
[class*="works-section"] p {
  color: rgba(255,255,255,0.65) !important;
}

/* Step boxes */
.step-area,
[class*="step-area"] {
  background: var(--ni-black-soft) !important;
  border: 1px solid rgba(181,16,14,0.2) !important;
  border-top: 3px solid var(--ni-red) !important;
  border-radius: var(--ni-radius-md) !important;
  padding: 28px 24px !important;
  transition: var(--ni-transition) !important;
  height: 100% !important;
}

.step-area:hover,
[class*="step-area"]:hover {
  background: var(--ni-black-muted) !important;
  border-color: var(--ni-red) !important;
  box-shadow: var(--ni-shadow-md) !important;
  transform: translateY(-3px) !important;
}

/* Step numbers */
.step-area h4,
[class*="step-area"] h4 {
  color: var(--ni-red) !important;
  font-size: 2.8rem !important;
  font-weight: 800 !important;
  line-height: 1 !important;
  opacity: 0.9 !important;
}

.step-area a,
[class*="step-area"] a {
  color: var(--ni-white) !important;
  font-weight: 600 !important;
  font-size: 1rem !important;
  display: block !important;
  margin-bottom: 8px !important;
}

.step-area p,
[class*="step-area"] p {
  color: rgba(255,255,255,0.6) !important;
  font-size: 0.9rem !important;
  line-height: 1.7 !important;
}




/* ============================================================
   TESTIMONIALS SECTION
   ============================================================ */
.testimonial4-section-area,
[class*="testimonial4-section"],
[class*="testimonial-section"] {
  background-color: var(--ni-white) !important;
}

.testimonial4-section-area h5,
[class*="testimonial-section"] h5 {
  color: var(--ni-red) !important;
}

/* Testimonial card */
.testimonial4-boxarea,
[class*="testimonial4-boxarea"],
[class*="testimonial-box"] {
  background: var(--ni-light-bg) !important;
  border: 1px solid var(--ni-gray-soft) !important;
  border-left: 4px solid var(--ni-red) !important;
  border-radius: var(--ni-radius-lg) !important;
  padding: 28px 24px !important;
  transition: var(--ni-transition) !important;
}

.testimonial4-boxarea:hover,
[class*="testimonial4-boxarea"]:hover {
  box-shadow: var(--ni-shadow-md) !important;
  transform: translateY(-3px) !important;
  background: var(--ni-white) !important;
}

/* Quote icon */
.testimonial4-boxarea .icons img,
[class*="testimonial-box"] .icons img {
  filter: invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(90%) !important;
}

/* Review text */
.testimonial4-boxarea p,
[class*="testimonial-box"] p {
  color: var(--ni-gray-text) !important;
  line-height: 1.8 !important;
  font-style: italic !important;
}

/* Reviewer name */
.testimonial4-boxarea .name-area a,
[class*="testimonial-box"] .name-area a {
  color: var(--ni-black) !important;
  font-weight: 700 !important;
  text-decoration: none !important;
}

/* Reviewer designation */
.testimonial4-boxarea .name-area p,
[class*="testimonial-box"] .name-area p {
  color: var(--ni-red) !important;
  font-size: 13px !important;
  font-style: normal !important;
  font-weight: 500 !important;
}

/* Star ratings */
[class*="testimonial"] .stars i,
[class*="testimonial"] .rating i {
  color: var(--ni-red) !important;
}



/* ============================================================
   NICE SELECT (custom dropdown plugin)
   ============================================================ */
.nice-select {
  border: 1.5px solid var(--ni-gray-soft) !important;
  border-radius: var(--ni-radius-md) !important;
  color: var(--ni-black) !important;
}

.nice-select .list {
  border: 1px solid var(--ni-gray-soft) !important;
  border-radius: var(--ni-radius-md) !important;
}

.nice-select .option:hover,
.nice-select .option.selected {
  color: var(--ni-red) !important;
  background: var(--ni-light-bg) !important;
}

.nice-select::after {
  border-color: var(--ni-red) !important;
}


/* ============================================================
   PRELOADER
   ============================================================ */
#preloader,
.preloader {
  background-color: var(--ni-white) !important;
}

.preloader .spinner,
.preloader .loader {
  border-top-color: var(--ni-red) !important;
  border-right-color: var(--ni-red) !important;
}


/* ============================================================
   SCROLL TO TOP BUTTON
   ============================================================ */
#scroll-top,
.scroll-to-top,
[class*="scroll-top"] {
  background: var(--ni-red) !important;
  border-color: var(--ni-red) !important;
  color: var(--ni-white) !important;
  border-radius: var(--ni-radius-md) !important;
  box-shadow: var(--ni-shadow-md) !important;
  transition: var(--ni-transition) !important;
}

#scroll-top:hover,
.scroll-to-top:hover {
  background: var(--ni-red-dark) !important;
  transform: translateY(-3px) !important;
}


/* ============================================================
   AOS ANIMATION — Ensure elements don't flash wrong colors
   ============================================================ */
[data-aos] {
  transition-property: opacity, transform !important;
}


/* ============================================================
   UTILITY — Force-override any leftover yellow/gold styles
   These target the template's original accent color
   ============================================================ */
[style*="color: #FFD61E"],
[style*="color:#FFD61E"],
[style*="color: #ffd61e"],
[style*="color:#ffd61e"] {
  color: var(--ni-red) !important;
}

[style*="background: #FFD61E"],
[style*="background:#FFD61E"],
[style*="background-color: #FFD61E"],
[style*="background-color:#FFD61E"],
[style*="background: #ffd61e"],
[style*="background:#ffd61e"] {
  background-color: var(--ni-red) !important;
  color: var(--ni-white) !important;
}

[style*="border-color: #FFD61E"],
[style*="border-color:#FFD61E"] {
  border-color: var(--ni-red) !important;
}

/* SVG icon color overrides (sub-logo icons) */
img[src*="sub-logo"] {
  filter: invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%) contrast(110%) !important;
}

/* Checkmark icons — keep them red-tinted */
img[src*="check"] {
  filter: invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%) !important;
}


/* ============================================================
   MOBILE RESPONSIVE OVERRIDES
   ============================================================ */
@media (max-width: 991px) {
  /* Mobile nav */
  .mobile-menu,
  [class*="mobile-menu"],
  .sidebar-menu {
    background: var(--ni-white) !important;
    border-right: 3px solid var(--ni-red) !important;
  }

  .mobile-menu a,
  [class*="mobile-menu"] a {
    color: var(--ni-black) !important;
    border-bottom: 1px solid var(--ni-gray-soft) !important;
    padding: 12px 20px !important;
  }

  .mobile-menu a:hover,
  .mobile-menu .active a {
    color: var(--ni-red) !important;
    background: var(--ni-light-bg) !important;
  }

  /* Tighter hero on mobile */
  .hero3-section-area::before { display: none; }
}

@media (max-width: 767px) {
  /* Stack step cards nicely */
  .step-area {
    margin-bottom: 16px !important;
  }
}


/* ============================================================
   PRINT STYLES — Keep brand colors in print
   ============================================================ */
@media print {
  a, a:visited { color: var(--ni-red) !important; }
  header, footer { background: var(--ni-white) !important; }
}
        </style>
</head>
<body class="homepage4-body">

<!--===== PRELOADER STARTS =======-->

<!--===== PRELOADER ENDS =======-->

<?php include 'include/header.php'; ?>
<!--===== MOBILE HEADER ENDS =======-->

<!--===== HERO AREA STARTS =======-->
<div class="hero3-section-area">
    <img src="<?php echo $base_url; ?>" alt="" class="elements3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-header-area heading5">
                    <h5 data-aos="fade-left" data-aos-duration="800">
                        <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo3.svg" alt="Niraj Industries Nagpur"> Nagpur's Trusted Pipe Manufacturer
                    </h5>
                    <div class="space20"></div>
                    <h1 class="text-anime-style-3">Quality PVC Pipes, <br class="d-lg-block d-none"> Built for Every Project</h1>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="900">Niraj Industries manufactures and supplies PVC, UPVC, SWR, agriculture and plumbing pipes across Nagpur and Maharashtra. Trusted by contractors, builders and dealers for consistent quality and competitive wholesale pricing.</p>
                    <div class="space32"></div>
                  <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
    <a href="<?php echo $base_url; ?>products" class="header-btn2-h3" style="background:#B5100E; border-color:#B5100E; color:#fff;">View Our Pipes <span style="background:#fff; color:#B5100E;"><i class="fa-solid fa-arrow-right"></i></span></a>
    <a href="<?php echo $base_url; ?>contact-us" class="header-btn2-h3 btn2" style="background:transparent; border-color:#B5100E; color:#B5100E;">Get Bulk Quote <span style="background:#B5100E; color:#fff;"><i class="fa-solid fa-arrow-right"></i></span></a>
</div>
                    <div class="space50"></div>
                    <div class="hero-counter-area">
                        <div class="row">
                            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="800">
                                <div class="counter-box">
                                    <h3><span class="counter">15</span>+</h3>
                                    <div class="space16"></div>
                                    <p>Years in Business</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                                <div class="counter-box">
                                    <h3><span class="counter">5000</span>+</h3>
                                    <div class="space16"></div>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="1200">
                                <div class="counter-box">
                                    <h3><span class="counter">20</span>+</h3>
                                    <div class="space16"></div>
                                    <p>Districts Served</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="img1">
        <img src="<?php echo $base_url; ?>assets/img/all-images/home/banner.webp"
             alt="Niraj Industries PVC Pipe Manufacturer Nagpur Maharashtra">
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== BRANDS SLIDER STARTS =======-->

<!--===== BRANDS SLIDER ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<section class="about4-section-area sp1" aria-labelledby="about-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="space100 d-lg-block d-none"></div>
                <div class="space20 d-lg-block d-none"></div>
                <div class="img1 image-anime reveal">
                    <img src="<?php echo $base_url; ?>assets/img/all-images/home/about_niraj1.webp" alt="Niraj Industries PVC pipe production Nagpur" loading="lazy">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="space20 d-lg-none d-block"></div>
                <div class="img1 image-anime reveal">
                    <img src="<?php echo $base_url; ?>assets/img/all-images/home/about_niraj2.webp" alt="Niraj Industries UPVC SWR pipes wholesale Nagpur" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-header heading4">
                    <h5 data-aos="fade-left" data-aos-duration="800">
                        <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="">About Niraj Industries
                    </h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3" id="about-heading">Nagpur's Reliable PVC & UPVC Pipe Manufacturer — Quality You Can Count On</h2>
                    <div class="space20"></div>
                    <p data-aos="fade-left" data-aos-duration="1000">Niraj Industries was founded with one goal — to manufacture high-grade PVC pipes that contractors, farmers and builders across Nagpur and Maharashtra can rely on. From a local supplier, we have grown into one of Vidarbha's most trusted pipe manufacturers.</p>
                    <div class="space32"></div>
                    <ul data-aos="fade-left" data-aos-duration="1100">
                        <li><img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check"> Consistent Quality Across Every Batch</li>
                        <li><img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check"> Wholesale Pricing for Dealers & Contractors</li>
                        <li><img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check"> Pan-Maharashtra Delivery — Fast & Reliable</li>
                        <li><img src="<?php echo $base_url; ?>assets/img/icons/check4.svg" alt="Check"> Full Range — PVC, UPVC, SWR,pipes</li>
                    </ul>
                    <div class="space32"></div>
                    <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
    <a href="<?php echo $base_url; ?>about-us" class="header-btn2-h4" style="background:#B5100E; color:#fff;">Know More About Us <span style="background:#fff; color:#B5100E;"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span></a>
</div>
                    <div class="succes-rate-area" data-aos="zoom-in" data-aos-duration="1000" >
                        <div class="successful">
                            <h3><span class="counter">100</span>%</h3>
                            <div class="space16"></div>
                            <p>Quality Assured</p>
                        </div>
                        <div class="space20"></div>
                        <div class="client">
                            <h3><span class="counter">5000</span>+</h3>
                            <div class="space16"></div>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== ABOUT AREA ENDS =======-->

<!--===== WHY CHOOSE US STARTS =======-->
<div class="choose3-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose-header heading2 space-margin60">
                    <h5><img src="assets/img/icons/sub-logo3.svg" alt="">Why Choose Us</h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3">Why Contractors & Dealers Across Nagpur Choose Niraj Industries</h2>
                </div>
                <div class="images-area">
                    <div class="img1 image-anime reveal">
                        <img src="assets/img/all-images/home/why_choose2.webp" alt="Niraj Industries UPVC pipe quality Nagpur">
                    </div>
                    <div class="img2 text-end image-anime reveal">
                        <img src="assets/img/all-images/home/why_choose1.webp" alt="SWR drainage pipe supplier Nagpur Maharashtra">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-pera-area heading2">
                    <p data-aos="fade-left" data-aos-duration="700">At Niraj Industries, we understand that your project's success depends on the pipes you use. Our commitment to consistent quality, transparent pricing and on-time delivery is what sets us apart as Nagpur's preferred PVC pipe manufacturer. Here's why hundreds of clients trust us.</p>
                    <div class="space60"></div>
                    <div class="list-area" data-aos="fade-left" data-aos-duration="800">
                        <div class="icons">
                            <img src="assets/img/icons/choose4.svg" alt="">
                        </div>
                        <div class="content">
                            <a href="#">Manufactured in Nagpur — Direct from Plant</a>
                            <div class="space16"></div>
                            <p>No middlemen. We manufacture PVC, UPVC and SWR pipes at our own Nagpur facility and supply directly — so you get better pricing and faster delivery.</p>
                        </div>
                    </div>
                    <div class="space30"></div>
                    <div class="list-area" data-aos="fade-left" data-aos-duration="900">
                        <div class="icons">
                            <img src="assets/img/icons/choose5.svg" alt="">
                        </div>
                        <div class="content">
                            <a href="#">Best Wholesale PVC Pipe Price in Nagpur</a>
                            <div class="space16"></div>
                            <p>Dealers, contractors and builders get competitive bulk pricing. Whether you need 10 pipes or 10,000 — we quote transparently with no hidden charges.</p>
                        </div>
                    </div>
                    <div class="space30"></div>
                    <div class="list-area" data-aos="fade-left" data-aos-duration="1000">
                        <div class="icons">
                            <img src="assets/img/icons/choose6.svg" alt="">
                        </div>
                        <div class="content">
                            <a href="#">Fast Delivery Across Maharashtra</a>
                            <div class="space16"></div>
                            <p>Serving Nagpur, Wardha, Amravati, Chandrapur, Yavatmal and beyond. Bulk orders dispatched within 24–48 hours so your project never faces delays.</p>
                        </div>
                    </div>
                    <div class="space32"></div>
                   <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
    <a href="<?php echo $base_url; ?>products" class="header-btn2-h3" style="background:#B5100E !important; border-color:#B5100E !important; color:#fff !important;">
        Explore Our Pipe Range <span style="background:#fff; color:#B5100E;"><i class="fa-solid fa-arrow-right"></i></span>
    </a>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== WHY CHOOSE US ENDS =======-->

<!--===== PRODUCTS AREA STARTS =======-->
<?php
$slider_result = $conn->query("SELECT * FROM products WHERE is_active = 1 ORDER BY sort_order ASC LIMIT 7");
$slider_products = [];
while ($row = $slider_result->fetch_assoc()) {
    $slider_products[] = $row;
}
?>

<section class="service4-section-area sp1" aria-labelledby="service-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="service4-header text-center heading2 space-margin60">
                    <h5><img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="">Our Products</h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3" id="service-heading">PVC, UPVC, SWR, Agriculture & Plumbing Pipes — Manufactured in Nagpur</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="service4-slider-area owl-carousel" role="region" aria-label="Niraj Industries Product Range">

                    <?php foreach ($slider_products as $product): ?>
                    <div class="service4-slider-box">
                        <div class="img1">
                            <img src="<?php echo $base_url . htmlspecialchars($product['image']); ?>"
                                 alt="<?php echo htmlspecialchars($product['name']); ?> — Niraj Industries Nagpur"
                                 loading="lazy"
                                 onerror="this.src='<?php echo $base_url; ?>assets/img/all-images/service/service-img13.png'">
                        </div>
                        <div class="product-category-tag" style="font-size:12px; color:#aaa; margin: 4px 0 6px;">
                            <?php echo ucfirst(htmlspecialchars($product['category'])); ?>
                        </div>
                        <div class="arrow">
                            <a href="<?php echo $base_url; ?>products/<?php echo htmlspecialchars($product['slug']); ?>">
                                View Details <span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <div class="space40"></div>
              <div class="btn-area1 text-center">
    <a href="<?php echo $base_url; ?>products" class="header-btn2-h4" style="background:#B5100E; color:#fff;">
        View All Products <span style="background:#fff; color:#B5100E;"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span>
    </a>
</div>
            </div>
        </div>
    </div>
</section>
<!--===== PRODUCTS AREA ENDS =======-->

<!--===== HOW WE WORK STARTS =======-->
<div class="works-section-area sp2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="works-header heading1">
          <h5 data-aos="fade-left" data-aos-duration="800"><img src="assets/img/icons/sub-logo1.svg" alt=""> How We Work</h5>
          <div class="space16"></div>
          <h3 class="text-anime-style-3">How Ordering from Niraj Industries Works</h3>
          <div class="space16 d-lg-none d-block"></div>
        </div>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-6">
        <div class="pera heading1" data-aos="fade-left" data-aos-duration="1000">
          <p>We have made ordering simple and transparent. Whether you need pipes for a housing project, agricultural setup or drainage system — we guide you through every step and ensure on-time delivery to your site across Maharashtra.</p>
        </div>
      </div>
    </div>
    <div class="space60 d-lg-block d-none"></div>
    <div class="space30 d-lg-none d-block"></div>
    <div class="row">
      <div class="col-lg-12">
        <div class="step-by-step">
          <div class="row">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="800">
              <div class="step-area">
                
                <div class="space24"></div>
                <a>Share Your Requirement</a>
                <div class="space16"></div>
                <p>Tell us your pipe type, size and quantity. Our team confirms availability and gives accurate pricing — no vague estimates.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="900">
              <div class="step-area">
              
                <div class="space24"></div>
                <a>Get a Wholesale Quote</a>
                <div class="space16"></div>
                <p>We provide transparent bulk pricing for dealers and contractors. No hidden charges — what we quote is what you pay.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
              <div class="step-area">
           
                <div class="space24"></div>
                <a>Quality Check & Dispatch</a>
                <div class="space16"></div>
                <p>Every order is quality checked at our Nagpur plant before dispatch. We verify each batch for consistency and accuracy.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
              <div class="step-area">
            
                <div class="space24"></div>
                <a>Delivered to Your Site</a>
                <div class="space16"></div>
                <p>We deliver across Nagpur and Maharashtra within 24–48 hours for bulk orders. Your project stays on schedule.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HOW WE WORK ENDS =======-->

<?php include 'include/latest-blog.php'; ?>

<!--===== TESTIMONIAL AREA STARTS =======-->
<section class="testimonial4-section-area sp1" aria-labelledby="testimonial-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="testimonial-header text-center heading2 space-margin60">
                    <h5><img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="">Customer Reviews</h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3" id="testimonial-heading">What Our Clients Say About Niraj Industries</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testionial4-slider-area owl-carousel" role="region" aria-label="Niraj Industries Customer Testimonials">
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"We have been sourcing UPVC pipes from Niraj Industries for our residential projects in Nagpur for the past 4 years. Delivery is always on time and the pipe quality is consistent batch after batch."</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="#">Rajesh Thakre</a>
                                <div class="space8"></div>
                                <p>Civil Contractor, Nagpur</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"Niraj Industries supplies agriculture PVC pipes across our dealer network in Vidarbha. Their pricing is competitive and quality is consistent. Highly recommend for bulk agriculture pipe orders."</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="#">Santosh Deshmukh</a>
                                <div class="space8"></div>
                                <p>Agriculture Dealer, Wardha</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"Ordered SWR drainage pipes for a large housing society project. Niraj Industries gave us the best wholesale price and material quality was top class. Zero leakage complaints from our clients."</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="#">Praful Meshram</a>
                                <div class="space8"></div>
                                <p>Builder & Developer, Nagpur</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"We supply plumbing materials across Chandrapur and Niraj Industries has been our go-to PVC pipe manufacturer for 3 years. Fast dispatch, proper markings and honest billing — everything a dealer needs."</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="#">Vijay Raut</a>
                                <div class="space8"></div>
                                <p>Hardware & Plumbing Dealer, Chandrapur</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"Installed Niraj Industries column pipes for borewell at our farm in Amravati district. Excellent quality, uniform wall thickness throughout. They delivered to our village location without any issues."</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="#">Suresh Wankhede</a>
                                <div class="space8"></div>
                                <p>Farmer, Amravati District</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial4-boxarea">
                        <div class="icons">
                            <img src="<?php echo $base_url; ?>assets/img/icons/quoto3.svg" alt="Quote Icon" loading="lazy">
                        </div>
                        <div class="text-area">
                            <p>"Running a construction firm in Nagpur, I have tried many PVC pipe suppliers. Niraj Industries stands out for consistency and responsiveness. They understand contractor requirements and always prioritize timely supply."</p>
                            <div class="space24"></div>
                            <div class="name-area">
                                <a href="#">Nikhil Bobde</a>
                                <div class="space8"></div>
                                <p>Construction Firm Owner, Nagpur</p>
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