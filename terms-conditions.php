<?php
$base_url = "https://nirajindustry.com/";
include 'include/config.php';

$page_title       = "Terms & Conditions | Niraj Industries";
$meta_description = "Read Niraj Industries' Terms and Conditions governing the use of our website, products, and services. Transparent, fair, and easy to understand.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">


    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/aos.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/mobile.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/main.css">
    <script src="<?php echo $base_url; ?>assets/js/plugins/jquery-3-6-0.min.js"></script>

    <!-- Google Fonts: DM Serif Display + Sora -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
/* ══════════════════════════════════════════════
   NIRAJ INDUSTRIES — TERMS & CONDITIONS PAGE
   Theme: #B5100E red + #242223 dark
   Font: DM Serif Display (headings) + Sora (body)
   ══════════════════════════════════════════════ */
:root {
    --ni-red:        #B5100E;
    --ni-red-dk:     #8f0b0a;
    --ni-red-soft:   #fdf0f0;
    --ni-red-mid:    rgba(181,16,14,0.12);
    --ni-dark:       #242223;
    --ni-dark-2:     #2e2c2c;
    --ni-dark-3:     #3d3a3a;
    --ni-white:      #ffffff;
    --ni-off-white:  #f8f6f6;
    --ni-text:       #242223;
    --ni-text2:      #4a4646;
    --ni-text3:      #888080;
    --ni-border:     #e8e4e4;
    --ni-bg:         #f5f3f3;
    --ni-radius:     14px;
    --ni-radius-sm:  8px;
    --ni-shadow:     0 2px 16px rgba(36,34,35,0.07);
    --ni-shadow-md:  0 8px 32px rgba(36,34,35,0.13);
    --ni-font-head:  'DM Serif Display', serif;
    --ni-font-body:  'Sora', sans-serif;
    --ni-trans:      all .25s cubic-bezier(.4,0,.2,1);
}

.ni-tc-section {
    display: block !important;
    visibility: visible !important;
    opacity: 1 !important;
}

[data-aos] {
    opacity: 1 !important;
    transform: none !important;
    transition: none !important;
}

*, *::before, *::after { box-sizing: border-box; }
html, body { overflow-x: hidden; }

.ni-tc-page {
    font-family: var(--ni-font-body);
    background: var(--ni-white);
    color: var(--ni-text);
}

/* ── HERO BANNER ─────────────────────────────── */
.ni-tc-hero {
    background: var(--ni-dark);
    position: relative;
    overflow: hidden;
    padding: 80px 0 70px;
}
.ni-tc-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 60% 80% at 90% 50%, rgba(181,16,14,0.15) 0%, transparent 60%),
        radial-gradient(ellipse 40% 60% at 10% 80%, rgba(181,16,14,0.07) 0%, transparent 50%);
    pointer-events: none;
}
.ni-tc-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(181,16,14,0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(181,16,14,0.05) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
}
.ni-tc-hero .container { position: relative; z-index: 2; }

/* Breadcrumb */
.ni-tc-breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 12.5px;
    color: rgba(255,255,255,0.45);
    margin-bottom: 28px;
    font-family: var(--ni-font-body);
}
.ni-tc-breadcrumb a { color: rgba(255,255,255,0.45); text-decoration: none; transition: color 0.2s; }
.ni-tc-breadcrumb a:hover { color: var(--ni-red); }
.ni-tc-breadcrumb i { font-size: 9px; }
.ni-tc-breadcrumb span { color: var(--ni-red); }

/* Hero Label */
.ni-tc-hero-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(181,16,14,0.15);
    border: 1px solid rgba(181,16,14,0.3);
    color: #f87171;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 30px;
    margin-bottom: 20px;
    font-family: var(--ni-font-body);
}

.ni-tc-hero h1 {
    font-family: var(--ni-font-head);
    font-size: clamp(32px, 4.5vw, 52px);
    font-weight: 400;
    color: var(--ni-white);
    line-height: 1.1;
    letter-spacing: -0.5px;
    margin: 0 0 16px;
}
.ni-tc-hero h1 span { color: var(--ni-red); }
.ni-tc-hero p {
    font-family: var(--ni-font-body);
    font-size: 15px;
    color: rgba(255,255,255,0.6);
    line-height: 1.8;
    max-width: 520px;
    margin: 0 0 32px;
}

/* Hero Pills */
.ni-tc-hero-pills { display: flex; flex-wrap: wrap; gap: 10px; }
.ni-tc-hero-pills .pill {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    color: rgba(255,255,255,0.8);
    font-size: 12px;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 30px;
    font-family: var(--ni-font-body);
}
.ni-tc-hero-pills .pill i { color: var(--ni-red); }

/* Hero Right Card */
.ni-tc-hero-right {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    height: 100%;
}
.ni-tc-update-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(181,16,14,0.25);
    border-radius: 20px;
    padding: 28px;
    text-align: center;
    min-width: 220px;
}
.ni-tc-update-card .uc-icon {
    width: 60px; height: 60px;
    background: rgba(181,16,14,0.12);
    border: 1.5px solid rgba(181,16,14,0.3);
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 16px;
}
.ni-tc-update-card .uc-icon i { font-size: 24px; color: #f87171; }
.ni-tc-update-card h5 {
    font-size: 13px; font-weight: 700;
    color: rgba(255,255,255,0.9); margin: 0 0 6px;
    font-family: var(--ni-font-body);
}
.ni-tc-update-card p {
    font-size: 12px; color: rgba(255,255,255,0.45);
    margin: 0 0 16px;
    font-family: var(--ni-font-body);
}
.ni-tc-update-card .uc-date {
    display: inline-block;
    background: var(--ni-red);
    color: var(--ni-white);
    font-size: 12px;
    font-weight: 700;
    padding: 5px 16px;
    border-radius: 20px;
    font-family: var(--ni-font-body);
}

/* ── QUICK SUMMARY STRIP ─────────────────────── */
.ni-tc-strip { background: var(--ni-red); padding: 0; }
.ni-tc-strip-inner {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}
.ni-tc-strip-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 20px 24px;
    border-right: 1px solid rgba(255,255,255,0.15);
}
.ni-tc-strip-item:last-child { border-right: none; }
.ni-tc-strip-item .si-icon {
    width: 44px; height: 44px;
    background: rgba(255,255,255,0.12);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
}
.ni-tc-strip-item .si-icon i { font-size: 18px; color: var(--ni-white); }
.ni-tc-strip-item .si-text h6 {
    font-size: 13px; font-weight: 700;
    color: var(--ni-white); margin: 0 0 2px;
    font-family: var(--ni-font-body);
}
.ni-tc-strip-item .si-text p {
    font-size: 11.5px; color: rgba(255,255,255,0.7);
    margin: 0; line-height: 1.4;
    font-family: var(--ni-font-body);
}

/* ── MAIN LAYOUT ─────────────────────────────── */
.ni-tc-body { padding: 60px 0 90px; background: var(--ni-bg); }

/* ── SIDEBAR ─────────────────────────────────── */
.ni-tc-sidebar { position: sticky; top: 90px; }

.ni-toc-card {
    background: var(--ni-white);
    border-radius: 16px;
    border: 1px solid var(--ni-border);
    overflow: hidden;
    box-shadow: var(--ni-shadow);
    margin-bottom: 20px;
}
.ni-toc-head {
    background: var(--ni-dark);
    padding: 18px 22px;
    display: flex; align-items: center; gap: 10px;
}
.ni-toc-head i { color: var(--ni-red); font-size: 15px; }
.ni-toc-head h5 {
    margin: 0; color: var(--ni-white);
    font-size: 13.5px; font-weight: 700;
    font-family: var(--ni-font-body);
}

.ni-toc-list { padding: 10px 0; }
.ni-toc-list a {
    display: flex; align-items: center; gap: 10px;
    padding: 9px 20px;
    font-size: 13px; font-weight: 500;
    color: var(--ni-text2);
    text-decoration: none;
    border-left: 3px solid transparent;
    transition: var(--ni-trans);
    font-family: var(--ni-font-body);
}
.ni-toc-list a .tnum {
    min-width: 22px; height: 22px;
    border-radius: 50%;
    background: var(--ni-bg);
    color: var(--ni-red-dk);
    font-size: 10px; font-weight: 700;
    display: flex; align-items: center; justify-content: center;
    border: 1px solid rgba(181,16,14,0.25);
    transition: var(--ni-trans);
    flex-shrink: 0;
    font-family: var(--ni-font-body);
}
.ni-toc-list a:hover,
.ni-toc-list a.active {
    color: var(--ni-dark);
    background: var(--ni-red-soft);
    border-left-color: var(--ni-red);
}
.ni-toc-list a:hover .tnum,
.ni-toc-list a.active .tnum {
    background: var(--ni-red);
    color: var(--ni-white);
    border-color: var(--ni-red);
}
.ni-toc-list a.active { font-weight: 700; }

/* Contact Sidebar */
.ni-contact-widget {
    background: var(--ni-dark);
    border-radius: 16px;
    padding: 26px 22px;
    text-align: center;
}
.ni-contact-widget .cw-icon {
    width: 52px; height: 52px;
    background: rgba(181,16,14,0.15);
    border: 1.5px solid rgba(181,16,14,0.3);
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 14px;
}
.ni-contact-widget .cw-icon i { font-size: 22px; color: #f87171; }
.ni-contact-widget h6 {
    color: var(--ni-white); font-size: 14px; font-weight: 700;
    margin: 0 0 6px; font-family: var(--ni-font-body);
}
.ni-contact-widget p {
    color: rgba(255,255,255,0.55); font-size: 12.5px;
    margin: 0 0 18px; line-height: 1.6;
    font-family: var(--ni-font-body);
}
.ni-contact-widget a {
    display: inline-flex; align-items: center; gap: 7px;
    background: var(--ni-red);
    color: var(--ni-white);
    font-size: 13px; font-weight: 700;
    padding: 11px 24px;
    border-radius: 30px;
    text-decoration: none;
    transition: var(--ni-trans);
    width: 100%; justify-content: center;
    font-family: var(--ni-font-body);
}
.ni-contact-widget a:hover {
    background: var(--ni-red-dk);
    color: var(--ni-white);
    transform: translateY(-2px);
}

/* ── CONTENT SECTIONS ────────────────────────── */
.ni-tc-section {
    background: var(--ni-white);
    border-radius: 16px;
    border: 1px solid var(--ni-border);
    padding: 32px 36px;
    margin-bottom: 20px;
    scroll-margin-top: 100px;
    box-shadow: var(--ni-shadow);
    transition: box-shadow 0.2s;
}
.ni-tc-section:hover { box-shadow: var(--ni-shadow-md); }

.ni-tc-section-head {
    display: flex; align-items: flex-start; gap: 16px;
    padding-bottom: 20px;
    margin-bottom: 22px;
    border-bottom: 2px solid var(--ni-border);
}
.ni-tc-section-icon {
    width: 50px; height: 50px;
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; flex-shrink: 0;
    background: var(--ni-red-soft);
    border: 1.5px solid rgba(181,16,14,0.2);
    color: var(--ni-red);
}
.ni-tc-sec-num {
    font-size: 10.5px; font-weight: 700;
    letter-spacing: 2px; text-transform: uppercase;
    color: var(--ni-red); margin-bottom: 3px;
    font-family: var(--ni-font-body);
}
.ni-tc-sec-title {
    font-family: var(--ni-font-head);
    font-size: 22px; font-weight: 400;
    color: var(--ni-dark); margin: 0;
    line-height: 1.2;
}

.ni-tc-prose {
    font-family: var(--ni-font-body);
    font-size: 14.5px;
    color: var(--ni-text2);
    line-height: 1.85;
}
.ni-tc-prose p + p { margin-top: 12px; }

/* List */
.ni-tc-list {
    list-style: none; padding: 0; margin: 16px 0 0;
}
.ni-tc-list li {
    display: flex; align-items: flex-start; gap: 12px;
    padding: 12px 0;
    border-bottom: 1px solid var(--ni-border);
    font-size: 14px; color: var(--ni-text2);
    line-height: 1.7;
    font-family: var(--ni-font-body);
}
.ni-tc-list li:last-child { border-bottom: none; }
.ni-tc-list li .li-dot {
    width: 22px; height: 22px;
    border-radius: 50%;
    background: var(--ni-red-soft);
    border: 1.5px solid rgba(181,16,14,0.2);
    color: var(--ni-red);
    font-size: 9px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0; margin-top: 2px;
}

/* Highlight Boxes */
.ni-highlight {
    background: var(--ni-red-soft);
    border: 1px solid rgba(181,16,14,0.18);
    border-left: 4px solid var(--ni-red);
    border-radius: 10px;
    padding: 16px 20px;
    margin-top: 18px;
    font-size: 13.5px;
    color: var(--ni-text);
    line-height: 1.75;
    font-family: var(--ni-font-body);
}
.ni-highlight strong { color: var(--ni-dark); }

.ni-highlight.dark {
    background: var(--ni-dark);
    border-color: rgba(181,16,14,0.35);
    border-left-color: var(--ni-red);
    color: rgba(255,255,255,0.75);
}
.ni-highlight.dark strong { color: #f87171; }

/* Info Grid */
.ni-info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
    margin-top: 18px;
}
.ni-info-card {
    background: var(--ni-bg);
    border: 1px solid var(--ni-border);
    border-radius: 12px;
    padding: 16px 18px;
    display: flex; align-items: flex-start; gap: 12px;
}
.ni-info-card i { font-size: 18px; color: var(--ni-red); margin-top: 2px; flex-shrink: 0; }
.ni-info-card h6 {
    font-size: 13px; font-weight: 700;
    color: var(--ni-dark); margin: 0 0 3px;
    font-family: var(--ni-font-body);
}
.ni-info-card p {
    font-size: 12.5px; color: var(--ni-text3);
    margin: 0; line-height: 1.5;
    font-family: var(--ni-font-body);
}

/* ── BOTTOM CTA ──────────────────────────────── */
.ni-tc-cta {
    background: var(--ni-dark);
    border-radius: 20px;
    padding: 48px 44px;
    text-align: center;
    position: relative;
    overflow: hidden;
    margin-top: 10px;
}
.ni-tc-cta::before {
    content: '';
    position: absolute; inset: 0;
    background:
        radial-gradient(ellipse 50% 80% at 100% 50%, rgba(181,16,14,0.15) 0%, transparent 55%),
        radial-gradient(ellipse 40% 60% at 0% 50%, rgba(181,16,14,0.08) 0%, transparent 50%);
    pointer-events: none;
}
.ni-tc-cta::after {
    content: '';
    position: absolute; inset: 0;
    background-image: radial-gradient(circle, rgba(181,16,14,0.08) 1px, transparent 1px);
    background-size: 28px 28px;
    pointer-events: none;
}
.ni-tc-cta .cta-inner { position: relative; z-index: 1; }
.ni-tc-cta h3 {
    font-family: var(--ni-font-head);
    font-size: 32px; font-weight: 400;
    color: var(--ni-white); margin: 0 0 10px; line-height: 1.2;
}
.ni-tc-cta h3 span { color: var(--ni-red); }
.ni-tc-cta p {
    font-family: var(--ni-font-body);
    font-size: 15px; color: rgba(255,255,255,0.6);
    max-width: 500px; margin: 0 auto 28px; line-height: 1.7;
}
.ni-tc-cta-btns { display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap; }

.ni-cta-btn-primary {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--ni-red); color: var(--ni-white);
    font-size: 14px; font-weight: 700;
    padding: 14px 32px; border-radius: 50px;
    text-decoration: none; transition: var(--ni-trans);
    border: 2px solid var(--ni-red);
    font-family: var(--ni-font-body);
}
.ni-cta-btn-primary:hover {
    background: var(--ni-red-dk);
    border-color: var(--ni-red-dk);
    color: var(--ni-white);
    transform: translateY(-2px);
}
.ni-cta-btn-outline {
    display: inline-flex; align-items: center; gap: 8px;
    border: 2px solid rgba(255,255,255,0.25);
    color: rgba(255,255,255,0.8);
    font-size: 14px; font-weight: 700;
    padding: 14px 32px; border-radius: 50px;
    text-decoration: none; transition: var(--ni-trans);
    font-family: var(--ni-font-body);
}
.ni-cta-btn-outline:hover { border-color: var(--ni-red); color: #f87171; }

/* ── RESPONSIVE ──────────────────────────────── */
@media (max-width: 991px) {
    .ni-tc-sidebar { position: static; margin-bottom: 28px; }
    .ni-tc-strip-inner { grid-template-columns: repeat(2, 1fr); }
    .ni-tc-strip-item:nth-child(2) { border-right: none; }
    .ni-tc-hero-right { justify-content: flex-start; margin-top: 40px; }
}
@media (max-width: 767px) {
    .ni-tc-hero { padding: 60px 0 50px; }
    .ni-tc-section { padding: 24px 20px; }
    .ni-tc-cta { padding: 36px 24px; }
    .ni-tc-cta h3 { font-size: 26px; }
    .ni-info-grid { grid-template-columns: 1fr; }
    .ni-cta-btn-primary, .ni-cta-btn-outline { width: 100%; justify-content: center; }
    .ni-tc-cta-btns { flex-direction: column; }
}
@media (max-width: 480px) {
    .ni-tc-strip-inner { grid-template-columns: 1fr; }
    .ni-tc-strip-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.15); }
    .ni-tc-strip-item:last-child { border-bottom: none; }
}
</style>
</head>
<body class="homepage4-body ni-tc-page">

<?php include 'include/header.php'; ?>

<!-- ══ HERO BANNER ══════════════════════════════ -->
<section class="ni-tc-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <nav class="ni-tc-breadcrumb" style="margin-top:20px;">
                    <a href="<?php echo $base_url; ?>">Home</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <span>Terms &amp; Conditions</span>
                </nav>
                <div class="ni-tc-hero-label">
                    <i class="fa-solid fa-scale-balanced"></i>
                    Legal &amp; Policy
                </div>
                <h1>Terms &amp;<br><span>Conditions</span></h1>
                <p>Please read these terms carefully before using our website or placing an order with Niraj Industries. These terms govern your relationship with us — written to be clear, not complex.</p>
                <div class="ni-tc-hero-pills">
                    <div class="pill"><i class="fa-solid fa-check"></i> Website Use</div>
                    <div class="pill"><i class="fa-solid fa-check"></i> Product Orders</div>
                    <div class="pill"><i class="fa-solid fa-check"></i> Intellectual Property</div>
                    <div class="pill"><i class="fa-solid fa-check"></i> Governing Law</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ni-tc-hero-right">
                    <div class="ni-tc-update-card">
                        <div class="uc-icon">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>
                        <h5>Last Updated</h5>
                        <p>These terms were last reviewed and updated on:</p>
                        <span class="uc-date">April 01, 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ QUICK SUMMARY STRIP ══════════════════════ -->
<div class="ni-tc-strip">
    <div class="container-fluid px-0">
        <div class="ni-tc-strip-inner">
            <div class="ni-tc-strip-item">
                <div class="si-icon"><i class="fa-solid fa-handshake"></i></div>
                <div class="si-text">
                    <h6>Agreement to Terms</h6>
                    <p>Using our site = accepting these terms</p>
                </div>
            </div>
            <div class="ni-tc-strip-item">
                <div class="si-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <div class="si-text">
                    <h6>Your Data is Safe</h6>
                    <p>We respect your privacy always</p>
                </div>
            </div>
            <div class="ni-tc-strip-item">
                <div class="si-icon"><i class="fa-solid fa-indian-rupee-sign"></i></div>
                <div class="si-text">
                    <h6>Transparent Pricing</h6>
                    <p>No hidden charges on any order</p>
                </div>
            </div>
            <div class="ni-tc-strip-item">
                <div class="si-icon"><i class="fa-solid fa-gavel"></i></div>
                <div class="si-text">
                    <h6>Indian Law Applies</h6>
                    <p>Jurisdiction: Nagpur, Maharashtra</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ══ MAIN BODY ════════════════════════════════ -->
<section class="ni-tc-body">
    <div class="container">
        <div class="row g-4">

            <!-- ── SIDEBAR ── -->
            <div class="col-lg-3 d-none d-lg-block">
                <div class="ni-tc-sidebar">
                    <div class="ni-toc-card">
                        <div class="ni-toc-head">
                            <i class="fa-solid fa-list-ul"></i>
                            <h5>Table of Contents</h5>
                        </div>
                        <div class="ni-toc-list">
                            <a href="#tc1" class="active"><span class="tnum">01</span> Introduction</a>
                            <a href="#tc2"><span class="tnum">02</span> Use of Website</a>
                            <a href="#tc3"><span class="tnum">03</span> Products & Orders</a>
                            <a href="#tc4"><span class="tnum">04</span> Pricing & Payment</a>
                            <a href="#tc5"><span class="tnum">05</span> Delivery & Risk</a>
                            <a href="#tc6"><span class="tnum">06</span> Intellectual Property</a>
                            <a href="#tc7"><span class="tnum">07</span> Liability & Disclaimer</a>
                            <a href="#tc8"><span class="tnum">08</span> Privacy & Data</a>
                            <a href="#tc9"><span class="tnum">09</span> Governing Law</a>
                            <a href="#tc10"><span class="tnum">10</span> Changes to Terms</a>
                        </div>
                    </div>
                    <div class="ni-contact-widget">
                        <div class="cw-icon"><i class="fa-solid fa-phone-volume"></i></div>
                        <h6>Have a Question?</h6>
                        <p>If any part of these terms is unclear, our team is happy to explain.</p>
                        <a href="<?php echo $base_url; ?>contact-us">
                            <i class="fa-solid fa-arrow-right"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- ── CONTENT ── -->
            <div class="col-lg-9">

                <!-- Section 01 — Introduction -->
                <div class="ni-tc-section" id="tc1" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-tc-section-head">
                        <div class="ni-tc-section-icon">
                            <i class="fa-solid fa-file-circle-info"></i>
                        </div>
                        <div>
                            <div class="ni-tc-sec-num">Section 01</div>
                            <h2 class="ni-tc-sec-title">Introduction</h2>
                        </div>
                    </div>
                    <div class="ni-tc-prose">
                        <p>Welcome to <strong>Niraj Industries</strong>. By accessing or using our website (<strong><?php echo $base_url; ?></strong>) and by placing any order for our products, you agree to be bound by these Terms and Conditions.</p>
                        <p>These terms apply to all visitors, customers, and users of our website. If you do not agree to any part of these terms, please do not use our website or services.</p>
                        <p>Niraj Industries is a manufacturer and supplier of high-quality PVC pipes, fittings, and related industrial products, headquartered in Nagpur, Maharashtra, India.</p>
                        <div class="ni-highlight">
                            <strong>Plain Language Promise:</strong> We've written these terms to be as clear and straightforward as possible. If you have any questions about what something means, please reach out to us — we're happy to explain.
                        </div>
                    </div>
                </div>

                <!-- Section 02 — Use of Website -->
                <div class="ni-tc-section" id="tc2" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-tc-section-head">
                        <div class="ni-tc-section-icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div>
                            <div class="ni-tc-sec-num">Section 02</div>
                            <h2 class="ni-tc-sec-title">Use of Our Website</h2>
                        </div>
                    </div>
                    <div class="ni-tc-prose">
                        <p>By using this website, you agree to the following conditions of use:</p>
                        <ul class="ni-tc-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                You must be at least <strong>18 years of age</strong> or be using the website under the supervision of a parent or legal guardian.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                You agree not to use this website for any <strong>unlawful, fraudulent, or harmful</strong> purpose, or in any way that could damage the reputation or operations of Niraj Industries.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                You must not attempt to gain <strong>unauthorised access</strong> to any part of the website, its servers, or any databases connected to it.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                We reserve the right to <strong>restrict or terminate access</strong> to the website at any time, without notice, if these terms are violated.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                All content on this website is provided for <strong>informational purposes</strong> only. Product specifications, pricing, and availability are subject to change without prior notice.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Section 03 — Products & Orders -->
                <div class="ni-tc-section" id="tc3" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-tc-section-head">
                        <div class="ni-tc-section-icon">
                            <i class="fa-solid fa-box-open"></i>
                        </div>
                        <div>
                            <div class="ni-tc-sec-num">Section 03</div>
                            <h2 class="ni-tc-sec-title">Products &amp; Orders</h2>
                        </div>
                    </div>
                    <div class="ni-tc-prose">
                        <p>All product orders placed with Niraj Industries — whether via our website, WhatsApp, phone, or through a sales representative — are subject to the following terms:</p>
                        <ul class="ni-tc-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Placing an order constitutes an <strong>offer to purchase</strong> the product at the stated price. The contract is formed upon our written or electronic confirmation of the order.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                We reserve the right to <strong>refuse or cancel any order</strong> at our discretion, including in the event of pricing errors, unavailability of stock, or suspected fraudulent activity.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Product images, dimensions, and technical specifications shown on the website are <strong>indicative</strong>. Minor variations may occur due to manufacturing tolerances or updated product batches.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Bulk and custom orders</strong> are governed by the terms agreed in the Purchase Order or written agreement signed between both parties. Please refer to our Cancellation Policy for further details.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                We do not guarantee continuous availability of all listed products. In case of stock unavailability, we will notify you and offer an alternative or full refund.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Section 04 — Pricing & Payment -->
                <div class="ni-tc-section" id="tc4" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-tc-section-head">
                        <div class="ni-tc-section-icon">
                            <i class="fa-solid fa-indian-rupee-sign"></i>
                        </div>
                        <div>
                            <div class="ni-tc-sec-num">Section 04</div>
                            <h2 class="ni-tc-sec-title">Pricing &amp; Payment</h2>
                        </div>
                    </div>
                    <div class="ni-tc-prose">
                        <p>All prices on this website are listed in <strong>Indian Rupees (INR)</strong> and are inclusive of applicable GST unless stated otherwise. The following payment terms apply:</p>
                        <ul class="ni-tc-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Prices are subject to change without prior notice. The price confirmed at the <strong>time of order placement</strong> will be the binding price for that transaction.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Accepted payment methods include <strong>NEFT/RTGS, UPI, credit/debit cards,</strong> and cheques for applicable order values.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                For large or bulk orders, a <strong>50% advance payment</strong> may be required before production or dispatch commences. Balance is due as per agreed terms.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>GST invoices</strong> are issued for all orders. Ensure your GSTIN is provided at the time of ordering if you require a business invoice.
                            </li>
                        </ul>
                        <div class="ni-info-grid">
                            <div class="ni-info-card">
                                <i class="fa-solid fa-receipt"></i>
                                <div>
                                    <h6>GST Compliant</h6>
                                    <p>All invoices issued with valid GST</p>
                                </div>
                            </div>
                            <div class="ni-info-card">
                                <i class="fa-solid fa-lock"></i>
                                <div>
                                    <h6>Secure Payments</h6>
                                    <p>UPI, NEFT, RTGS, Card accepted</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 05 — Delivery & Risk -->
                <div class="ni-tc-section" id="tc5" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-tc-section-head">
                        <div class="ni-tc-section-icon">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <div>
                            <div class="ni-tc-sec-num">Section 05</div>
                            <h2 class="ni-tc-sec-title">Delivery &amp; Risk of Loss</h2>
                        </div>
                    </div>
                    <div class="ni-tc-prose">
                        <p>Delivery timelines are estimates and may vary based on order size, location, and logistics. The following terms apply to all deliveries:</p>
                        <ul class="ni-tc-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Risk of loss or damage</strong> passes to the customer upon physical delivery and acceptance of goods at the delivery address.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                If goods are delivered by <strong>our own transport</strong>, Niraj Industries is responsible for safe delivery up to the point of handover.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Where goods are shipped via a <strong>third-party courier or transporter</strong> nominated by the customer, responsibility passes to the customer upon handover to that transporter.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Any <strong>damage or discrepancy</strong> must be noted on the delivery receipt and reported to us within 48 hours. Failure to do so may affect your ability to claim a refund or replacement.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Delivery charges, if applicable, are non-refundable once the order has been dispatched, unless the delivery was not attempted.
                            </li>
                        </ul>
                        <div class="ni-highlight">
                            <strong>Tip:</strong> Always inspect goods at the time of delivery before signing the receipt. If you notice any visible damage to packaging or products, make a note on the delivery slip and contact us immediately.
                        </div>
                    </div>
                </div>

                <!-- Section 06 — Intellectual Property -->
                <div class="ni-tc-section" id="tc6" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-tc-section-head">
                        <div class="ni-tc-section-icon">
                            <i class="fa-solid fa-copyright"></i>
                        </div>
                        <div>
                            <div class="ni-tc-sec-num">Section 06</div>
                            <h2 class="ni-tc-sec-title">Intellectual Property</h2>
                        </div>
                    </div>
                    <div class="ni-tc-prose">
                        <p>All content on this website is the intellectual property of Niraj Industries unless otherwise stated:</p>
                        <ul class="ni-tc-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                The <strong>Niraj Industries name, logo, brand identity,</strong> product images, technical documents, and all website content are protected under applicable intellectual property laws.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                You may <strong>not reproduce, distribute, republish, or sell</strong> any content from this website without prior written permission from Niraj Industries.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                You may <strong>print or download</strong> content for personal, non-commercial use only, provided you acknowledge the source.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Any unauthorised use of our brand name, trademarks, or product imagery for commercial purposes may result in <strong>legal action</strong>.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Section 07 — Liability & Disclaimer -->
                <div class="ni-tc-section" id="tc7" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-tc-section-head">
                        <div class="ni-tc-section-icon">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <div>
                            <div class="ni-tc-sec-num">Section 07</div>
                            <h2 class="ni-tc-sec-title">Liability &amp; Disclaimer</h2>
                        </div>
                    </div>
                    <div class="ni-tc-prose">
                        <p>Niraj Industries takes quality seriously, but the following limitations apply:</p>
                        <ul class="ni-tc-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Our website is provided <strong>"as is"</strong> without warranties of any kind, express or implied. We do not guarantee that the website will be error-free or uninterrupted.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Niraj Industries shall not be liable for any <strong>indirect, consequential, or special damages</strong> arising from the use of our products or website, to the extent permitted by Indian law.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Our liability in any case shall not exceed the <strong>total value of the order</strong> placed by the customer.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                We are not responsible for damages resulting from <strong>improper installation, incorrect product selection, or misuse</strong> of our products by the buyer.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Links to <strong>third-party websites</strong> are provided for convenience only. We do not endorse or take responsibility for the content of external sites.
                            </li>
                        </ul>
                        <div class="ni-highlight dark">
                            <strong>Important:</strong> For product suitability, always consult our technical team before purchase, especially for critical or pressurised applications. Our team will guide you to the correct specification for your project.
                        </div>
                    </div>
                </div>

                <!-- Section 08 — Privacy & Data -->
                <div class="ni-tc-section" id="tc8" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-tc-section-head">
                        <div class="ni-tc-section-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <div class="ni-tc-sec-num">Section 08</div>
                            <h2 class="ni-tc-sec-title">Privacy &amp; Data Collection</h2>
                        </div>
                    </div>
                    <div class="ni-tc-prose">
                        <p>We collect only the data necessary to process your orders and improve your experience:</p>
                        <ul class="ni-tc-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Personal information (name, phone, address, email) collected via enquiry forms or order placement is used <strong>solely for business communication and order fulfilment</strong>.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                We do not <strong>sell, rent, or share</strong> your personal data with third parties for marketing purposes.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                We use standard web analytics to understand how visitors use our site. This data is <strong>anonymous and aggregated</strong> — it is not linked to any individual.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                You may request <strong>deletion or correction</strong> of your personal data by contacting us at any time.
                            </li>
                        </ul>
                        <div class="ni-info-grid">
                            <div class="ni-info-card">
                                <i class="fa-solid fa-user-shield"></i>
                                <div>
                                    <h6>Data Ownership</h6>
                                    <p>Your data is never sold to third parties</p>
                                </div>
                            </div>
                            <div class="ni-info-card">
                                <i class="fa-solid fa-trash-can"></i>
                                <div>
                                    <h6>Right to Erasure</h6>
                                    <p>Request deletion of your data anytime</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 09 — Governing Law -->
                <div class="ni-tc-section" id="tc9" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-tc-section-head">
                        <div class="ni-tc-section-icon">
                            <i class="fa-solid fa-gavel"></i>
                        </div>
                        <div>
                            <div class="ni-tc-sec-num">Section 09</div>
                            <h2 class="ni-tc-sec-title">Governing Law &amp; Jurisdiction</h2>
                        </div>
                    </div>
                    <div class="ni-tc-prose">
                        <p>These Terms and Conditions are governed by the laws of India. The following jurisdiction terms apply to all disputes:</p>
                        <ul class="ni-tc-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Any disputes arising out of or in connection with these terms shall be subject to the <strong>exclusive jurisdiction of courts in Nagpur, Maharashtra, India</strong>.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Both parties agree to attempt to resolve any dispute <strong>amicably through negotiation</strong> before initiating formal legal proceedings.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                These terms are governed by the <strong>Indian Contract Act, 1872</strong>, the Sale of Goods Act, 1930, and other applicable Indian legislation.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                If any provision of these terms is found to be <strong>invalid or unenforceable</strong>, the remaining provisions shall continue to be valid and binding.
                            </li>
                        </ul>
                        <div class="ni-highlight">
                            <strong>Our Approach:</strong> We prefer to resolve all disputes through open and fair communication. Please contact us before escalating any issue — we are committed to finding a reasonable resolution for both parties.
                        </div>
                    </div>
                </div>

                <!-- Section 10 — Changes to Terms -->
                <div class="ni-tc-section" id="tc10" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-tc-section-head">
                        <div class="ni-tc-section-icon">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </div>
                        <div>
                            <div class="ni-tc-sec-num">Section 10</div>
                            <h2 class="ni-tc-sec-title">Changes to These Terms</h2>
                        </div>
                    </div>
                    <div class="ni-tc-prose">
                        <p>Niraj Industries reserves the right to update or revise these Terms and Conditions at any time:</p>
                        <ul class="ni-tc-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Any changes will be <strong>published on this page</strong> with an updated "Last Updated" date. Continued use of the website after changes constitutes your acceptance of the revised terms.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                We recommend reviewing this page <strong>periodically</strong> to stay informed of any updates.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                For significant changes that may affect existing customers, we will make <strong>reasonable efforts to notify</strong> via email or WhatsApp.
                            </li>
                        </ul>
                        <div class="ni-highlight dark">
                            <strong>Current Version:</strong> These Terms and Conditions were last updated on <strong>April 01, 2025</strong>. If you are reading a printed or cached version of this page, please visit our website for the most current version.
                        </div>
                    </div>
                </div>

                <!-- CTA Banner -->
                <div class="ni-tc-cta" data-aos="fade-up" data-aos-duration="700">
                    <div class="cta-inner">
                        <h3>Questions About <span>Our Terms?</span></h3>
                        <p>Our team is happy to clarify any part of these terms. We believe in open, honest communication with every customer.</p>
                        <div class="ni-tc-cta-btns">
                            <a href="<?php echo $base_url; ?>contact-us" class="ni-cta-btn-primary">
                                <i class="fa-solid fa-paper-plane"></i> Contact Us
                            </a>
                            <a href="<?php echo $base_url; ?>products" class="ni-cta-btn-outline">
                                <i class="fa-solid fa-boxes-stacked"></i> View Products
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ── END CONTENT ── -->

        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>

<script src="<?php echo $base_url; ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/fontawesome.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/aos.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/sidebar.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/mobilemenu.js"></script>
<script src="<?php echo $base_url; ?>assets/js/main.js"></script>
<script>
if (typeof AOS !== 'undefined') { AOS.init({ duration: 600, once: true, offset: 50 }); }

// TOC Active State on Scroll
(function () {
    const sections = document.querySelectorAll('.ni-tc-section[id]');
    const links    = document.querySelectorAll('.ni-toc-list a');
    function update() {
        let current = '';
        sections.forEach(s => {
            if (s.getBoundingClientRect().top <= 120) current = s.id;
        });
        links.forEach(l => {
            l.classList.remove('active');
            if (l.getAttribute('href') === '#' + current) l.classList.add('active');
        });
    }
    window.addEventListener('scroll', update, { passive: true });
    update();
})();
</script>
</body>
</html>