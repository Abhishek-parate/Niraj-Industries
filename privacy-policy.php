<?php
$base_url = "http://localhost/nirajindustries/";
include 'include/config.php';

$page_title       = "Privacy Policy | Niraj Industries";
$meta_description = "Read Niraj Industries' Privacy Policy to understand how we collect, use, and protect your personal data. Your privacy is our priority.";
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
   NIRAJ INDUSTRIES — PRIVACY POLICY PAGE
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

.ni-pp-section {
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
.ni-pp-page {
    font-family: var(--ni-font-body);
    background: var(--ni-white);
    color: var(--ni-text);
}

/* ── HERO ────────────────────────────────────── */
.ni-pp-hero {
    background: var(--ni-dark);
    position: relative;
    overflow: hidden;
    padding: 80px 0 70px;
}
.ni-pp-hero::before {
    content: '';
    position: absolute; inset: 0;
    background:
        radial-gradient(ellipse 60% 80% at 90% 50%, rgba(181,16,14,0.15) 0%, transparent 60%),
        radial-gradient(ellipse 40% 60% at 10% 80%, rgba(181,16,14,0.07) 0%, transparent 50%);
    pointer-events: none;
}
.ni-pp-hero::after {
    content: '';
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(181,16,14,0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(181,16,14,0.05) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
}
.ni-pp-hero .container { position: relative; z-index: 2; }

.ni-pp-breadcrumb {
    display: flex; align-items: center; gap: 8px;
    font-size: 12.5px; color: rgba(255,255,255,0.45);
    margin-bottom: 28px;
    font-family: var(--ni-font-body);
}
.ni-pp-breadcrumb a { color: rgba(255,255,255,0.45); text-decoration: none; transition: color 0.2s; }
.ni-pp-breadcrumb a:hover { color: var(--ni-red); }
.ni-pp-breadcrumb i { font-size: 9px; }
.ni-pp-breadcrumb span { color: var(--ni-red); }

.ni-pp-hero-label {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(181,16,14,0.15);
    border: 1px solid rgba(181,16,14,0.3);
    color: #f87171;
    font-size: 11px; font-weight: 700;
    letter-spacing: 2px; text-transform: uppercase;
    padding: 6px 16px; border-radius: 30px;
    margin-bottom: 20px;
    font-family: var(--ni-font-body);
}

.ni-pp-hero h1 {
    font-family: var(--ni-font-head);
    font-size: clamp(32px, 4.5vw, 52px);
    font-weight: 400; color: var(--ni-white);
    line-height: 1.1; letter-spacing: -0.5px;
    margin: 0 0 16px;
}
.ni-pp-hero h1 span { color: var(--ni-red); }
.ni-pp-hero p {
    font-family: var(--ni-font-body);
    font-size: 15px; color: rgba(255,255,255,0.6);
    line-height: 1.8; max-width: 520px;
    margin: 0 0 32px;
}

.ni-pp-hero-pills { display: flex; flex-wrap: wrap; gap: 10px; }
.ni-pp-hero-pills .pill {
    display: inline-flex; align-items: center; gap: 7px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    color: rgba(255,255,255,0.8);
    font-size: 12px; font-weight: 600;
    padding: 8px 16px; border-radius: 30px;
    font-family: var(--ni-font-body);
}
.ni-pp-hero-pills .pill i { color: var(--ni-red); }

.ni-pp-hero-right { display: flex; align-items: center; justify-content: flex-end; height: 100%; }
.ni-pp-update-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(181,16,14,0.25);
    border-radius: 20px; padding: 28px;
    text-align: center; min-width: 220px;
}
.ni-pp-update-card .uc-icon {
    width: 60px; height: 60px;
    background: rgba(181,16,14,0.12);
    border: 1.5px solid rgba(181,16,14,0.3);
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 16px;
}
.ni-pp-update-card .uc-icon i { font-size: 24px; color: #f87171; }
.ni-pp-update-card h5 {
    font-size: 13px; font-weight: 700;
    color: rgba(255,255,255,0.9); margin: 0 0 6px;
    font-family: var(--ni-font-body);
}
.ni-pp-update-card p {
    font-size: 12px; color: rgba(255,255,255,0.45);
    margin: 0 0 16px;
    font-family: var(--ni-font-body);
}
.ni-pp-update-card .uc-date {
    display: inline-block;
    background: var(--ni-red); color: var(--ni-white);
    font-size: 12px; font-weight: 700;
    padding: 5px 16px; border-radius: 20px;
    font-family: var(--ni-font-body);
}

/* ── STRIP ───────────────────────────────────── */
.ni-pp-strip { background: var(--ni-red); padding: 0; }
.ni-pp-strip-inner { display: grid; grid-template-columns: repeat(4, 1fr); }
.ni-pp-strip-item {
    display: flex; align-items: center; gap: 14px;
    padding: 20px 24px;
    border-right: 1px solid rgba(255,255,255,0.15);
}
.ni-pp-strip-item:last-child { border-right: none; }
.ni-pp-strip-item .si-icon {
    width: 44px; height: 44px;
    background: rgba(255,255,255,0.12);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
}
.ni-pp-strip-item .si-icon i { font-size: 18px; color: var(--ni-white); }
.ni-pp-strip-item .si-text h6 {
    font-size: 13px; font-weight: 700;
    color: var(--ni-white); margin: 0 0 2px;
    font-family: var(--ni-font-body);
}
.ni-pp-strip-item .si-text p {
    font-size: 11.5px; color: rgba(255,255,255,0.7);
    margin: 0; line-height: 1.4;
    font-family: var(--ni-font-body);
}

/* ── MAIN LAYOUT ─────────────────────────────── */
.ni-pp-body { padding: 60px 0 90px; background: var(--ni-bg); }
.ni-pp-sidebar { position: sticky; top: 90px; }

.ni-toc-card {
    background: var(--ni-white);
    border-radius: 16px; border: 1px solid var(--ni-border);
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
    background: var(--ni-bg); color: var(--ni-red-dk);
    font-size: 10px; font-weight: 700;
    display: flex; align-items: center; justify-content: center;
    border: 1px solid rgba(181,16,14,0.25);
    transition: var(--ni-trans); flex-shrink: 0;
    font-family: var(--ni-font-body);
}
.ni-toc-list a:hover, .ni-toc-list a.active {
    color: var(--ni-dark);
    background: var(--ni-red-soft);
    border-left-color: var(--ni-red);
}
.ni-toc-list a:hover .tnum, .ni-toc-list a.active .tnum {
    background: var(--ni-red); color: var(--ni-white);
    border-color: var(--ni-red);
}
.ni-toc-list a.active { font-weight: 700; }

.ni-contact-widget {
    background: var(--ni-dark);
    border-radius: 16px; padding: 26px 22px;
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
    background: var(--ni-red); color: var(--ni-white);
    font-size: 13px; font-weight: 700;
    padding: 11px 24px; border-radius: 30px;
    text-decoration: none; transition: var(--ni-trans);
    width: 100%; justify-content: center;
    font-family: var(--ni-font-body);
}
.ni-contact-widget a:hover {
    background: var(--ni-red-dk); color: var(--ni-white);
    transform: translateY(-2px);
}

/* ── CONTENT SECTIONS ────────────────────────── */
.ni-pp-section {
    background: var(--ni-white);
    border-radius: 16px; border: 1px solid var(--ni-border);
    padding: 32px 36px; margin-bottom: 20px;
    scroll-margin-top: 100px;
    box-shadow: var(--ni-shadow);
    transition: box-shadow 0.2s;
}
.ni-pp-section:hover { box-shadow: var(--ni-shadow-md); }

.ni-pp-section-head {
    display: flex; align-items: flex-start; gap: 16px;
    padding-bottom: 20px; margin-bottom: 22px;
    border-bottom: 2px solid var(--ni-border);
}
.ni-pp-section-icon {
    width: 50px; height: 50px;
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; flex-shrink: 0;
    background: var(--ni-red-soft);
    border: 1.5px solid rgba(181,16,14,0.2);
    color: var(--ni-red);
}
.ni-pp-sec-num {
    font-size: 10.5px; font-weight: 700;
    letter-spacing: 2px; text-transform: uppercase;
    color: var(--ni-red); margin-bottom: 3px;
    font-family: var(--ni-font-body);
}
.ni-pp-sec-title {
    font-family: var(--ni-font-head);
    font-size: 22px; font-weight: 400;
    color: var(--ni-dark); margin: 0; line-height: 1.2;
}

.ni-pp-prose {
    font-family: var(--ni-font-body);
    font-size: 14.5px; color: var(--ni-text2); line-height: 1.85;
}
.ni-pp-prose p + p { margin-top: 12px; }

.ni-pp-list { list-style: none; padding: 0; margin: 16px 0 0; }
.ni-pp-list li {
    display: flex; align-items: flex-start; gap: 12px;
    padding: 12px 0; border-bottom: 1px solid var(--ni-border);
    font-size: 14px; color: var(--ni-text2); line-height: 1.7;
    font-family: var(--ni-font-body);
}
.ni-pp-list li:last-child { border-bottom: none; }
.ni-pp-list li .li-dot {
    width: 22px; height: 22px; border-radius: 50%;
    background: var(--ni-red-soft);
    border: 1.5px solid rgba(181,16,14,0.2);
    color: var(--ni-red); font-size: 9px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0; margin-top: 2px;
}

.ni-highlight {
    background: var(--ni-red-soft);
    border: 1px solid rgba(181,16,14,0.18);
    border-left: 4px solid var(--ni-red);
    border-radius: 10px; padding: 16px 20px;
    margin-top: 18px; font-size: 13.5px;
    color: var(--ni-text); line-height: 1.75;
    font-family: var(--ni-font-body);
}
.ni-highlight strong { color: var(--ni-dark); }
.ni-highlight a { color: var(--ni-red-dk); font-weight: 600; }
.ni-highlight.dark {
    background: var(--ni-dark);
    border-color: rgba(181,16,14,0.35);
    border-left-color: var(--ni-red);
    color: rgba(255,255,255,0.75);
}
.ni-highlight.dark strong { color: #f87171; }

/* Data Type Grid */
.ni-data-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px; margin-top: 20px;
}
.ni-data-card {
    background: var(--ni-bg);
    border: 1px solid var(--ni-border);
    border-top: 3px solid var(--ni-red);
    border-radius: 12px; padding: 18px 16px;
    text-align: center;
}
.ni-data-card i {
    font-size: 22px; color: var(--ni-red);
    margin-bottom: 10px; display: block;
}
.ni-data-card h6 {
    font-size: 13px; font-weight: 700;
    color: var(--ni-dark); margin: 0 0 4px;
    font-family: var(--ni-font-body);
}
.ni-data-card p {
    font-size: 11.5px; color: var(--ni-text3);
    margin: 0; line-height: 1.5;
    font-family: var(--ni-font-body);
}

/* Rights Grid */
.ni-info-grid {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 14px; margin-top: 18px;
}
.ni-info-card {
    background: var(--ni-bg); border: 1px solid var(--ni-border);
    border-radius: 12px; padding: 16px 18px;
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

/* ── CTA ─────────────────────────────────────── */
.ni-pp-cta {
    background: var(--ni-dark); border-radius: 20px;
    padding: 48px 44px; text-align: center;
    position: relative; overflow: hidden; margin-top: 10px;
}
.ni-pp-cta::before {
    content: ''; position: absolute; inset: 0;
    background:
        radial-gradient(ellipse 50% 80% at 100% 50%, rgba(181,16,14,0.15) 0%, transparent 55%),
        radial-gradient(ellipse 40% 60% at 0% 50%, rgba(181,16,14,0.08) 0%, transparent 50%);
    pointer-events: none;
}
.ni-pp-cta::after {
    content: ''; position: absolute; inset: 0;
    background-image: radial-gradient(circle, rgba(181,16,14,0.08) 1px, transparent 1px);
    background-size: 28px 28px; pointer-events: none;
}
.ni-pp-cta .cta-inner { position: relative; z-index: 1; }
.ni-pp-cta h3 {
    font-family: var(--ni-font-head);
    font-size: 32px; font-weight: 400;
    color: var(--ni-white); margin: 0 0 10px; line-height: 1.2;
}
.ni-pp-cta h3 span { color: var(--ni-red); }
.ni-pp-cta p {
    font-family: var(--ni-font-body);
    font-size: 15px; color: rgba(255,255,255,0.6);
    max-width: 500px; margin: 0 auto 28px; line-height: 1.7;
}
.ni-pp-cta-btns { display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap; }

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
    background: var(--ni-red-dk); border-color: var(--ni-red-dk);
    color: var(--ni-white); transform: translateY(-2px);
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
    .ni-pp-sidebar { position: static; margin-bottom: 28px; }
    .ni-pp-strip-inner { grid-template-columns: repeat(2, 1fr); }
    .ni-pp-strip-item:nth-child(2) { border-right: none; }
    .ni-pp-hero-right { justify-content: flex-start; margin-top: 40px; }
}
@media (max-width: 767px) {
    .ni-pp-hero { padding: 60px 0 50px; }
    .ni-pp-section { padding: 24px 20px; }
    .ni-pp-cta { padding: 36px 24px; }
    .ni-pp-cta h3 { font-size: 26px; }
    .ni-info-grid, .ni-data-grid { grid-template-columns: 1fr; }
    .ni-cta-btn-primary, .ni-cta-btn-outline { width: 100%; justify-content: center; }
    .ni-pp-cta-btns { flex-direction: column; }
}
@media (max-width: 480px) {
    .ni-pp-strip-inner { grid-template-columns: 1fr; }
    .ni-pp-strip-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.15); }
    .ni-pp-strip-item:last-child { border-bottom: none; }
}
</style>
</head>
<body class="homepage4-body ni-pp-page">

<?php include 'include/header.php'; ?>

<!-- ══ HERO ══════════════════════════════════════ -->
<section class="ni-pp-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <nav class="ni-pp-breadcrumb" style="margin-top:20px;">
                    <a href="<?php echo $base_url; ?>">Home</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <span>Privacy Policy</span>
                </nav>
                <div class="ni-pp-hero-label">
                    <i class="fa-solid fa-shield-halved"></i>
                    Legal &amp; Policy
                </div>
                <h1>Privacy<br><span>Policy</span></h1>
                <p>We respect your privacy. This policy explains exactly what data we collect, why we collect it, and how we keep it safe — no jargon, no hidden clauses.</p>
                <div class="ni-pp-hero-pills">
                    <div class="pill"><i class="fa-solid fa-check"></i> Data Collection</div>
                    <div class="pill"><i class="fa-solid fa-check"></i> How We Use Data</div>
                    <div class="pill"><i class="fa-solid fa-check"></i> Your Rights</div>
                    <div class="pill"><i class="fa-solid fa-check"></i> Cookies Policy</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ni-pp-hero-right">
                    <div class="ni-pp-update-card">
                        <div class="uc-icon">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>
                        <h5>Last Updated</h5>
                        <p>This policy was last reviewed and updated on:</p>
                        <span class="uc-date">April 01, 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ STRIP ════════════════════════════════════ -->
<div class="ni-pp-strip">
    <div class="container-fluid px-0">
        <div class="ni-pp-strip-inner">
            <div class="ni-pp-strip-item">
                <div class="si-icon"><i class="fa-solid fa-user-lock"></i></div>
                <div class="si-text">
                    <h6>Your Data, Your Control</h6>
                    <p>You can request deletion anytime</p>
                </div>
            </div>
            <div class="ni-pp-strip-item">
                <div class="si-icon"><i class="fa-solid fa-ban"></i></div>
                <div class="si-text">
                    <h6>Never Sold</h6>
                    <p>We never sell your personal data</p>
                </div>
            </div>
            <div class="ni-pp-strip-item">
                <div class="si-icon"><i class="fa-solid fa-lock"></i></div>
                <div class="si-text">
                    <h6>Securely Stored</h6>
                    <p>Data protected with industry standards</p>
                </div>
            </div>
            <div class="ni-pp-strip-item">
                <div class="si-icon"><i class="fa-solid fa-cookie-bite"></i></div>
                <div class="si-text">
                    <h6>Minimal Cookies</h6>
                    <p>Only essential cookies are used</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ══ MAIN BODY ════════════════════════════════ -->
<section class="ni-pp-body">
    <div class="container">
        <div class="row g-4">

            <!-- SIDEBAR -->
            <div class="col-lg-3 d-none d-lg-block">
                <div class="ni-pp-sidebar">
                    <div class="ni-toc-card">
                        <div class="ni-toc-head">
                            <i class="fa-solid fa-list-ul"></i>
                            <h5>Table of Contents</h5>
                        </div>
                        <div class="ni-toc-list">
                            <a href="#pp1" class="active"><span class="tnum">01</span> Introduction</a>
                            <a href="#pp2"><span class="tnum">02</span> Data We Collect</a>
                            <a href="#pp3"><span class="tnum">03</span> How We Collect It</a>
                            <a href="#pp4"><span class="tnum">04</span> How We Use Data</a>
                            <a href="#pp5"><span class="tnum">05</span> Data Sharing</a>
                            <a href="#pp6"><span class="tnum">06</span> Data Storage & Security</a>
                            <a href="#pp7"><span class="tnum">07</span> Cookies Policy</a>
                            <a href="#pp8"><span class="tnum">08</span> Your Rights</a>
                            <a href="#pp9"><span class="tnum">09</span> Children's Privacy</a>
                            <a href="#pp10"><span class="tnum">10</span> Contact & Updates</a>
                        </div>
                    </div>
                    <div class="ni-contact-widget">
                        <div class="cw-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                        <h6>Privacy Concern?</h6>
                        <p>Reach out to us for any data-related queries or deletion requests.</p>
                        <a href="<?php echo $base_url; ?>contact-us">
                            <i class="fa-solid fa-arrow-right"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-lg-9">

                <!-- 01 Introduction -->
                <div class="ni-pp-section" id="pp1" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-pp-section-head">
                        <div class="ni-pp-section-icon"><i class="fa-solid fa-file-circle-info"></i></div>
                        <div>
                            <div class="ni-pp-sec-num">Section 01</div>
                            <h2 class="ni-pp-sec-title">Introduction</h2>
                        </div>
                    </div>
                    <div class="ni-pp-prose">
                        <p><strong>Niraj Industries</strong> is committed to protecting your privacy. This Privacy Policy explains how we collect, use, store, and safeguard your personal information when you visit our website (<strong><?php echo $base_url; ?></strong>) or interact with us to place orders for our products and services.</p>
                        <p>By using our website or submitting your personal information to us, you consent to the practices described in this policy. This policy applies to all customers, enquirers, and visitors, whether you are an individual or a business representative.</p>
                        <div class="ni-highlight">
                            <strong>Our Commitment:</strong> We only collect data that is necessary to serve you better. We do not collect unnecessary personal information, and we will never sell your data to any third party.
                        </div>
                    </div>
                </div>

                <!-- 02 Data We Collect -->
                <div class="ni-pp-section" id="pp2" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-pp-section-head">
                        <div class="ni-pp-section-icon"><i class="fa-solid fa-database"></i></div>
                        <div>
                            <div class="ni-pp-sec-num">Section 02</div>
                            <h2 class="ni-pp-sec-title">Data We Collect</h2>
                        </div>
                    </div>
                    <div class="ni-pp-prose">
                        <p>We may collect the following categories of personal information from you:</p>
                        <div class="ni-data-grid">
                            <div class="ni-data-card">
                                <i class="fa-solid fa-user"></i>
                                <h6>Identity Data</h6>
                                <p>Name, company name, designation</p>
                            </div>
                            <div class="ni-data-card">
                                <i class="fa-solid fa-address-book"></i>
                                <h6>Contact Data</h6>
                                <p>Phone, email, WhatsApp number</p>
                            </div>
                            <div class="ni-data-card">
                                <i class="fa-solid fa-location-dot"></i>
                                <h6>Address Data</h6>
                                <p>Delivery &amp; billing address</p>
                            </div>
                            <div class="ni-data-card">
                                <i class="fa-solid fa-file-invoice-dollar"></i>
                                <h6>Transaction Data</h6>
                                <p>Order details, payment info, invoices</p>
                            </div>
                            <div class="ni-data-card">
                                <i class="fa-solid fa-comments"></i>
                                <h6>Communication Data</h6>
                                <p>Enquiries, messages, feedback</p>
                            </div>
                            <div class="ni-data-card">
                                <i class="fa-solid fa-chart-line"></i>
                                <h6>Usage Data</h6>
                                <p>Pages visited, time spent (anonymous)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 03 How We Collect -->
                <div class="ni-pp-section" id="pp3" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-pp-section-head">
                        <div class="ni-pp-section-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <div>
                            <div class="ni-pp-sec-num">Section 03</div>
                            <h2 class="ni-pp-sec-title">How We Collect Your Data</h2>
                        </div>
                    </div>
                    <div class="ni-pp-prose">
                        <p>We collect personal information through the following channels:</p>
                        <ul class="ni-pp-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <span><strong>Website Forms:</strong> When you fill out our Contact Us, enquiry, or callback request forms on our website.</span>
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <span><strong>Order Placement:</strong> When you place an order directly through our website, via phone, WhatsApp, or through a sales representative.</span>
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <span><strong>WhatsApp / Phone:</strong> When you contact us directly for product enquiries, quotations, or order-related communication.</span>
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <span><strong>In-Person Visits:</strong> When you visit our office or warehouse and provide your details for business purposes.</span>
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <span><strong>Automatic Collection:</strong> Certain technical data such as IP address, browser type, and pages visited is collected automatically when you use our website via cookies and web analytics.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 04 How We Use Data -->
                <div class="ni-pp-section" id="pp4" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-pp-section-head">
                        <div class="ni-pp-section-icon"><i class="fa-solid fa-gears"></i></div>
                        <div>
                            <div class="ni-pp-sec-num">Section 04</div>
                            <h2 class="ni-pp-sec-title">How We Use Your Data</h2>
                        </div>
                    </div>
                    <div class="ni-pp-prose">
                        <p>Your personal data is used strictly for the following purposes:</p>
                        <ul class="ni-pp-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Order Processing:</strong> To process, confirm, and fulfil your product orders, and to send delivery and invoicing details.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Customer Communication:</strong> To respond to your enquiries, provide quotations, follow up on orders, and resolve any issues.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Business Records:</strong> To maintain accurate records of transactions, as required under Indian accounting and tax regulations (GST compliance).
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Service Improvement:</strong> To understand how our website is being used so we can improve its content and usability.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Marketing (Optional):</strong> With your consent, we may occasionally share product updates, offers, or new arrivals. You can opt out at any time.
                            </li>
                        </ul>
                        <div class="ni-highlight">
                            <strong>We will never:</strong> Use your data for any purpose not listed above, share it with unrelated third parties, or use it for automated decision-making that affects you.
                        </div>
                    </div>
                </div>

                <!-- 05 Data Sharing -->
                <div class="ni-pp-section" id="pp5" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-pp-section-head">
                        <div class="ni-pp-section-icon"><i class="fa-solid fa-share-nodes"></i></div>
                        <div>
                            <div class="ni-pp-sec-num">Section 05</div>
                            <h2 class="ni-pp-sec-title">Data Sharing</h2>
                        </div>
                    </div>
                    <div class="ni-pp-prose">
                        <p>We do not sell, rent, or trade your personal data. We may share your information only in the following limited circumstances:</p>
                        <ul class="ni-pp-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Logistics Partners:</strong> Your delivery address and contact number may be shared with courier or transport partners solely for the purpose of completing your delivery.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Payment Processors:</strong> When payments are made via digital channels, relevant data is processed by secure third-party payment gateways under their own privacy policies.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Legal Obligations:</strong> We may disclose your information if required to do so by law, government authority, or a court order under Indian law.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Business Transfer:</strong> In the unlikely event of a merger or acquisition, customer data may be transferred as part of business assets, subject to the same privacy protections.
                            </li>
                        </ul>
                        <div class="ni-highlight dark">
                            <strong>No Data Selling — Ever:</strong> We have never sold customer data, and we have no intention to do so. Your trust is fundamental to our business.
                        </div>
                    </div>
                </div>

                <!-- 06 Storage & Security -->
                <div class="ni-pp-section" id="pp6" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-pp-section-head">
                        <div class="ni-pp-section-icon"><i class="fa-solid fa-server"></i></div>
                        <div>
                            <div class="ni-pp-sec-num">Section 06</div>
                            <h2 class="ni-pp-sec-title">Data Storage &amp; Security</h2>
                        </div>
                    </div>
                    <div class="ni-pp-prose">
                        <p>We take appropriate technical and organisational measures to protect your personal data against unauthorised access, loss, or misuse:</p>
                        <ul class="ni-pp-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Our website uses <strong>SSL/TLS encryption</strong> to protect data transmitted between your browser and our server.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Access to customer data within our organisation is <strong>restricted to authorised personnel</strong> only on a need-to-know basis.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Personal data is stored on <strong>secure servers</strong> and backed up regularly to prevent loss.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                We retain your data only for as long as it is <strong>necessary for the purpose collected</strong>, or as required by law (e.g., GST records must be retained for a minimum of 6 years under Indian law).
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                In the event of a <strong>data breach</strong> that poses a risk to your rights, we will notify affected individuals as soon as reasonably practicable.
                            </li>
                        </ul>
                        <div class="ni-info-grid">
                            <div class="ni-info-card">
                                <i class="fa-solid fa-lock"></i>
                                <div>
                                    <h6>SSL Encrypted</h6>
                                    <p>All data in transit is encrypted</p>
                                </div>
                            </div>
                            <div class="ni-info-card">
                                <i class="fa-solid fa-clock-rotate-left"></i>
                                <div>
                                    <h6>Retention Period</h6>
                                    <p>Data kept only as long as required</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 07 Cookies -->
                <div class="ni-pp-section" id="pp7" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-pp-section-head">
                        <div class="ni-pp-section-icon"><i class="fa-solid fa-cookie-bite"></i></div>
                        <div>
                            <div class="ni-pp-sec-num">Section 07</div>
                            <h2 class="ni-pp-sec-title">Cookies Policy</h2>
                        </div>
                    </div>
                    <div class="ni-pp-prose">
                        <p>Our website uses cookies to improve your browsing experience. Here is what you need to know:</p>
                        <ul class="ni-pp-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Essential Cookies:</strong> Required for the website to function correctly (e.g., session management, form submissions). These cannot be disabled.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                <strong>Analytics Cookies:</strong> We use tools like Google Analytics to understand website traffic and user behaviour. This data is <strong>anonymised and aggregated</strong> — it is not linked to you personally.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                We do <strong>not</strong> use advertising or tracking cookies that follow you across other websites.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                You can <strong>disable cookies</strong> through your browser settings at any time. Note that disabling essential cookies may affect website functionality.
                            </li>
                        </ul>
                        <div class="ni-highlight">
                            <strong>No Tracking Ads:</strong> We do not use remarketing pixels or third-party advertising cookies. Our website does not serve ads, and we do not track your activity across the internet.
                        </div>
                    </div>
                </div>

                <!-- 08 Your Rights -->
                <div class="ni-pp-section" id="pp8" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-pp-section-head">
                        <div class="ni-pp-section-icon"><i class="fa-solid fa-hand-fist"></i></div>
                        <div>
                            <div class="ni-pp-sec-num">Section 08</div>
                            <h2 class="ni-pp-sec-title">Your Rights</h2>
                        </div>
                    </div>
                    <div class="ni-pp-prose">
                        <p>You have the following rights regarding your personal data held by us:</p>
                        <div class="ni-info-grid">
                            <div class="ni-info-card">
                                <i class="fa-solid fa-eye"></i>
                                <div>
                                    <h6>Right to Access</h6>
                                    <p>Request a copy of the data we hold about you</p>
                                </div>
                            </div>
                            <div class="ni-info-card">
                                <i class="fa-solid fa-pen"></i>
                                <div>
                                    <h6>Right to Correction</h6>
                                    <p>Ask us to correct inaccurate or incomplete data</p>
                                </div>
                            </div>
                            <div class="ni-info-card">
                                <i class="fa-solid fa-trash-can"></i>
                                <div>
                                    <h6>Right to Deletion</h6>
                                    <p>Request erasure of your personal data</p>
                                </div>
                            </div>
                            <div class="ni-info-card">
                                <i class="fa-solid fa-circle-stop"></i>
                                <div>
                                    <h6>Right to Object</h6>
                                    <p>Opt out of marketing communications at any time</p>
                                </div>
                            </div>
                        </div>
                        <div class="ni-highlight" style="margin-top:18px;">
                            To exercise any of these rights, please contact us via our <a href="<?php echo $base_url; ?>contact-us">Contact Us</a> page or email us directly. We will respond to all valid requests within <strong>30 days</strong>.
                        </div>
                    </div>
                </div>

                <!-- 09 Children -->
                <div class="ni-pp-section" id="pp9" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-pp-section-head">
                        <div class="ni-pp-section-icon"><i class="fa-solid fa-child-reaching"></i></div>
                        <div>
                            <div class="ni-pp-sec-num">Section 09</div>
                            <h2 class="ni-pp-sec-title">Children's Privacy</h2>
                        </div>
                    </div>
                    <div class="ni-pp-prose">
                        <p>Our website and services are intended for use by businesses and adults only. We do not knowingly collect personal data from individuals under the age of 18.</p>
                        <p>If we become aware that we have inadvertently collected data from a minor, we will take immediate steps to delete that information from our records. If you believe a minor has submitted information to us, please contact us immediately.</p>
                        <div class="ni-highlight dark">
                            <strong>B2B Focus:</strong> Niraj Industries is a business-to-business supplier. Our website is designed for procurement managers, contractors, and business owners — not for personal consumer or minor use.
                        </div>
                    </div>
                </div>

                <!-- 10 Contact & Updates -->
                <div class="ni-pp-section" id="pp10" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-pp-section-head">
                        <div class="ni-pp-section-icon"><i class="fa-solid fa-pen-to-square"></i></div>
                        <div>
                            <div class="ni-pp-sec-num">Section 10</div>
                            <h2 class="ni-pp-sec-title">Contact &amp; Policy Updates</h2>
                        </div>
                    </div>
                    <div class="ni-pp-prose">
                        <p>If you have any questions, concerns, or requests related to this Privacy Policy, please contact us:</p>
                        <ul class="ni-pp-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-globe"></i></span>
                                <span><strong>Online:</strong> Use our <a href="<?php echo $base_url; ?>contact-us" style="color:var(--ni-red-dk);font-weight:600;">Contact Us</a> page and mention "Privacy Request" in your message.</span>
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-location-dot"></i></span>
                                <span><strong>In Person:</strong> Visit our office in Nagpur, Maharashtra to speak with our team directly.</span>
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-arrows-rotate"></i></span>
                                <span><strong>Policy Updates:</strong> We may update this Privacy Policy from time to time. All changes will be posted on this page with a revised "Last Updated" date. Continued use of our website constitutes your acceptance of the updated policy.</span>
                            </li>
                        </ul>
                        <div class="ni-highlight dark">
                            <strong>Current Version:</strong> This Privacy Policy was last updated on <strong>April 01, 2025</strong>. Please visit this page periodically to stay informed of any changes.
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="ni-pp-cta" data-aos="fade-up" data-aos-duration="700">
                    <div class="cta-inner">
                        <h3>Questions About <span>Your Privacy?</span></h3>
                        <p>We believe transparency builds trust. If you have any data-related concerns, our team will respond promptly and honestly.</p>
                        <div class="ni-pp-cta-btns">
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

(function () {
    const sections = document.querySelectorAll('.ni-pp-section[id]');
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