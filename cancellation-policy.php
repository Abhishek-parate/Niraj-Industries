<?php
$base_url = "https://nirajindustry.com/";
include 'include/config.php';

$page_title       = "Cancellation & Refund Policy | Niraj Industries";
$meta_description = "Read Niraj Industries' cancellation and refund policy for orders, products, and deliveries. Transparent, fair, and customer-friendly terms.";
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
   NIRAJ INDUSTRIES — CANCELLATION POLICY PAGE
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

.ni-cp-section {
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

.ni-cp-page {
    font-family: var(--ni-font-body);
    background: var(--ni-white);
    color: var(--ni-text);
}

/* ── HERO BANNER ─────────────────────────────── */
.ni-cp-hero {
    background: var(--ni-dark);
    position: relative;
    overflow: hidden;
    padding: 80px 0 70px;
}
.ni-cp-hero::before {
    content: '';
    position: absolute; inset: 0;
    background:
        radial-gradient(ellipse 60% 80% at 90% 50%, rgba(181,16,14,0.15) 0%, transparent 60%),
        radial-gradient(ellipse 40% 60% at 10% 80%, rgba(181,16,14,0.07) 0%, transparent 50%);
    pointer-events: none;
}
.ni-cp-hero::after {
    content: '';
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(181,16,14,0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(181,16,14,0.05) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
}
.ni-cp-hero .container { position: relative; z-index: 2; }

.ni-cp-breadcrumb {
    display: flex; align-items: center; gap: 8px;
    font-size: 12.5px; color: rgba(255,255,255,0.45);
    margin-bottom: 28px;
    font-family: var(--ni-font-body);
}
.ni-cp-breadcrumb a { color: rgba(255,255,255,0.45); text-decoration: none; transition: color 0.2s; }
.ni-cp-breadcrumb a:hover { color: var(--ni-red); }
.ni-cp-breadcrumb i { font-size: 9px; }
.ni-cp-breadcrumb span { color: var(--ni-red); }

.ni-cp-hero-label {
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

.ni-cp-hero h1 {
    font-family: var(--ni-font-head);
    font-size: clamp(32px, 4.5vw, 52px);
    font-weight: 400; color: var(--ni-white);
    line-height: 1.1; letter-spacing: -0.5px;
    margin: 0 0 16px;
}
.ni-cp-hero h1 span { color: var(--ni-red); }
.ni-cp-hero p {
    font-family: var(--ni-font-body);
    font-size: 15px; color: rgba(255,255,255,0.6);
    line-height: 1.8; max-width: 520px;
    margin: 0 0 32px;
}

.ni-cp-hero-pills { display: flex; flex-wrap: wrap; gap: 10px; }
.ni-cp-hero-pills .pill {
    display: inline-flex; align-items: center; gap: 7px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    color: rgba(255,255,255,0.8);
    font-size: 12px; font-weight: 600;
    padding: 8px 16px; border-radius: 30px;
    font-family: var(--ni-font-body);
}
.ni-cp-hero-pills .pill i { color: var(--ni-red); }

.ni-cp-hero-right { display: flex; align-items: center; justify-content: flex-end; height: 100%; }
.ni-cp-update-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(181,16,14,0.25);
    border-radius: 20px; padding: 28px;
    text-align: center; min-width: 220px;
}
.ni-cp-update-card .uc-icon {
    width: 60px; height: 60px;
    background: rgba(181,16,14,0.12);
    border: 1.5px solid rgba(181,16,14,0.3);
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 16px;
}
.ni-cp-update-card .uc-icon i { font-size: 24px; color: #f87171; }
.ni-cp-update-card h5 {
    font-size: 13px; font-weight: 700;
    color: rgba(255,255,255,0.9); margin: 0 0 6px;
    font-family: var(--ni-font-body);
}
.ni-cp-update-card p {
    font-size: 12px; color: rgba(255,255,255,0.45);
    margin: 0 0 16px;
    font-family: var(--ni-font-body);
}
.ni-cp-update-card .uc-date {
    display: inline-block;
    background: var(--ni-red); color: var(--ni-white);
    font-size: 12px; font-weight: 700;
    padding: 5px 16px; border-radius: 20px;
    font-family: var(--ni-font-body);
}

/* ── QUICK SUMMARY STRIP ─────────────────────── */
.ni-cp-strip { background: var(--ni-red); padding: 0; }
.ni-cp-strip-inner { display: grid; grid-template-columns: repeat(4, 1fr); }
.ni-cp-strip-item {
    display: flex; align-items: center; gap: 14px;
    padding: 20px 24px;
    border-right: 1px solid rgba(255,255,255,0.15);
}
.ni-cp-strip-item:last-child { border-right: none; }
.ni-cp-strip-item .si-icon {
    width: 44px; height: 44px;
    background: rgba(255,255,255,0.12);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
}
.ni-cp-strip-item .si-icon i { font-size: 18px; color: var(--ni-white); }
.ni-cp-strip-item .si-text h6 {
    font-size: 13px; font-weight: 700;
    color: var(--ni-white); margin: 0 0 2px;
    font-family: var(--ni-font-body);
}
.ni-cp-strip-item .si-text p {
    font-size: 11.5px; color: rgba(255,255,255,0.7);
    margin: 0; line-height: 1.4;
    font-family: var(--ni-font-body);
}

/* ── MAIN LAYOUT ─────────────────────────────── */
.ni-cp-body { padding: 60px 0 90px; background: var(--ni-bg); }
.ni-cp-sidebar { position: sticky; top: 90px; }

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
.ni-toc-list a:hover,
.ni-toc-list a.active {
    color: var(--ni-dark);
    background: var(--ni-red-soft);
    border-left-color: var(--ni-red);
}
.ni-toc-list a:hover .tnum,
.ni-toc-list a.active .tnum {
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
.ni-cp-section {
    background: var(--ni-white);
    border-radius: 16px; border: 1px solid var(--ni-border);
    padding: 32px 36px; margin-bottom: 20px;
    scroll-margin-top: 100px;
    box-shadow: var(--ni-shadow);
    transition: box-shadow 0.2s;
}
.ni-cp-section:hover { box-shadow: var(--ni-shadow-md); }

.ni-cp-section-head {
    display: flex; align-items: flex-start; gap: 16px;
    padding-bottom: 20px; margin-bottom: 22px;
    border-bottom: 2px solid var(--ni-border);
}
.ni-cp-section-icon {
    width: 50px; height: 50px;
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; flex-shrink: 0;
    background: var(--ni-red-soft);
    border: 1.5px solid rgba(181,16,14,0.2);
    color: var(--ni-red);
}
.ni-cp-sec-num {
    font-size: 10.5px; font-weight: 700;
    letter-spacing: 2px; text-transform: uppercase;
    color: var(--ni-red); margin-bottom: 3px;
    font-family: var(--ni-font-body);
}
.ni-cp-sec-title {
    font-family: var(--ni-font-head);
    font-size: 22px; font-weight: 400;
    color: var(--ni-dark); margin: 0; line-height: 1.2;
}

.ni-cp-prose {
    font-family: var(--ni-font-body);
    font-size: 14.5px; color: var(--ni-text2); line-height: 1.85;
}
.ni-cp-prose p + p { margin-top: 12px; }

/* List */
.ni-cp-list { list-style: none; padding: 0; margin: 16px 0 0; }
.ni-cp-list li {
    display: flex; align-items: flex-start; gap: 12px;
    padding: 12px 0; border-bottom: 1px solid var(--ni-border);
    font-size: 14px; color: var(--ni-text2); line-height: 1.7;
    font-family: var(--ni-font-body);
}
.ni-cp-list li:last-child { border-bottom: none; }
.ni-cp-list li .li-dot {
    width: 22px; height: 22px; border-radius: 50%;
    background: var(--ni-red-soft);
    border: 1.5px solid rgba(181,16,14,0.2);
    color: var(--ni-red); font-size: 9px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0; margin-top: 2px;
}

/* Highlight boxes */
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

/* Timeline */
.ni-timeline {
    position: relative;
    padding-left: 30px;
    margin-top: 22px;
}
.ni-timeline::before {
    content: '';
    position: absolute;
    left: 10px; top: 8px; bottom: 8px;
    width: 2px;
    background: linear-gradient(180deg, #22c55e, var(--ni-red), #ef4444);
    border-radius: 2px;
}
.ni-tl-item {
    position: relative;
    padding: 0 0 28px 26px;
}
.ni-tl-item:last-child { padding-bottom: 0; }
.ni-tl-dot {
    position: absolute;
    left: -30px; top: 4px;
    width: 22px; height: 22px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 9px;
    border: 2px solid var(--ni-white);
}
.ni-tl-dot.green { background: #22c55e; color: #fff; box-shadow: 0 0 0 2px #22c55e; }
.ni-tl-dot.yellow { background: var(--ni-red); color: var(--ni-white); box-shadow: 0 0 0 2px var(--ni-red); }
.ni-tl-dot.red { background: #ef4444; color: #fff; box-shadow: 0 0 0 2px #ef4444; }
.ni-tl-label {
    font-size: 12px; font-weight: 700;
    letter-spacing: 0.5px; text-transform: uppercase;
    margin-bottom: 5px;
    font-family: var(--ni-font-body);
}
.ni-tl-label.green { color: #16a34a; }
.ni-tl-label.yellow { color: var(--ni-red-dk); }
.ni-tl-label.red { color: #dc2626; }
.ni-tl-text {
    font-size: 13.5px; color: var(--ni-text2); line-height: 1.65;
    font-family: var(--ni-font-body);
}

/* Refund Table */
.ni-refund-table {
    width: 100%;
    border-collapse: separate; border-spacing: 0;
    border-radius: 14px; overflow: hidden;
    border: 1px solid var(--ni-border);
    margin-top: 20px; font-size: 13.5px;
    font-family: var(--ni-font-body);
}
.ni-refund-table thead tr { background: var(--ni-dark); }
.ni-refund-table thead th {
    padding: 14px 18px; color: var(--ni-white);
    font-weight: 700; font-size: 12.5px;
    text-align: left; letter-spacing: 0.3px;
    font-family: var(--ni-font-body);
}
.ni-refund-table tbody tr {
    border-bottom: 1px solid var(--ni-border);
    transition: background 0.15s;
}
.ni-refund-table tbody tr:nth-child(even) { background: var(--ni-bg); }
.ni-refund-table tbody tr:hover { background: var(--ni-red-soft); }
.ni-refund-table tbody tr:last-child { border-bottom: none; }
.ni-refund-table td {
    padding: 13px 18px; color: var(--ni-text2);
    vertical-align: middle;
    font-family: var(--ni-font-body);
}
.ni-refund-table td:first-child { font-weight: 600; color: var(--ni-dark); }

.ni-badge {
    display: inline-block;
    font-size: 11px; font-weight: 700;
    padding: 4px 12px; border-radius: 20px;
    letter-spacing: 0.3px;
    font-family: var(--ni-font-body);
}
.ni-badge.full  { background: #dcfce7; color: #15803d; }
.ni-badge.partial { background: var(--ni-red-soft); color: var(--ni-red-dk); border: 1px solid rgba(181,16,14,0.2); }
.ni-badge.none  { background: #fee2e2; color: #b91c1c; }
.ni-badge.adj   { background: var(--ni-bg); color: var(--ni-text3); border: 1px solid var(--ni-border); }

/* Info Grid */
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

/* ── BOTTOM CTA BANNER ───────────────────────── */
.ni-cp-cta {
    background: var(--ni-dark); border-radius: 20px;
    padding: 48px 44px; text-align: center;
    position: relative; overflow: hidden; margin-top: 10px;
}
.ni-cp-cta::before {
    content: ''; position: absolute; inset: 0;
    background:
        radial-gradient(ellipse 50% 80% at 100% 50%, rgba(181,16,14,0.15) 0%, transparent 55%),
        radial-gradient(ellipse 40% 60% at 0% 50%, rgba(181,16,14,0.08) 0%, transparent 50%);
    pointer-events: none;
}
.ni-cp-cta::after {
    content: ''; position: absolute; inset: 0;
    background-image: radial-gradient(circle, rgba(181,16,14,0.08) 1px, transparent 1px);
    background-size: 28px 28px; pointer-events: none;
}
.ni-cp-cta .cta-inner { position: relative; z-index: 1; }
.ni-cp-cta h3 {
    font-family: var(--ni-font-head);
    font-size: 32px; font-weight: 400;
    color: var(--ni-white); margin: 0 0 10px; line-height: 1.2;
}
.ni-cp-cta h3 span { color: var(--ni-red); }
.ni-cp-cta p {
    font-family: var(--ni-font-body);
    font-size: 15px; color: rgba(255,255,255,0.6);
    max-width: 500px; margin: 0 auto 28px; line-height: 1.7;
}
.ni-cp-cta-btns { display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap; }

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
    .ni-cp-sidebar { position: static; margin-bottom: 28px; }
    .ni-cp-strip-inner { grid-template-columns: repeat(2, 1fr); }
    .ni-cp-strip-item:nth-child(2) { border-right: none; }
    .ni-cp-hero-right { justify-content: flex-start; margin-top: 40px; }
}
@media (max-width: 767px) {
    .ni-cp-hero { padding: 60px 0 50px; }
    .ni-cp-section { padding: 24px 20px; }
    .ni-cp-cta { padding: 36px 24px; }
    .ni-cp-cta h3 { font-size: 26px; }
    .ni-info-grid { grid-template-columns: 1fr; }
    .ni-refund-table { display: block; overflow-x: auto; white-space: nowrap; }
    .ni-cp-strip-inner { grid-template-columns: 1fr 1fr; }
    .ni-cta-btn-primary, .ni-cta-btn-outline { width: 100%; justify-content: center; }
    .ni-cp-cta-btns { flex-direction: column; }
}
@media (max-width: 480px) {
    .ni-cp-strip-inner { grid-template-columns: 1fr; }
    .ni-cp-strip-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.15); }
    .ni-cp-strip-item:last-child { border-bottom: none; }
}
</style>
</head>
<body class="homepage4-body ni-cp-page">

<?php include 'include/header.php'; ?>

<!-- ══ HERO BANNER ══════════════════════════════ -->
<section class="ni-cp-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <nav class="ni-cp-breadcrumb" style="margin-top:20px;">
                    <a href="<?php echo $base_url; ?>">Home</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <span>Cancellation &amp; Refund Policy</span>
                </nav>
                <div class="ni-cp-hero-label">
                    <i class="fa-solid fa-file-shield"></i>
                    Legal &amp; Policy
                </div>
                <h1>Cancellation &amp;<br><span>Refund Policy</span></h1>
                <p>We believe in complete transparency. Read our cancellation and refund terms for all orders placed with Niraj Industries — fair, clear, and no hidden clauses.</p>
                <div class="ni-cp-hero-pills">
                    <div class="pill"><i class="fa-solid fa-check"></i> Order Cancellation</div>
                    <div class="pill"><i class="fa-solid fa-check"></i> Refund Process</div>
                    <div class="pill"><i class="fa-solid fa-check"></i> Return Policy</div>
                    <div class="pill"><i class="fa-solid fa-check"></i> Dispute Resolution</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ni-cp-hero-right">
                    <div class="ni-cp-update-card">
                        <div class="uc-icon">
                            <i class="fa-solid fa-calendar-check"></i>
                        </div>
                        <h5>Last Updated</h5>
                        <p>This policy was last reviewed and updated on:</p>
                        <span class="uc-date">April 01, 2026</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ QUICK SUMMARY STRIP ══════════════════════ -->
<div class="ni-cp-strip">
    <div class="container-fluid px-0">
        <div class="ni-cp-strip-inner">
            <div class="ni-cp-strip-item">
                <div class="si-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                <div class="si-text">
                    <h6>Cancel Before Dispatch</h6>
                    <p>Full refund, no questions asked</p>
                </div>
            </div>
            <div class="ni-cp-strip-item">
                <div class="si-icon"><i class="fa-solid fa-rotate-left"></i></div>
                <div class="si-text">
                    <h6>7-Day Return Window</h6>
                    <p>For damaged or defective goods</p>
                </div>
            </div>
            <div class="ni-cp-strip-item">
                <div class="si-icon"><i class="fa-solid fa-indian-rupee-sign"></i></div>
                <div class="si-text">
                    <h6>Refund in 7–10 Days</h6>
                    <p>Processed to original payment</p>
                </div>
            </div>
            <div class="ni-cp-strip-item">
                <div class="si-icon"><i class="fa-solid fa-headset"></i></div>
                <div class="si-text">
                    <h6>Dedicated Support</h6>
                    <p>We resolve all disputes fairly</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ══ MAIN BODY ════════════════════════════════ -->
<section class="ni-cp-body">
    <div class="container">
        <div class="row g-4">

            <!-- ── SIDEBAR ── -->
            <div class="col-lg-3 d-none d-lg-block">
                <div class="ni-cp-sidebar">
                    <div class="ni-toc-card">
                        <div class="ni-toc-head">
                            <i class="fa-solid fa-list-ul"></i>
                            <h5>Table of Contents</h5>
                        </div>
                        <div class="ni-toc-list">
                            <a href="#cp1" class="active"><span class="tnum">01</span> Overview</a>
                            <a href="#cp2"><span class="tnum">02</span> Order Cancellation</a>
                            <a href="#cp3"><span class="tnum">03</span> Cancellation Timeline</a>
                            <a href="#cp4"><span class="tnum">04</span> Refund Policy</a>
                            <a href="#cp5"><span class="tnum">05</span> Return of Goods</a>
                            <a href="#cp6"><span class="tnum">06</span> Non-Refundable Cases</a>
                            <a href="#cp7"><span class="tnum">07</span> Bulk/Custom Orders</a>
                            <a href="#cp8"><span class="tnum">08</span> How to Raise a Request</a>
                        </div>
                    </div>
                    <div class="ni-contact-widget">
                        <div class="cw-icon"><i class="fa-solid fa-phone-volume"></i></div>
                        <h6>Need Help?</h6>
                        <p>Our team is happy to assist with any cancellation or refund queries.</p>
                        <a href="<?php echo $base_url; ?>contact-us">
                            <i class="fa-solid fa-arrow-right"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- ── CONTENT ── -->
            <div class="col-lg-9">

                <!-- Section 01 — Overview -->
                <div class="ni-cp-section" id="cp1" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-cp-section-head">
                        <div class="ni-cp-section-icon"><i class="fa-solid fa-file-circle-info"></i></div>
                        <div>
                            <div class="ni-cp-sec-num">Section 01</div>
                            <h2 class="ni-cp-sec-title">Overview of This Policy</h2>
                        </div>
                    </div>
                    <div class="ni-cp-prose">
                        <p>At <strong>Niraj Industries</strong>, we manufacture and supply high-quality PVC pipes, fittings, and related industrial products. We are committed to fair business practices and maintaining the highest level of customer satisfaction.</p>
                        <p>This Cancellation &amp; Refund Policy applies to all orders placed directly with Niraj Industries — whether placed through our website, sales representatives, or via phone/WhatsApp. By placing an order, you agree to the terms described in this policy.</p>
                        <div class="ni-highlight">
                            <strong>Our Promise:</strong> We do not believe in hiding behind complicated terms. If there is a genuine issue with your order, we will work with you to resolve it fairly and quickly. For any queries, reach us at <strong><?php echo $base_url; ?></strong> or through our Contact Us page.
                        </div>
                    </div>
                </div>

                <!-- Section 02 — Order Cancellation -->
                <div class="ni-cp-section" id="cp2" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-cp-section-head">
                        <div class="ni-cp-section-icon"><i class="fa-solid fa-ban"></i></div>
                        <div>
                            <div class="ni-cp-sec-num">Section 02</div>
                            <h2 class="ni-cp-sec-title">Order Cancellation Terms</h2>
                        </div>
                    </div>
                    <div class="ni-cp-prose">
                        <p>Customers may request cancellation of their order subject to the following conditions:</p>
                        <ul class="ni-cp-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Orders can be cancelled <strong>free of charge</strong> if the cancellation request is made before the order has been dispatched from our warehouse or manufacturing unit.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Cancellation requests must be submitted via our Contact Us page, email, or by calling our sales helpline. Please mention your <strong>Order ID</strong> and registered contact number.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Once an order has been dispatched, it cannot be cancelled. However, you may initiate a return request upon delivery as per our Return Policy (Section 05).
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                For orders that include custom cutting, special sizing, or made-to-order products, cancellation may not be possible once production has commenced. Please review Section 07 for details.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Upon successful cancellation, you will receive a confirmation message/email within <strong>24 business hours</strong>. Refund will be processed as per Section 04.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Section 03 — Cancellation Timeline -->
                <div class="ni-cp-section" id="cp3" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-cp-section-head">
                        <div class="ni-cp-section-icon"><i class="fa-solid fa-timeline"></i></div>
                        <div>
                            <div class="ni-cp-sec-num">Section 03</div>
                            <h2 class="ni-cp-sec-title">Cancellation Timeline</h2>
                        </div>
                    </div>
                    <div class="ni-cp-prose">
                        <p>The timing of your cancellation request determines your refund eligibility:</p>
                        <div class="ni-timeline">
                            <div class="ni-tl-item">
                                <div class="ni-tl-dot green"><i class="fa-solid fa-check"></i></div>
                                <div class="ni-tl-label green">Before Dispatch — Full Refund Eligible</div>
                                <div class="ni-tl-text">Order cancelled before it leaves our facility. Full refund will be processed within 7–10 working days to the original payment method. No deductions apply.</div>
                            </div>
                            <div class="ni-tl-item">
                                <div class="ni-tl-dot yellow"><i class="fa-solid fa-truck"></i></div>
                                <div class="ni-tl-label yellow">After Dispatch / In Transit — Return Required</div>
                                <div class="ni-tl-text">Order is already in transit. Cancellation is not possible at this stage. You may raise a return request on delivery. Return shipping costs may apply depending on the situation.</div>
                            </div>
                            <div class="ni-tl-item">
                                <div class="ni-tl-dot red"><i class="fa-solid fa-xmark"></i></div>
                                <div class="ni-tl-label red">After Delivery &amp; Use — No Cancellation</div>
                                <div class="ni-tl-text">Once goods have been delivered, accepted, and used/installed, cancellation is not applicable. Only warranty or defect claims can be raised thereafter.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 04 — Refund Policy -->
                <div class="ni-cp-section" id="cp4" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-cp-section-head">
                        <div class="ni-cp-section-icon"><i class="fa-solid fa-indian-rupee-sign"></i></div>
                        <div>
                            <div class="ni-cp-sec-num">Section 04</div>
                            <h2 class="ni-cp-sec-title">Refund Policy</h2>
                        </div>
                    </div>
                    <div class="ni-cp-prose">
                        <p>The following table outlines refund eligibility based on order type and situation:</p>
                        <table class="ni-refund-table">
                            <thead>
                                <tr>
                                    <th>Situation</th>
                                    <th>Refund Status</th>
                                    <th>Processing Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cancelled before dispatch</td>
                                    <td><span class="ni-badge full">Full Refund</span></td>
                                    <td>7–10 working days</td>
                                </tr>
                                <tr>
                                    <td>Wrong product delivered by us</td>
                                    <td><span class="ni-badge full">Full Refund / Replacement</span></td>
                                    <td>After pickup confirmation</td>
                                </tr>
                                <tr>
                                    <td>Damaged goods on delivery</td>
                                    <td><span class="ni-badge full">Full Refund / Replacement</span></td>
                                    <td>After verification</td>
                                </tr>
                                <tr>
                                    <td>Customer-initiated return (unused)</td>
                                    <td><span class="ni-badge partial">Partial Refund</span></td>
                                    <td>After return receipt &amp; inspection</td>
                                </tr>
                                <tr>
                                    <td>Custom / made-to-order products</td>
                                    <td><span class="ni-badge none">Non-Refundable</span></td>
                                    <td>—</td>
                                </tr>
                                <tr>
                                    <td>Order returned after 7 days</td>
                                    <td><span class="ni-badge none">Not Eligible</span></td>
                                    <td>—</td>
                                </tr>
                                <tr>
                                    <td>Advance payment (cancelled by us)</td>
                                    <td><span class="ni-badge full">Full Refund</span></td>
                                    <td>5–7 working days</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="ni-highlight" style="margin-top:20px;">
                            <strong>Refund Mode:</strong> All refunds are credited to the original payment method — NEFT/RTGS for bank transfers, original card for card payments, or original UPI ID. Cash refunds may be arranged for in-person transactions.
                        </div>
                    </div>
                </div>

                <!-- Section 05 — Return of Goods -->
                <div class="ni-cp-section" id="cp5" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-cp-section-head">
                        <div class="ni-cp-section-icon"><i class="fa-solid fa-box-open"></i></div>
                        <div>
                            <div class="ni-cp-sec-num">Section 05</div>
                            <h2 class="ni-cp-sec-title">Return of Goods</h2>
                        </div>
                    </div>
                    <div class="ni-cp-prose">
                        <p>Returns are accepted within <strong>7 days of delivery</strong> under the following conditions:</p>
                        <ul class="ni-cp-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                The product must be <strong>unused, uncut, and in original condition</strong> with the original packaging intact.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Returns for <strong>damaged or defective goods</strong> must be reported within 48 hours of delivery with photographic evidence shared via WhatsApp or email.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Goods that have been cut, welded, installed, or modified in any way are <strong>not eligible for return</strong>.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Return transportation arrangements and costs are the customer's responsibility unless the return is due to our error (wrong product/damaged delivery).
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                All returned goods will be inspected upon receipt at our warehouse before any refund or replacement is processed.
                            </li>
                        </ul>
                        <div class="ni-info-grid">
                            <div class="ni-info-card">
                                <i class="fa-solid fa-calendar-days"></i>
                                <div>
                                    <h6>Return Window</h6>
                                    <p>Within 7 days of delivery date</p>
                                </div>
                            </div>
                            <div class="ni-info-card">
                                <i class="fa-solid fa-camera"></i>
                                <div>
                                    <h6>Damage Claims</h6>
                                    <p>Report within 48 hours with photos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 06 — Non-Refundable -->
                <div class="ni-cp-section" id="cp6" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-cp-section-head">
                        <div class="ni-cp-section-icon"><i class="fa-solid fa-circle-xmark"></i></div>
                        <div>
                            <div class="ni-cp-sec-num">Section 06</div>
                            <h2 class="ni-cp-sec-title">Non-Refundable Cases</h2>
                        </div>
                    </div>
                    <div class="ni-cp-prose">
                        <p>The following situations are <strong>not eligible</strong> for cancellation, return, or refund:</p>
                        <ul class="ni-cp-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-xmark"></i></span>
                                Products that have been <strong>cut, installed, or modified</strong> after delivery.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-xmark"></i></span>
                                Orders for <strong>custom sizes, special colours, or made-to-order</strong> products once production has started.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-xmark"></i></span>
                                Damage caused due to <strong>improper installation, misuse, or storage</strong> by the customer.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-xmark"></i></span>
                                Returns initiated <strong>after 7 days</strong> from the delivery date without prior written approval from Niraj Industries.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-xmark"></i></span>
                                Goods damaged due to <strong>natural calamities, accidents, or third-party transportation</strong> not arranged by us.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-xmark"></i></span>
                                Delivery charges and handling fees once the order has been dispatched.
                            </li>
                        </ul>
                        <div class="ni-highlight dark">
                            <strong>Note:</strong> We inspect all returned goods thoroughly. If a returned product does not meet our return conditions, it will be sent back to the customer and no refund will be issued. We encourage you to contact us <em>before</em> returning any goods.
                        </div>
                    </div>
                </div>

                <!-- Section 07 — Bulk & Custom Orders -->
                <div class="ni-cp-section" id="cp7" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-cp-section-head">
                        <div class="ni-cp-section-icon"><i class="fa-solid fa-industry"></i></div>
                        <div>
                            <div class="ni-cp-sec-num">Section 07</div>
                            <h2 class="ni-cp-sec-title">Bulk &amp; Custom Orders</h2>
                        </div>
                    </div>
                    <div class="ni-cp-prose">
                        <p>Special terms apply for bulk purchases and custom-manufactured products:</p>
                        <ul class="ni-cp-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Bulk orders (above ₹50,000 value) require a confirmed Purchase Order or written agreement before production begins.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Advance payments for bulk orders are <strong>non-refundable once production has commenced</strong>, unless Niraj Industries is unable to fulfil the order.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Cancellation of bulk orders before production commencement may attract a <strong>processing fee of up to 10%</strong> of the order value.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Custom pipe sizes, special pressure ratings, or non-standard product specifications are made to order and are <strong>fully non-refundable</strong> once confirmed.
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-check"></i></span>
                                Partial cancellation of bulk orders is evaluated on a case-by-case basis. Contact our sales team to discuss your situation.
                            </li>
                        </ul>
                        <div class="ni-highlight">
                            <strong>Before Ordering Custom Products:</strong> We recommend confirming your specifications carefully before placing a custom or bulk order. Our team is happy to provide samples, technical data sheets, and consultations before final confirmation.
                        </div>
                    </div>
                </div>

                <!-- Section 08 — How to Raise a Request -->
                <div class="ni-cp-section" id="cp8" data-aos="fade-up" data-aos-duration="600">
                    <div class="ni-cp-section-head">
                        <div class="ni-cp-section-icon"><i class="fa-solid fa-list-check"></i></div>
                        <div>
                            <div class="ni-cp-sec-num">Section 08</div>
                            <h2 class="ni-cp-sec-title">How to Raise a Cancellation / Refund Request</h2>
                        </div>
                    </div>
                    <div class="ni-cp-prose">
                        <p>Raising a request is simple. Use any of the following channels:</p>
                        <ul class="ni-cp-list">
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-globe"></i></span>
                                <span><strong>Online:</strong> Visit our <a href="<?php echo $base_url; ?>contact-us" style="color:var(--ni-red-dk); font-weight:600;">Contact Us</a> page and fill in the enquiry form with your Order ID, issue description, and contact details.</span>
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-brands fa-whatsapp"></i></span>
                                <span><strong>WhatsApp:</strong> Send your order details and issue to our business WhatsApp number. Include a photo if reporting a damaged or wrong product.</span>
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-envelope"></i></span>
                                <span><strong>Email:</strong> Write to us with your Order ID, issue description, and any supporting photos. Our team will respond within 24 business hours.</span>
                            </li>
                            <li>
                                <span class="li-dot"><i class="fa-solid fa-location-dot"></i></span>
                                <span><strong>In Person:</strong> You may also visit our office in Nagpur to raise a request directly with our sales or support team.</span>
                            </li>
                        </ul>
                        <div class="ni-info-grid">
                            <div class="ni-info-card">
                                <i class="fa-solid fa-clock"></i>
                                <div>
                                    <h6>Response Time</h6>
                                    <p>Within 24 business hours of request</p>
                                </div>
                            </div>
                            <div class="ni-info-card">
                                <i class="fa-solid fa-rotate"></i>
                                <div>
                                    <h6>Refund Processing</h6>
                                    <p>7–10 working days after approval</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Banner -->
                <div class="ni-cp-cta" data-aos="fade-up" data-aos-duration="700">
                    <div class="cta-inner">
                        <h3>Still Have <span>Questions?</span></h3>
                        <p>Our team is always available to help you with any concerns about your order, cancellation, or refund. Reach out — we'll sort it out for you.</p>
                        <div class="ni-cp-cta-btns">
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

(function () {
    const sections = document.querySelectorAll('.ni-cp-section[id]');
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