<?php
$base_url = "http://localhost/nirajindustries/";
include 'include/config.php';

$page_title       = "Contact Niraj Industries | PVC, UPVC & SWR Pipe Supplier in Nagpur";
$meta_description = "Looking for PVC pipes in Nagpur? Contact Niraj Industries for UPVC, SWR & agriculture pipes. Fast supply, bulk orders & best pricing across Maharashtra.";
$meta_keywords    = "PVC pipe supplier Nagpur contact, UPVC pipe dealer Nagpur, SWR pipe manufacturer Maharashtra, agriculture pipe supplier Nagpur, bulk PVC pipe order India, plumbing pipe supplier Nagpur";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
    <meta name="author" content="Niraj Industries">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="googlebot" content="index, follow">
    <meta name="geo.region" content="IN-MH">
    <meta name="geo.placename" content="Nagpur, Maharashtra">
    <meta name="geo.position" content="21.1458;79.0882">
    <meta name="ICBM" content="21.1458,79.0882">
    <link rel="canonical" href="<?php echo $base_url; ?>contact-us">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Contact Niraj Industries – PVC Pipe Supplier in Nagpur">
    <meta property="og:description" content="Get in touch for PVC, UPVC & SWR pipes. Bulk supply, fast delivery and reliable quality across Maharashtra.">
    <meta property="og:url" content="<?php echo $base_url; ?>contact-us">
    <meta property="og:image" content="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img6.png">
    <meta property="og:site_name" content="Niraj Industries">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PVC Pipe Supplier Nagpur | Contact Niraj Industries">
    <meta name="twitter:description" content="Bulk PVC pipe orders, UPVC & SWR pipes available. Contact now for best price in Nagpur & Maharashtra.">
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img6.png">

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
    :root {
      --ni-red:        #B5100E;
      --ni-red-dark:   #8C0C0B;
      --ni-red-light:  #D42220;
      --ni-red-glow:   rgba(181, 16, 14, 0.10);
      --ni-black:      #1D1D1E;
      --ni-white:      #FFFFFF;
      --ni-offwhite:   #F9F6F6;
      --ni-light-bg:   #FBF5F5;
      --ni-gray-soft:  #E8E0E0;
      --ni-gray-text:  #5C5050;
      --ni-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* ---- CONTACT HEADER ---- */
    .contact-header.heading2 h5,
    .contact-header h5 {
      color: var(--ni-red) !important;
      display: flex; align-items: center; gap: 8px; font-weight: 600;
    }
    .contact-header h5 img {
      filter: invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%) contrast(110%) !important;
    }
    .contact-header h2, #contact-heading { color: var(--ni-black) !important; }
    .contact-header > p { color: var(--ni-gray-text) !important; line-height: 1.8; }

    /* ---- INFO BOXES ---- */
    .contact-author-area {
      display: flex; flex-direction: column; gap: 16px; margin-top: 28px;
    }
    .author-box {
      display: flex; align-items: flex-start; gap: 16px;
      padding: 18px 20px;
      background: var(--ni-light-bg);
      border: 1px solid var(--ni-gray-soft);
      border-left: 4px solid var(--ni-red);
      border-radius: 10px;
      transition: var(--ni-transition);
      text-decoration: none;
    }
    .author-box:hover {
      background: var(--ni-white);
      box-shadow: 0 6px 24px rgba(181,16,14,0.12);
      transform: translateX(4px);
    }
    .author-box .icons {
      width: 48px; height: 48px; min-width: 48px;
      background: var(--ni-red) !important;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      box-shadow: 0 4px 14px rgba(181,16,14,0.30);
    }
    .author-box .icons img {
      filter: brightness(0) invert(1) !important;
      width: 22px; height: 22px;
    }
    .author-box .text h4 { color: var(--ni-black) !important; font-size: 0.9rem; font-weight: 700; margin-bottom: 4px; }
    .author-box .text p,
    .author-box .text a { color: var(--ni-gray-text) !important; font-size: 0.875rem; margin: 0; text-decoration: none; word-break: break-word; }
    .author-box .text a:hover { color: var(--ni-red) !important; }

    /* ---- CONTACT FORM ---- */
    .contact-boxarea {
      background: var(--ni-white);
      border: 1px solid var(--ni-gray-soft);
      border-top: 4px solid var(--ni-red);
      border-radius: 14px;
      padding: 40px 36px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.06);
    }
    .contact-boxarea label { color: var(--ni-black) !important; font-weight: 600; font-size: 0.875rem; }
    .contact-boxarea input,
    .contact-boxarea textarea {
      border: 1.5px solid var(--ni-gray-soft) !important;
      border-radius: 8px !important;
      color: var(--ni-black) !important;
      background: var(--ni-offwhite) !important;
      transition: var(--ni-transition) !important;
      padding: 12px 16px !important;
      width: 100%;
    }
    .contact-boxarea input:focus,
    .contact-boxarea textarea:focus {
      outline: none !important;
      border-color: var(--ni-red) !important;
      background: var(--ni-white) !important;
      box-shadow: 0 0 0 3px rgba(181,16,14,0.10) !important;
    }
    .contact-boxarea input::placeholder,
    .contact-boxarea textarea::placeholder { color: #b0a5a5 !important; }
    .contact-boxarea textarea { min-height: 130px; resize: vertical; }
    .contact-boxarea button.header-btn1 {
      background: var(--ni-red) !important;
      border: none !important;
      color: var(--ni-white) !important;
      padding: 14px 32px !important;
      border-radius: 8px !important;
      font-weight: 700 !important;
      font-size: 0.95rem !important;
      display: inline-flex !important;
      align-items: center !important;
      gap: 10px !important;
      transition: var(--ni-transition) !important;
      cursor: pointer !important;
      width: 100%;
      justify-content: center;
    }
    .contact-boxarea button.header-btn1:hover {
      background: var(--ni-red-dark) !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 6px 20px rgba(181,16,14,0.35) !important;
    }

    /* ---- MAP INLINE (below form, right col) ---- */
    .ni-map-wrap {
      margin-top: 24px;
      border-radius: 14px;
      overflow: hidden;
      border: 1px solid var(--ni-gray-soft);
      border-top: 4px solid var(--ni-red);
    }
    .ni-map-wrap iframe {
      display: block;
      width: 100%;
      height: 270px;
      border: 0;
    }

    /* ---- FAQ SECTION ---- */
    .faq-inner-area {
      background: #FFFFFF !important;
      padding: 80px 0;
    }

    .faq-inner-area .faq-label {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--ni-red);
      margin-bottom: 10px;
    }
    .faq-inner-area .faq-label img {
      filter: invert(14%) sepia(94%) saturate(4000%) hue-rotate(350deg) brightness(88%) !important;
    }
    .faq-inner-area h2, .faq-inner-area #faq-heading {
      color: var(--ni-black) !important;
      font-size: 28px !important;
      font-weight: 700 !important;
      line-height: 1.35 !important;
      margin-bottom: 32px;
    }

    /* FAQ image col */
    .faq-img-col {
      position: relative;
      border-radius: 16px;
      overflow: hidden;
      min-height: 480px;
    }
    .faq-img-col img {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      object-fit: cover;
      object-position: center;
      display: block;
    }
    .faq-img-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(160deg, rgba(0,0,0,0.12) 0%, rgba(0,0,0,0.65) 100%);
    }
    .faq-img-badge {
      position: absolute;
      bottom: 28px;
      left: 28px;
      right: 28px;
      z-index: 2;
    }
    .faq-img-badge .tag {
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
      margin-bottom: 12px;
    }
    .faq-img-badge h3 {
      color: #fff !important;
      font-size: 20px !important;
      font-weight: 700 !important;
      line-height: 1.4 !important;
      text-shadow: 0 1px 4px rgba(0,0,0,0.4);
      margin: 0;
    }

    /* FAQ accordion */
    .ni-accordion-item {
      background: #fff;
      border: 1.5px solid var(--ni-gray-soft);
      border-radius: 12px;
      margin-bottom: 12px;
      overflow: hidden;
      transition: var(--ni-transition);
    }
    .ni-accordion-item:hover {
      border-color: rgba(181,16,14,0.35);
      box-shadow: 0 4px 18px rgba(181,16,14,0.08);
    }
    .ni-accordion-item.open {
      border-color: var(--ni-red);
      border-top-width: 3px;
      box-shadow: 0 6px 24px rgba(181,16,14,0.12);
    }
    .ni-acc-btn {
      width: 100%;
      background: #fff;
      border: none;
      padding: 20px 22px;
      text-align: left;
      font-size: 15px;
      font-weight: 600;
      color: var(--ni-black);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      transition: var(--ni-transition);
      line-height: 1.5;
    }
    .ni-acc-btn:hover { color: var(--ni-red); background: var(--ni-light-bg); }
    .ni-accordion-item.open .ni-acc-btn {
      color: var(--ni-red);
      background: var(--ni-light-bg);
      border-bottom: 1px solid rgba(181,16,14,0.12);
    }
    .ni-acc-icon {
      width: 30px;
      height: 30px;
      min-width: 30px;
      border-radius: 50%;
      background: var(--ni-black);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: var(--ni-transition);
    }
    .ni-accordion-item.open .ni-acc-icon { background: var(--ni-red); }
    .ni-acc-icon svg {
      width: 14px; height: 14px;
      stroke: #fff;
      stroke-width: 2.5;
      stroke-linecap: round;
      transition: var(--ni-transition);
    }
    .ni-acc-body {
      display: none;
      padding: 18px 22px 22px;
      background: #fff;
    }
    .ni-accordion-item.open .ni-acc-body { display: block; }
    .ni-acc-body p {
      color: var(--ni-gray-text) !important;
      font-size: 14px !important;
      line-height: 1.8 !important;
      margin: 0 !important;
      border-left: 3px solid var(--ni-red) !important;
      padding-left: 14px !important;
    }

    /* ---- CTA ---- */
    .cta1-section-area {
      background: linear-gradient(135deg, var(--ni-red-dark) 0%, var(--ni-red) 60%, #C8180F 100%) !important;
      position: relative; overflow: hidden;
    }
    .cta1-section-area::before {
      content: '';
      position: absolute; inset: 0;
      background: repeating-linear-gradient(-45deg, rgba(255,255,255,0.03) 0px, rgba(255,255,255,0.03) 1px, transparent 1px, transparent 36px);
      pointer-events: none;
    }
    .cta1-section-area .container { position: relative; z-index: 1; }
    .cta1-section-area h2, #cta-heading { color: #fff !important; }
    .cta1-section-area .header-btn1 {
      background: #fff !important; color: var(--ni-red) !important;
      border: 2px solid #fff !important; border-radius: 8px; font-weight: 700; transition: var(--ni-transition);
    }
    .cta1-section-area .header-btn1:hover { background: transparent !important; color: #fff !important; }
    .cta1-section-area .header-btn2 {
      background: transparent !important; color: #fff !important;
      border: 2px solid rgba(255,255,255,0.6) !important; border-radius: 8px; font-weight: 700; transition: var(--ni-transition);
    }
    .cta1-section-area .header-btn2:hover { background: #fff !important; color: var(--ni-red) !important; border-color: #fff !important; }

    /* ---- RESPONSIVE ---- */
    @media (max-width: 991px) {
      .contact-boxarea { padding: 28px 20px !important; margin-top: 32px; }
      .faq-img-col { min-height: 280px; margin-bottom: 32px; }
      .ni-map-wrap iframe { height: 200px; }
    }
    </style>
</head>
<body class="homepage4-body">

<?php include 'include/header.php'; ?>

<!--===== HERO BANNER =======-->
<div class="inner-hero-area" style="background-image: url(<?php echo $base_url; ?>assets/img/all-images/home/six.webp);" role="banner" aria-label="Contact Us Banner"></div>

<!--===== CONTACT AREA =======-->
<section class="contact1-section-area sp1 bg-w" aria-labelledby="contact-heading">
    <div class="container">
        <div class="row">

            <!-- LEFT — Info Column -->
            <div class="col-lg-6">
                <div class="contact-header heading2">
                    <h5><img src="<?php echo $base_url; ?>assets/img/icons/sub-logo1.svg" alt=""> Contact Us</h5>
                    <div class="space16"></div>
                    <h2 class="text-anime-style-3" id="contact-heading">
                        Get in Touch for PVC, UPVC & SWR Pipe Requirements in Nagpur
                    </h2>
                    <div class="space24"></div>
                    <p>
                        Niraj Industries is a reliable PVC pipe manufacturer in Nagpur, supplying high-quality UPVC, SWR and agriculture pipes.
                        Whether you are a contractor, builder or distributor, connect with us for bulk orders, product details and competitive pricing across Maharashtra.
                    </p>

                    <!-- INFO BOXES -->
                    <div class="contact-author-area">
                        <div class="author-box">
                            <div class="icons">
                                <img src="<?php echo $base_url; ?>assets/img/icons/location1.svg" alt="Location">
                            </div>
                            <div class="text">
                                <h4>Our Address</h4>
                                <p>Plot No. 25, 26 Near Water Tank,<br>Mahalgaon, Bhandra Road, Nagpur</p>
                            </div>
                        </div>
                        <div class="author-box">
                            <div class="icons">
                                <img src="<?php echo $base_url; ?>assets/img/icons/call1.svg" alt="Phone">
                            </div>
                            <div class="text">
                                <h4>Call Us</h4>
                                <a href="tel:+919579179996">+91 9579179996</a><br>
                                <a href="tel:+919922732075">+91 9922732075</a>
                            </div>
                        </div>
                        <div class="author-box">
                            <div class="icons">
                                <img src="<?php echo $base_url; ?>assets/img/icons/mail1.svg" alt="Email">
                            </div>
                            <div class="text">
                                <h4>Email Us</h4>
                                <a href="mailto:Nirajjain45@gmail.com">Nirajjain45@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT — Form + Map -->
            <div class="col-lg-6">

                <!-- FORM -->
                <div class="contact-boxarea">
                    <form action="#" method="post" aria-label="PVC Pipe Inquiry Form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-area">
                                    <label for="first_name">First Name*</label>
                                    <div class="space16"></div>
                                    <input type="text" id="first_name" name="first_name" placeholder="Enter First Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-area">
                                    <label for="last_name">Last Name*</label>
                                    <div class="space16"></div>
                                    <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-area">
                                    <label for="email">Email Address*</label>
                                    <div class="space16"></div>
                                    <input type="email" id="email" name="email" placeholder="Enter Email Address" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-area">
                                    <label for="phone">Phone Number*</label>
                                    <div class="space16"></div>
                                    <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <label for="message">Your Requirement*</label>
                                    <div class="space16"></div>
                                    <textarea id="message" name="message" placeholder="Mention PVC / UPVC / SWR pipe requirement, quantity, project type..." required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <button type="submit" class="header-btn1">
                                        Send Inquiry <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- MAP — directly below form, fills remaining space -->
                <div class="ni-map-wrap">
                    <iframe
                        src="https://maps.google.com/maps?q=Mahalgaon+Bhandra+Road+Nagpur+Maharashtra&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Niraj Industries Location — Mahalgaon, Bhandra Road, Nagpur">
                    </iframe>
                </div>

            </div>
        </div>
    </div>
</section>

<!--===== FAQ AREA =======-->
<section class="faq-inner-area" aria-labelledby="faq-heading">
    <div class="container">

        <!-- Section label -->
        <div class="row mb-2">
            <div class="col-12 text-center">
                <div class="faq-label">
                    <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo1.svg" alt="" style="width:16px;height:16px;margin-left:100px;">
                    Frequently Asked Questions
                </div>
            </div>
        </div>

        <div class="row align-items-stretch">

            <!-- LEFT — Image -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="faq-img-col">
                    <img src="<?php echo $base_url; ?>assets/img/all-images/about/faq.webp" alt="Niraj Industries PVC Pipe FAQ">
                    <div class="faq-img-overlay"></div>
                    <div class="faq-img-badge">
                        <div class="tag">PVC Pipes — Nagpur</div>
                        <h3>Clearing your doubts about PVC, UPVC & SWR pipes</h3>
                    </div>
                </div>
            </div>

            <!-- RIGHT — Accordion -->
            <div class="col-lg-7">
                <h2 id="faq-heading">Frequently Asked Questions About PVC Pipes</h2>

                <!-- Item 1 — open by default -->
                <div class="ni-accordion-item open">
                    <button class="ni-acc-btn" onclick="niAccToggle(this)">
                        What types of pipes does Niraj Industries provide?
                        <span class="ni-acc-icon">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="5" y1="12" x2="19" y2="12" class="minus-line"/></svg>
                        </span>
                    </button>
                    <div class="ni-acc-body">
                        <p>We provide high-quality PVC, UPVC and SWR pipes suitable for plumbing, drainage, agriculture and industrial applications across Nagpur and Maharashtra.</p>
                    </div>
                </div>

                <div class="ni-accordion-item">
                    <button class="ni-acc-btn" onclick="niAccToggle(this)">
                        Do you offer bulk supply for contractors and builders?
                        <span class="ni-acc-icon">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </span>
                    </button>
                    <div class="ni-acc-body">
                        <p>Yes, we specialize in bulk supply of PVC pipes for contractors, builders, dealers and distributors with competitive pricing and consistent availability.</p>
                    </div>
                </div>

                <div class="ni-accordion-item">
                    <button class="ni-acc-btn" onclick="niAccToggle(this)">
                        Which areas do you supply your products to?
                        <span class="ni-acc-icon">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </span>
                    </button>
                    <div class="ni-acc-body">
                        <p>We supply PVC, UPVC and SWR pipes in Nagpur and nearby regions, with delivery available across Maharashtra depending on order size.</p>
                    </div>
                </div>

                <div class="ni-accordion-item">
                    <button class="ni-acc-btn" onclick="niAccToggle(this)">
                        How can I get pricing or a quotation?
                        <span class="ni-acc-icon">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </span>
                    </button>
                    <div class="ni-acc-body">
                        <p>You can submit your requirement through the contact form or call us directly at <strong>9579179996 / 9922732075</strong>. Our team will respond with the best pricing and suitable product options.</p>
                    </div>
                </div>

                <div class="ni-accordion-item">
                    <button class="ni-acc-btn" onclick="niAccToggle(this)">
                        Are your pipes suitable for agriculture and irrigation use?
                        <span class="ni-acc-icon">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </span>
                    </button>
                    <div class="ni-acc-body">
                        <p>Yes, our PVC pipes are widely used for agriculture and irrigation systems, offering durability, smooth flow and long service life.</p>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
</section>

<!--===== CTA AREA =======-->
<section class="cta1-section-area sp4" aria-labelledby="cta-heading">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="cta-header">
                    <h2 class="text-anime-style-3" id="cta-heading">Get in Touch with Niraj Industries Nagpur</h2>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="btn-area" data-aos="zoom-in" data-aos-duration="1000">
                    <a href="tel:+919579179996" class="header-btn1">Call Now <i class="fa-solid fa-phone" aria-hidden="true"></i></a>
                    <a href="<?php echo $base_url; ?>contact-us" class="header-btn2">Get a Quote <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

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

<script>
function niAccToggle(btn) {
    var item = btn.closest('.ni-accordion-item');
    var isOpen = item.classList.contains('open');
    // Close all
    document.querySelectorAll('.ni-accordion-item').forEach(function(el) {
        el.classList.remove('open');
        var svg = el.querySelector('.ni-acc-icon svg');
        svg.innerHTML = '<line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>';
    });
    // Open clicked if it was closed
    if (!isOpen) {
        item.classList.add('open');
        var svg = item.querySelector('.ni-acc-icon svg');
        svg.innerHTML = '<line x1="5" y1="12" x2="19" y2="12" class="minus-line"/>';
    }
}
</script>

</body>
</html>