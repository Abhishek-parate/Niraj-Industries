<?php
$base_url = "https://nirajindustry.com/";
include 'include/config.php';

if (isset($_GET['slug'])) {
    $slug = $conn->real_escape_string(trim($_GET['slug']));
    $result = $conn->query(
        "SELECT * FROM products WHERE slug='$slug' AND is_active=1 LIMIT 1"
    );
} elseif (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $result = $conn->query(
        "SELECT * FROM products WHERE id=$id AND is_active=1 LIMIT 1"
    );
} else {
    header("Location: {$base_url}products.php"); exit;
}

$product = $result ? $result->fetch_assoc() : null;
if (!$product) { 
    header("Location: {$base_url}products.php"); exit; 
}

$cat = $conn->real_escape_string($product['category']);
$related_result = $conn->query("SELECT * FROM products WHERE category = '$cat' AND id != {$product['id']} AND is_active = 1 ORDER BY sort_order ASC LIMIT 6");
$related_products = [];
while ($row = $related_result->fetch_assoc()) { $related_products[] = $row; }

$specs = [];
if (!empty($product['specifications'])) {
    foreach (explode("\n", $product['specifications']) as $spec) {
        $parts = explode(':', $spec, 2);
        if (count($parts) === 2 && trim($parts[0]) !== '') {
            $specs[trim($parts[0])] = trim($parts[1]);
        }
    }
}
$features = [];
if (!empty($product['features'])) {
    $raw = str_replace('|', "\n", $product['features']);
    $features = array_values(array_filter(array_map('trim', explode("\n", $raw))));
}
$applications = [];
if (!empty($product['applications'])) {
    $raw = str_replace('|', "\n", $product['applications']);
    $applications = array_values(array_filter(array_map('trim', explode("\n", $raw))));
}
$certifications = !empty($product['certifications']) ? array_values(array_filter(array_map('trim', explode("|", $product['certifications'])))) : [];
if (empty($certifications) && !empty($product['certifications'])) {
    $certifications = array_values(array_filter(array_map('trim', explode("\n", $product['certifications']))));
}

$gallery = [];
foreach (['image','image2','image3','image4'] as $imgKey) {
    if (!empty($product[$imgKey])) {
        $gallery[] = $base_url . ltrim($product[$imgKey], '/');
    }
}
if (empty($gallery)) $gallery[] = $base_url . 'assets/img/placeholder.png';

$rating  = floatval($product['rating'] ?? 0);
$reviews = intval($product['reviews'] ?? 0);

function renderStars($rating, $size = 'md') {
    $html = '<div class="ni-stars ni-stars--' . $size . '">';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= floor($rating)) $html .= '<i class="fa-solid fa-star"></i>';
        elseif ($i - $rating < 1 && $i - $rating > 0) $html .= '<i class="fa-solid fa-star-half-stroke"></i>';
        else $html .= '<i class="fa-regular fa-star"></i>';
    }
    $html .= '</div>';
    return $html;
}

$badge_colors = [
    'new'        => '#B51009',
    'hot'        => '#8a0c07',
    'bestseller' => '#464447',
    'sale'       => '#16a34a',
    'featured'   => '#5e5b60',
];
$badge_bg = $badge_colors[$product['badge_type'] ?? ''] ?? '#464447';

$page_title = htmlspecialchars($product['name']) . " — Niraj Industries";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $page_title ?></title>
<meta name="description" content="<?= htmlspecialchars(substr($product['meta_description'] ?: $product['description'] ?: '', 0, 160)) ?>">
<?php if (!empty($product['canonical_url'])): ?>
<link rel="canonical" href="<?= htmlspecialchars($product['canonical_url']) ?>">
<?php endif; ?>

<link rel="stylesheet" href="<?= $base_url ?>assets/css/plugins/bootstrap.min.css">
<link rel="stylesheet" href="<?= $base_url ?>assets/css/plugins/fontawesome.css">
<link rel="stylesheet" href="<?= $base_url ?>assets/css/plugins/sidebar.css">
<link rel="stylesheet" href="<?= $base_url ?>assets/css/main.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Barlow+Condensed:wght@500;600;700;800&display=swap" rel="stylesheet">
<script src="<?= $base_url ?>assets/js/plugins/jquery-3-6-0.min.js"></script>

<style>
/* ================================================================
   NIRAJ INDUSTRIES — PRODUCT DETAIL PAGE
   Red #B51009 + Dark Grey #464447 Theme
   ================================================================ */

/* ══ MOBILE SIDEBAR FIX ══ */
.mobile-sidebar {
  position: fixed; top: 0; left: -320px;
  width: 300px; height: 100vh; overflow-y: auto;
  z-index: 99999; transition: left 0.3s ease; background: #fff;
}
.mobile-sidebar.active { left: 0; }
.mobile-sidebar-overlay { display: none; }
.mobile-sidebar-overlay.active { display: block; }

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }

body {
  background: #FFFFFF !important;
  color: #1a1a2e;
  font-family: 'Manrope', sans-serif;
  font-size: 14px;
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
}

a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }
button { font-family: 'Manrope', sans-serif; cursor: pointer; }

::-webkit-scrollbar { width: 6px; }
::-webkit-scrollbar-track { background: #f0f0f0; }
::-webkit-scrollbar-thumb { background: #ccc; border-radius: 3px; }
::-webkit-scrollbar-thumb:hover { background: #B51009 !important; }

.container-ni { max-width: 1340px; margin: 0 auto; padding: 0 24px; }

/* ══ BREADCRUMB ══ */
.ni-breadcrumb {
  background: #FFFFFF !important;
  border-bottom: 1px solid #E8E8E8;
  padding: 10px 0;
}
.ni-bc-inner {
  display: flex; align-items: center; gap: 6px;
  font-size: 12.5px; color: #777; flex-wrap: wrap;
}
.ni-bc-inner a { color: #777; transition: color .18s; }
.ni-bc-inner a:hover { color: #8a0c07 !important; }
.ni-bc-inner .sep { color: #aaa; font-size: 9px; }
.ni-bc-inner .cur { color: #1a1a2e; font-weight: 600; }

/* ══ MAIN SECTION ══ */
.ni-main-section { background: #FFFFFF !important; padding: 0 0 40px; }

.ni-product-layout {
  display: grid;
  grid-template-columns: 440px 1fr 320px;
  gap: 0; align-items: start;
}

/* ── GALLERY COL ── */
.ni-gallery-col {
  position: sticky; top: 72px;
  padding: 24px 20px 24px 0; align-self: start;
}

.ni-main-img-wrap {
  position: relative;
  background: #F7F8FA;
  border: 1px solid #E8E8E8;
  border-radius: 12px; overflow: hidden;
  aspect-ratio: 1 / 1;
  display: flex; align-items: center; justify-content: center;
  cursor: zoom-in; transition: border-color .25s; margin-bottom: 12px;
}
.ni-main-img-wrap:hover { border-color: #B51009 !important; }
.ni-main-img-wrap img {
  max-width: 80%; max-height: 80%;
  object-fit: contain; transition: transform .4s ease;
}
.ni-main-img-wrap:hover img { transform: scale(1.05); }

.ni-badge-pos { position: absolute; top: 12px; left: 12px; z-index: 5; }
.ni-badge {
  display: inline-block; padding: 4px 12px; border-radius: 4px;
  font-size: 10px; font-weight: 700; letter-spacing: 1.2px;
  text-transform: uppercase; font-family: 'Barlow Condensed', sans-serif; color: #fff;
}

.ni-zoom-hint {
  position: absolute; bottom: 10px; right: 10px;
  background: rgba(0,0,0,0.45); color: #fff; font-size: 10.5px;
  padding: 4px 10px; border-radius: 20px;
  display: flex; align-items: center; gap: 5px;
  z-index: 5; pointer-events: none;
}

.ni-thumbs { display: flex; gap: 8px; flex-wrap: wrap; margin-top: 12px; }
.ni-thumb {
  width: 72px; height: 72px; border-radius: 5px;
  border: 2px solid #E8E8E8; background: #F7F8FA;
  display: flex; align-items: center; justify-content: center;
  cursor: pointer; overflow: hidden; transition: all 0.2s ease; flex-shrink: 0;
}
.ni-thumb img { width: 86%; height: 86%; object-fit: contain; }
.ni-thumb:hover, .ni-thumb.active {
  border-color: #B51009 !important;
  box-shadow: 0 0 0 2px rgba(181,16,9,0.25) !important;
}

.ni-share-row {
  display: flex; align-items: center; gap: 8px;
  margin-top: 14px; padding-top: 12px;
  border-top: 1px solid #E8E8E8; flex-wrap: wrap;
}
.ni-share-label { font-size: 11.5px; color: #777; font-weight: 600; }
.ni-share-ico {
  width: 32px; height: 32px; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-size: 13px; color: #fff; text-decoration: none; transition: all 0.2s ease;
}
.ni-share-ico:hover { transform: translateY(-2px); color: #fff; }
.ni-share-ico.wa { background: #25D366; }
.ni-share-ico.fb { background: #1877F2; }
.ni-share-ico.li { background: #0A66C2; }
.ni-copy-btn {
  width: 32px; height: 32px; border-radius: 50%;
  border: 1.5px solid #D0D0D0; background: transparent;
  color: #777; font-size: 12px;
  display: flex; align-items: center; justify-content: center;
  cursor: pointer; transition: all 0.2s ease;
}
.ni-copy-btn:hover { border-color: #B51009 !important; color: #8a0c07 !important; }

/* ── INFO COL ── */
.ni-info-col {
  padding: 24px 28px;
  border-left: 1px solid #E8E8E8;
  border-right: 1px solid #E8E8E8;
  min-width: 0;
}

.ni-cat-pill {
  display: inline-flex; align-items: center; gap: 5px;
  background: #fdf2f2 !important;
  border: 1px solid #f5c0bc !important;
  color: #8a0c07 !important;
  font-size: 10.5px; font-weight: 700; letter-spacing: 1.5px;
  text-transform: uppercase; padding: 4px 12px; border-radius: 4px;
  margin-bottom: 10px; font-family: 'Barlow Condensed', sans-serif;
  transition: all 0.2s ease;
}
.ni-cat-pill:hover { background: #f5c0bc !important; color: #8a0c07 !important; }

.ni-product-title {
  font-family: 'Barlow Condensed', sans-serif;
  font-size: 30px; font-weight: 700; color: #1a1a2e;
  line-height: 1.2; margin-bottom: 12px; letter-spacing: .3px;
}

.ni-rating-row {
  display: flex; align-items: center; gap: 10px;
  margin-bottom: 12px; flex-wrap: wrap;
}
.ni-stars { display: flex; gap: 2px; color: #B51009 !important; }
.ni-stars--sm i { font-size: 11px; }
.ni-stars--md i { font-size: 13px; }
.ni-stars--lg i { font-size: 15px; }

.ni-rating-chip {
  background: #B51009 !important;
  color: #fff !important;
  font-size: 12.5px; font-weight: 800;
  padding: 2px 9px; border-radius: 4px;
}
.ni-review-link {
  font-size: 12.5px; color: #464447 !important;
  text-decoration: underline; cursor: pointer; transition: color .18s;
}
.ni-review-link:hover { color: #8a0c07 !important; }
.ni-sku-text {
  margin-left: auto; font-size: 11.5px; color: #aaa;
  font-family: 'Courier New', monospace;
}

.ni-divider { height: 1px; background: #E8E8E8; margin: 14px 0; }

.ni-short-desc { font-size: 14px; color: #444; line-height: 1.8; margin-bottom: 18px; }

/* Quick Spec Chips */
.ni-chips-grid {
  display: grid; grid-template-columns: repeat(2, 1fr);
  gap: 9px; margin-bottom: 18px;
}
.ni-chip {
  display: flex; align-items: center; gap: 10px;
  background: #F7F8FA; border: 1px solid #E8E8E8;
  border-radius: 5px; padding: 10px 12px; transition: all 0.2s ease;
}
.ni-chip:hover { border-color: #f5c0bc !important; background: #fff8f8 !important; }
.ni-chip-icon {
  width: 32px; height: 32px;
  background: #fdf2f2 !important;
  border-radius: 6px; display: flex; align-items: center; justify-content: center;
  color: #8a0c07 !important; font-size: 13px; flex-shrink: 0;
}
.ni-chip-label { font-size: 10px; text-transform: uppercase; letter-spacing: 1px; color: #aaa; margin-bottom: 2px; }
.ni-chip-val { font-size: 13px; color: #1a1a2e; font-weight: 700; }

/* Availability */
.ni-avail-row {
  display: flex; align-items: center; gap: 14px;
  padding: 12px 14px; background: #F0FDF4;
  border: 1px solid #BBF7D0; border-radius: 5px;
  margin-bottom: 16px; flex-wrap: wrap;
}
.ni-avail-row.out { background: #FEF2F2; border-color: #FECACA; }
.ni-stock-dot {
  width: 9px; height: 9px; border-radius: 50%;
  background: #16a34a; box-shadow: 0 0 0 3px rgba(22,163,74,0.2);
  flex-shrink: 0; animation: pulseDot 2s infinite;
}
.ni-avail-row.out .ni-stock-dot { background: #dc2626; box-shadow: 0 0 0 3px rgba(220,38,38,0.2); animation: none; }
@keyframes pulseDot {
  0%, 100% { box-shadow: 0 0 0 3px rgba(22,163,74,0.2); }
  50%       { box-shadow: 0 0 0 6px rgba(22,163,74,0.08); }
}
.ni-stock-label { font-size: 13.5px; color: #16a34a; font-weight: 700; }
.ni-avail-row.out .ni-stock-label { color: #dc2626; }
.ni-avail-text { font-size: 12px; color: #777; }
.ni-moq-pill {
  margin-left: auto;
  background: #fdf2f2 !important;
  border: 1px solid #f5c0bc !important;
  color: #8a0c07 !important;
  font-size: 12px; font-weight: 700;
  padding: 3px 10px; border-radius: 4px; white-space: nowrap;
}

/* CTA Buttons */
.ni-cta-row { display: flex; gap: 10px; margin-bottom: 16px; flex-wrap: wrap; }
.ni-btn {
  display: inline-flex; align-items: center; justify-content: center; gap: 8px;
  font-family: 'Barlow Condensed', sans-serif; font-weight: 700; font-size: 15px;
  letter-spacing: .3px; padding: 13px 22px; border-radius: 5px;
  border: none; cursor: pointer; transition: all 0.2s ease;
  text-decoration: none; white-space: nowrap;
}
.ni-btn-primary {
  flex: 1;
  background: #B51009 !important;
  color: #fff !important;
  min-width: 160px;
  box-shadow: 0 2px 0 #8a0c07 !important;
}
.ni-btn-primary:hover {
  background: #8a0c07 !important;
  color: #fff !important;
  transform: translateY(-1px);
  box-shadow: 0 4px 14px rgba(181,16,9,0.35) !important;
}
.ni-btn-secondary {
  flex: 1;
  background: #464447 !important;
  color: #fff !important;
  min-width: 140px;
  box-shadow: 0 2px 0 #2e2c2f !important;
}
.ni-btn-secondary:hover {
  background: #5e5b60 !important;
  color: #fff !important;
  transform: translateY(-1px);
}
.ni-btn-outline {
  background: transparent !important;
  color: #1a1a2e !important;
  border: 1.5px solid #D0D0D0 !important;
  padding: 12px 18px;
}
.ni-btn-outline:hover {
  border-color: #B51009 !important;
  color: #8a0c07 !important;
  transform: translateY(-1px);
}
.ni-btn-wa { background: #25D366 !important; color: #fff !important; padding: 13px 16px; }
.ni-btn-wa:hover { background: #1da851 !important; color: #fff !important; transform: translateY(-1px); }

/* Trust Strip */
.ni-trust-strip {
  display: grid; grid-template-columns: repeat(4, 1fr); gap: 0;
  border: 1px solid #E8E8E8; border-radius: 8px;
  overflow: hidden; margin-bottom: 18px;
}
.ni-trust-item {
  display: flex; flex-direction: column; align-items: center; gap: 4px;
  padding: 12px 8px; text-align: center;
  border-right: 1px solid #E8E8E8; background: #FFFFFF;
  transition: background .18s;
}
.ni-trust-item:last-child { border-right: none; }
.ni-trust-item:hover { background: #fff8f8 !important; }
.ni-trust-item i { color: #8a0c07 !important; font-size: 16px; }
.ni-trust-item strong { font-size: 11.5px; color: #1a1a2e; display: block; font-weight: 700; }
.ni-trust-item span { font-size: 10px; color: #777; line-height: 1.3; }

/* Tags */
.ni-tags { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 14px; }
.ni-tag {
  display: inline-flex; align-items: center;
  background: #F7F8FA; border: 1px solid #E8E8E8;
  color: #777; font-size: 11.5px; padding: 3px 10px;
  border-radius: 20px; transition: all 0.2s ease;
}
.ni-tag:hover { border-color: #f5c0bc !important; color: #8a0c07 !important; background: #fff8f8 !important; }

/* ── SIDEBAR COL ── */
.ni-sidebar-col {
  padding: 24px 0 24px 20px;
  display: flex; flex-direction: column; gap: 14px;
}
.ni-side-card {
  background: #FFFFFF; border: 1px solid #E8E8E8;
  border-radius: 8px; overflow: hidden;
  box-shadow: 0 1px 4px rgba(0,0,0,0.08);
}
.ni-side-card-head {
  display: flex; align-items: center; gap: 8px;
  padding: 11px 14px; background: #F7F8FA;
  border-bottom: 1px solid #E8E8E8;
}
.ni-side-card-head i { color: #8a0c07 !important; font-size: 13.5px; }
.ni-side-card-head h4 { font-family: 'Barlow Condensed', sans-serif; font-size: 14px; font-weight: 700; color: #1a1a2e; margin: 0; }
.ni-side-card-body { padding: 14px; }

/* Enquiry form */
.ni-form { display: flex; flex-direction: column; gap: 10px; }
.ni-field label { display: block; font-size: 10.5px; text-transform: uppercase; letter-spacing: .8px; color: #777; font-weight: 600; margin-bottom: 4px; }
.ni-input {
  width: 100%; background: #F7F8FA; border: 1px solid #E8E8E8;
  border-radius: 5px; padding: 9px 12px; color: #1a1a2e;
  font-size: 13.5px; font-family: 'Manrope', sans-serif;
  outline: none; transition: border-color .18s;
}
.ni-input::placeholder { color: #aaa; }
.ni-input:focus { border-color: #B51009 !important; background: #fff8f8 !important; }
textarea.ni-input { resize: vertical; min-height: 68px; }
.ni-submit-btn {
  width: 100%; background: #B51009 !important; color: #fff !important;
  font-family: 'Barlow Condensed', sans-serif; font-weight: 700; font-size: 15px;
  padding: 12px; border-radius: 5px; border: none; cursor: pointer;
  display: flex; align-items: center; justify-content: center; gap: 8px;
  transition: all 0.2s ease; box-shadow: 0 2px 0 #8a0c07 !important; letter-spacing: .3px;
}
.ni-submit-btn:hover { background: #8a0c07 !important; transform: translateY(-1px); box-shadow: 0 4px 14px rgba(181,16,9,.3) !important; }

/* Certifications */
.ni-cert-list { display: flex; flex-direction: column; gap: 8px; }
.ni-cert-item {
  display: flex; align-items: center; gap: 9px;
  font-size: 13px; color: #444; padding: 7px 10px;
  background: #F7F8FA; border-radius: 5px; border: 1px solid #E8E8E8;
}
.ni-cert-item i { color: #16a34a; flex-shrink: 0; }

/* Delivery */
.ni-del-list { display: flex; flex-direction: column; gap: 11px; }
.ni-del-item { display: flex; align-items: flex-start; gap: 10px; }
.ni-del-icon {
  width: 32px; height: 32px;
  background: #fdf2f2 !important;
  border-radius: 6px; display: flex; align-items: center; justify-content: center;
  color: #8a0c07 !important; font-size: 12px; flex-shrink: 0; margin-top: 1px;
}
.ni-del-text strong { font-size: 12.5px; color: #1a1a2e; display: block; margin-bottom: 2px; font-weight: 700; }
.ni-del-text span { font-size: 11.5px; color: #777; line-height: 1.4; }

/* ══ TABS SECTION ══ */
.ni-tabs-section {
  background: #F7F8FA; border-top: 1px solid #E8E8E8; padding: 48px 0 56px;
}
.ni-tabs-nav {
  display: flex; gap: 0; border-bottom: 2px solid #E8E8E8;
  margin-bottom: 32px; overflow-x: auto; scrollbar-width: none;
  background: #FFFFFF; border-radius: 8px 8px 0 0;
  box-shadow: 0 1px 4px rgba(0,0,0,0.08);
}
.ni-tabs-nav::-webkit-scrollbar { display: none; }
.ni-tab-btn {
  padding: 13px 22px; font-family: 'Barlow Condensed', sans-serif;
  font-size: 13px; font-weight: 700; letter-spacing: .8px;
  text-transform: uppercase; color: #777; background: transparent;
  border: none; border-bottom: 3px solid transparent;
  margin-bottom: -2px; cursor: pointer; white-space: nowrap;
  transition: color .2s, border-color .2s;
}
.ni-tab-btn:hover { color: #8a0c07 !important; border-bottom-color: #f5c0bc !important; }
.ni-tab-btn.active { color: #8a0c07 !important; border-bottom-color: #B51009 !important; background: #fff8f8 !important; }

.ni-tab-pane { display: none; }
.ni-tab-pane.active { display: block; animation: fadeUp .28s ease; }
@keyframes fadeUp { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }

.ni-overview-wrap {
  background: #FFFFFF; border: 1px solid #E8E8E8;
  border-radius: 0 8px 8px 8px; padding: 28px 32px;
}
.ni-overview-text { font-size: 15px; color: #444; line-height: 1.9; }

/* Features */
.ni-features-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 12px; }
.ni-feat-item {
  display: flex; align-items: flex-start; gap: 12px;
  padding: 14px 16px; background: #FFFFFF;
  border: 1px solid #E8E8E8; border-radius: 5px; transition: all 0.2s ease;
}
.ni-feat-item:hover { border-color: #f5c0bc !important; transform: translateY(-2px); box-shadow: 0 1px 4px rgba(0,0,0,0.08); }
.ni-feat-check {
  width: 28px; height: 28px; background: #F0FDF4; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  color: #16a34a; font-size: 11px; flex-shrink: 0; margin-top: 1px;
}
.ni-feat-text { font-size: 13.5px; color: #444; line-height: 1.55; }

/* Specs Table */
.ni-specs-table {
  width: 100%; max-width: 740px; border-collapse: collapse;
  background: #FFFFFF; border: 1px solid #E8E8E8;
  border-radius: 8px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.08);
}
.ni-specs-table tr { border-bottom: 1px solid #E8E8E8; }
.ni-specs-table tr:last-child { border-bottom: none; }
.ni-specs-table td { padding: 13px 18px; font-size: 13.5px; vertical-align: top; }
.ni-specs-table tr:nth-child(odd) td { background: #F7F8FA; }
.ni-specs-table td:first-child { color: #777; font-weight: 600; width: 36%; font-size: 12.5px; letter-spacing: .3px; }
.ni-specs-table td:last-child { color: #1a1a2e; font-weight: 600; }

/* Applications */
.ni-apps-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 11px; }
.ni-app-item {
  display: flex; align-items: center; gap: 10px;
  padding: 13px 15px; background: #FFFFFF;
  border: 1px solid #E8E8E8; border-radius: 5px;
  font-size: 13.5px; color: #444; transition: all 0.2s ease;
}
.ni-app-item i { color: #8a0c07 !important; font-size: 11px; flex-shrink: 0; }
.ni-app-item:hover { border-color: #f5c0bc !important; color: #8a0c07 !important; background: #fff8f8 !important; transform: translateX(3px); }

/* ══ RELATED PRODUCTS ══ */
.ni-related-section {
  background: #FFFFFF; padding: 48px 0 56px; border-top: 2px solid #E8E8E8;
}
.ni-section-head {
  display: flex; align-items: flex-end; justify-content: space-between;
  margin-bottom: 24px; gap: 14px; flex-wrap: wrap;
}
.ni-section-eyebrow {
  font-size: 10.5px; text-transform: uppercase; letter-spacing: 2px;
  color: #8a0c07 !important; font-weight: 700;
  font-family: 'Barlow Condensed', sans-serif; margin-bottom: 4px;
}
.ni-section-title {
  font-family: 'Barlow Condensed', sans-serif; font-size: 28px;
  font-weight: 800; color: #1a1a2e; letter-spacing: .3px;
}
.ni-view-all {
  display: inline-flex; align-items: center; gap: 6px;
  color: #464447 !important; font-size: 13.5px; font-weight: 600;
  white-space: nowrap; transition: gap .2s, color .18s;
}
.ni-view-all:hover { gap: 10px; color: #8a0c07 !important; }

.ni-related-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 16px; }
.ni-rel-card {
  background: #FFFFFF; border: 1px solid #E8E8E8; border-radius: 8px;
  overflow: hidden; transition: all 0.2s ease; position: relative;
}
.ni-rel-card:hover { transform: translateY(-4px); border-color: #f5c0bc !important; box-shadow: 0 4px 16px rgba(0,0,0,0.10); }

.ni-rel-img-box {
  aspect-ratio: 4 / 3; background: #F7F8FA;
  display: flex; align-items: center; justify-content: center;
  overflow: hidden; position: relative;
}
.ni-rel-img-box img { max-width: 76%; max-height: 76%; object-fit: contain; transition: transform .4s ease; }
.ni-rel-card:hover .ni-rel-img-box img { transform: scale(1.06); }

.ni-rel-overlay {
  position: absolute; inset: 0;
  background: rgba(70,68,71,0.88) !important;
  display: flex; align-items: center; justify-content: center;
  opacity: 0; transition: opacity .22s;
}
.ni-rel-card:hover .ni-rel-overlay { opacity: 1; }
.ni-rel-overlay-btn {
  display: inline-flex; align-items: center; gap: 7px;
  background: #B51009 !important; color: #fff !important;
  font-family: 'Barlow Condensed', sans-serif;
  font-weight: 700; font-size: 13px;
  padding: 9px 18px; border-radius: 5px; text-decoration: none; transition: transform .18s;
}
.ni-rel-overlay-btn:hover { transform: scale(1.04); color: #fff !important; }

.ni-rel-body { padding: 12px 14px; }
.ni-rel-cat { font-size: 10px; text-transform: uppercase; letter-spacing: 1px; color: #aaa; margin-bottom: 5px; }
.ni-rel-name {
  font-family: 'Barlow Condensed', sans-serif; font-size: 15px; font-weight: 700;
  color: #1a1a2e; display: block; line-height: 1.3; margin-bottom: 6px; transition: color .18s;
}
.ni-rel-name:hover { color: #8a0c07 !important; }
.ni-rel-footer {
  display: flex; align-items: center; justify-content: space-between;
  padding-top: 9px; border-top: 1px solid #E8E8E8;
}
.ni-rel-moq { font-size: 11px; color: #777; }
.ni-rel-moq strong { color: #8a0c07 !important; font-size: 12px; }
.ni-rel-link {
  font-size: 12px; font-weight: 700; color: #464447 !important;
  display: flex; align-items: center; gap: 4px; transition: gap .15s;
}
.ni-rel-link:hover { gap: 8px; color: #8a0c07 !important; }

/* ══ STICKY MOBILE BAR ══ */
.ni-mobile-bar {
  display: none; position: fixed; bottom: 0; left: 0; right: 0;
  background: #FFFFFF; border-top: 2px solid #B51009 !important;
  padding: 10px 16px; z-index: 1000; align-items: center; gap: 10px;
  box-shadow: 0 -4px 16px rgba(0,0,0,.1);
}
@media (max-width: 768px) { .ni-mobile-bar { display: flex; } body { padding-bottom: 64px; } }
.ni-mobile-bar-name { flex: 1; font-size: 13px; font-weight: 700; color: #1a1a2e; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
.ni-mobile-bar-btn {
  display: inline-flex; align-items: center; gap: 6px;
  background: #B51009 !important; color: #fff !important;
  font-family: 'Barlow Condensed', sans-serif; font-weight: 700; font-size: 13.5px;
  padding: 10px 18px; border-radius: 5px; text-decoration: none; flex-shrink: 0;
  box-shadow: 0 2px 0 #8a0c07 !important;
}

/* ══ ZOOM MODAL ══ */
.ni-zoom-modal {
  display: none; position: fixed; inset: 0;
  background: rgba(0,0,0,.92); z-index: 9999;
  align-items: center; justify-content: center; cursor: zoom-out;
}
.ni-zoom-modal.open { display: flex; }
.ni-zoom-modal img { max-width: 90vw; max-height: 90vh; object-fit: contain; border-radius: 8px; background: #fff; }
.ni-zoom-close {
  position: absolute; top: 16px; right: 20px;
  background: none; border: none; color: #fff; font-size: 34px;
  cursor: pointer; opacity: .7; line-height: 1; transition: opacity .18s;
}
.ni-zoom-close:hover { opacity: 1; }

/* Toast */
.ni-toast {
  position: fixed; bottom: 80px; left: 50%; transform: translateX(-50%);
  background: #1a1a2e; color: #fff; padding: 9px 22px; border-radius: 5px;
  font-weight: 700; font-size: 13px; z-index: 9998; opacity: 0;
  transition: opacity .3s; pointer-events: none; white-space: nowrap;
  border-left: 3px solid #B51009 !important;
}
.ni-toast.show { opacity: 1; }

/* ══ RESPONSIVE ══ */
@media (max-width: 1200px) { .ni-product-layout { grid-template-columns: 380px 1fr 290px; } }
@media (max-width: 1024px) {
  .ni-product-layout { grid-template-columns: 340px 1fr; grid-template-areas: "gallery info" "sidebar sidebar"; }
  .ni-gallery-col { grid-area: gallery; }
  .ni-info-col    { grid-area: info; border-right: none; }
  .ni-sidebar-col { grid-area: sidebar; display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; padding: 20px 0 0; border-top: 1px solid #E8E8E8; }
}
@media (max-width: 768px) {
  .ni-product-layout { grid-template-columns: 1fr; grid-template-areas: "gallery" "info" "sidebar"; }
  .ni-gallery-col { position: static; padding: 16px 0; }
  .ni-info-col    { border-left: none; padding: 16px 0; }
  .ni-sidebar-col { grid-template-columns: 1fr; padding: 16px 0; }
  .ni-chips-grid  { grid-template-columns: 1fr 1fr; }
  .ni-trust-strip { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 480px) {
  .ni-product-title { font-size: 22px; }
  .ni-chips-grid { grid-template-columns: 1fr; }
}

/* ══ MOBILE HEADER ══ */
.mobile-header .mobile-header-elements {
  display: flex !important; align-items: center !important;
  justify-content: space-between !important; width: 100% !important; padding: 12px 16px !important;
}
.mobile-header .mobile-logo { display: flex !important; align-items: center !important; }
.mobile-header .mobile-logo img { height: 40px !important; width: auto !important; display: block !important; }
.mobile-header .mobile-nav-icon {
  display: flex !important; align-items: center !important; justify-content: center !important;
  width: 40px !important; height: 40px !important; cursor: pointer !important;
  font-size: 22px !important; color: #1a1a2e !important;
}
.mobile-header {
  position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important;
  width: 100% !important; z-index: 9998 !important; background: #fff !important;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08) !important;
}
@media (max-width: 991px) { body.homepage4-body { padding-top: 68px !important; } }

/* ══ MOBILE SIDEBAR ══ */
.mobile-sidebar4 {
  position: fixed !important; top: 0 !important; left: -320px !important;
  width: 300px !important; height: 100vh !important; background: #fff !important;
  z-index: 99999 !important; overflow-y: auto !important;
  transition: left 0.3s ease !important; box-shadow: 4px 0 20px rgba(0,0,0,0.15) !important;
  display: block !important; padding: 0 !important;
}
.mobile-sidebar4.active { left: 0 !important; }
.mobile-sidebar4 .logosicon-area {
  display: flex !important; align-items: center !important;
  justify-content: space-between !important; padding: 16px !important; border-bottom: 1px solid #eee !important;
}
.mobile-sidebar4 .mobile-nav { padding: 16px !important; }
.mobile-sidebar4 .mobile-nav-list li { list-style: none !important; border-bottom: 1px solid #f0f0f0 !important; }
.mobile-sidebar4 .mobile-nav-list li a {
  display: block !important; padding: 12px 0 !important;
  color: #1a1a2e !important; font-weight: 600 !important; font-size: 15px !important;
}
body.mobile-menu-open::after {
  content: '' !important; position: fixed !important; inset: 0 !important;
  background: rgba(0,0,0,0.5) !important; z-index: 9990 !important;
}

@media (min-width: 992px) { .ni-breadcrumb { margin-top: 100px; } }
@media (max-width: 991px) { .ni-breadcrumb { margin-top: 0 !important; } }
</style>
</head>
<body class="homepage4-body">

<?php include 'include/header.php'; ?>

<!-- BREADCRUMB -->
<nav class="ni-breadcrumb">
  <div class="container-ni">
    <div class="ni-bc-inner">
      <a href="<?= $base_url ?>/"><i class="fa-solid fa-house"></i>&nbsp;Home</a>
      <span class="sep"><i class="fa-solid fa-angle-right"></i></span>
      <a href="<?= $base_url ?>products.php">Products</a>
      <span class="sep"><i class="fa-solid fa-angle-right"></i></span>
      <a href="<?= $base_url ?>products.php?filter=<?= urlencode($product['category']) ?>">
        <?= ucfirst(htmlspecialchars($product['category'])) ?>
      </a>
      <span class="sep"><i class="fa-solid fa-angle-right"></i></span>
      <span class="cur"><?= htmlspecialchars($product['name']) ?></span>
    </div>
  </div>
</nav>

<!-- MAIN PRODUCT SECTION -->
<section class="ni-main-section">
  <div class="container-ni">
    <div class="ni-product-layout">

      <!-- COL 1: GALLERY -->
      <div class="ni-gallery-col">
        <div class="ni-main-img-wrap" id="mainImgWrap">
          <?php if (!empty($product['badge']) && !empty($product['badge_type'])): ?>
          <div class="ni-badge-pos">
            <span class="ni-badge" style="background:<?= $badge_bg ?>;"><?= htmlspecialchars($product['badge']) ?></span>
          </div>
          <?php endif; ?>
          <img id="mainProductImg" src="<?= $gallery[0] ?>" alt="<?= htmlspecialchars($product['name']) ?>">
          <div class="ni-zoom-hint"><i class="fa-solid fa-magnifying-glass-plus"></i> Zoom</div>
        </div>

        <div class="ni-thumbs" id="thumbRow">
          <?php foreach ($gallery as $i => $img): ?>
          <div class="ni-thumb <?= $i === 0 ? 'active' : '' ?>" data-img="<?= htmlspecialchars($img) ?>">
            <img src="<?= htmlspecialchars($img) ?>" alt="View <?= $i+1 ?>"
                 onerror="this.closest('.ni-thumb').style.display='none'">
          </div>
          <?php endforeach; ?>
        </div>

        <div class="ni-share-row">
          <span class="ni-share-label">Share:</span>
          <a href="https://wa.me/919579179996?text=<?= urlencode($product['name'] . ' — ' . $base_url . 'single-product.php?id=' . $product['id']) ?>"
   class="ni-share-ico wa" target="_blank">
   <i class="fa-brands fa-whatsapp"></i>
</a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($base_url . 'single-product.php?id=' . $product['id']) ?>"
             class="ni-share-ico fb" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode($base_url . 'single-product.php?id=' . $product['id']) ?>"
             class="ni-share-ico li" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
          <button class="ni-copy-btn" id="copyLinkBtn"><i class="fa-solid fa-link"></i></button>
        </div>
      </div>

      <!-- COL 2: INFO -->
      <div class="ni-info-col">
        <a href="<?= $base_url ?>products.php?filter=<?= urlencode($product['category']) ?>" class="ni-cat-pill">
          <i class="fa-solid fa-tag"></i>
          <?= ucfirst(htmlspecialchars($product['category'])) ?>
        </a>

        <h1 class="ni-product-title"><?= htmlspecialchars($product['name']) ?></h1>

        <div class="ni-rating-row">
          <?= renderStars($rating, 'md') ?>
          <span class="ni-rating-chip"><?= number_format($rating, 1) ?></span>
          <a href="" class="ni-review-link"><?= $reviews ?> verified reviews</a>
          <?php if (!empty($product['sku'])): ?>
          <span class="ni-sku-text">SKU: <?= htmlspecialchars($product['sku']) ?></span>
          <?php endif; ?>
        </div>

        <div class="ni-divider"></div>

        <?php if (!empty($product['description'])): ?>
        <p class="ni-short-desc"><?= htmlspecialchars($product['description']) ?></p>
        <?php endif; ?>

        <?php
        $chipData = [
          ['brand','fa-industry','Brand'],
          ['material','fa-cube','Material'],
          ['weight','fa-weight-scale','Weight'],
          ['warranty','fa-shield-halved','Warranty'],
          ['country_of_origin','fa-flag','Origin'],
          ['dimensions','fa-ruler-combined','Dimensions'],
        ];
        $hasChips = false;
        foreach ($chipData as $c) { if (!empty($product[$c[0]])) { $hasChips = true; break; } }
        if ($hasChips): ?>
        <div class="ni-chips-grid">
          <?php foreach ($chipData as [$field, $icon, $label]):
            if (empty($product[$field])) continue; ?>
          <div class="ni-chip">
            <div class="ni-chip-icon"><i class="fa-solid <?= $icon ?>"></i></div>
            <div>
              <div class="ni-chip-label"><?= $label ?></div>
              <div class="ni-chip-val"><?= htmlspecialchars($product[$field]) ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="ni-avail-row <?= $product['in_stock'] ? '' : 'out' ?>">
          <div class="ni-stock-dot"></div>
          <span class="ni-stock-label"><?= $product['in_stock'] ? 'In Stock' : 'Out of Stock' ?></span>
          <?php if (!empty($product['availability'])): ?>
          <span class="ni-avail-text">· <?= htmlspecialchars($product['availability']) ?></span>
          <?php endif; ?>
          <?php if (!empty($product['moq'])): ?>
          <div class="ni-moq-pill">MOQ: <?= htmlspecialchars($product['moq']) ?></div>
          <?php endif; ?>
        </div>

        <div class="ni-cta-row">
          <a href="<?= $base_url ?>contact-us?product=<?= urlencode($product['name']) ?>" class="ni-btn ni-btn-primary">
            <i class="fa-solid fa-file-invoice"></i> Get Bulk Quote
          </a>
          <a href="<?= $base_url ?>contact-us?product=<?= urlencode($product['name']) ?>" class="ni-btn ni-btn-secondary">
            <i class="fa-solid fa-envelope"></i> Enquire Now
          </a>
          <a href="https://wa.me/9579179996?text=<?= urlencode('Hi, I am interested in ' . $product['name']) ?>"
             class="ni-btn ni-btn-wa" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
          <a href="tel:+919579179996" class="ni-btn ni-btn-outline">
            <i class="fa-solid fa-phone"></i>
          </a>
        </div>

        <div class="ni-trust-strip">
          <div class="ni-trust-item"><i class="fa-solid fa-shield-halved"></i><strong>ISI Certified</strong><span>Quality assured</span></div>
          <div class="ni-trust-item"><i class="fa-solid fa-truck-fast"></i><strong>Pan India</strong><span>Fast delivery</span></div>
          <div class="ni-trust-item"><i class="fa-solid fa-headset"></i><strong>24/7 Support</strong><span>Always here</span></div>
          <div class="ni-trust-item"><i class="fa-solid fa-tags"></i><strong>Bulk Deals</strong><span>Best pricing</span></div>
        </div>

        <?php if (!empty($product['tags'])): ?>
        <div class="ni-tags">
          <?php foreach (array_filter(array_map('trim', explode(',', $product['tags']))) as $tag): ?>
          <a href="<?= $base_url ?>products.php?q=<?= urlencode($tag) ?>" class="ni-tag">
            <i class="fa-solid fa-hashtag" style="font-size:9px;margin-right:2px;"></i><?= htmlspecialchars($tag) ?>
          </a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>

      <!-- COL 3: SIDEBAR -->
      <div class="ni-sidebar-col">
        <div class="ni-side-card">
          <div class="ni-side-card-head">
            <i class="fa-solid fa-envelope-open-text"></i>
            <h4>Quick Enquiry</h4>
          </div>
          <div class="ni-side-card-body">
            <form class="ni-form" action="<?= $base_url ?>contact-us" method="GET">
              <input type="hidden" name="product" value="<?= htmlspecialchars($product['name']) ?>">
              <div class="ni-field"><label>Your Name *</label><input type="text" class="ni-input" name="name" placeholder="Full name" required></div>
              <div class="ni-field"><label>Phone *</label><input type="tel" class="ni-input" name="phone" placeholder="+91 XXXXX XXXXX" required></div>
              <div class="ni-field"><label>Company</label><input type="text" class="ni-input" name="company" placeholder="Company name"></div>
              <div class="ni-field"><label>Quantity</label><input type="text" class="ni-input" name="quantity" placeholder="e.g. 500 units, 10 tons"></div>
              <div class="ni-field"><label>Message</label><textarea class="ni-input" name="message" placeholder="Your requirement..."></textarea></div>
              <button type="submit" class="ni-submit-btn"><i class="fa-solid fa-paper-plane"></i> Send Enquiry</button>
            </form>
          </div>
        </div>

        <?php if (!empty($certifications)): ?>
        <div class="ni-side-card">
          <div class="ni-side-card-head"><i class="fa-solid fa-certificate"></i><h4>Certifications</h4></div>
          <div class="ni-side-card-body">
            <div class="ni-cert-list">
              <?php foreach ($certifications as $cert): ?>
              <div class="ni-cert-item"><i class="fa-solid fa-circle-check"></i><?= htmlspecialchars($cert) ?></div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <?php endif; ?>

        <div class="ni-side-card">
          <div class="ni-side-card-head"><i class="fa-solid fa-truck-fast"></i><h4>Delivery & Support</h4></div>
          <div class="ni-side-card-body">
            <div class="ni-del-list">
              <div class="ni-del-item"><div class="ni-del-icon"><i class="fa-solid fa-truck-fast"></i></div><div class="ni-del-text"><strong>Pan India Delivery</strong><span><?= htmlspecialchars($product['delivery_info'] ?? 'Fast & reliable shipping') ?></span></div></div>
              <div class="ni-del-item"><div class="ni-del-icon"><i class="fa-solid fa-headset"></i></div><div class="ni-del-text"><strong>24/7 Support</strong><span>Dedicated team ready to assist</span></div></div>
              <div class="ni-del-item"><div class="ni-del-icon"><i class="fa-solid fa-tags"></i></div><div class="ni-del-text"><strong>Bulk Order Pricing</strong><span>Special discounts on large orders</span></div></div>
              <div class="ni-del-item"><div class="ni-del-icon"><i class="fa-solid fa-rotate-left"></i></div><div class="ni-del-text"><strong>Easy Returns</strong><span>Hassle-free return for defective goods</span></div></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PRODUCT TABS -->
<section class="ni-tabs-section" id="productTabs">
  <div class="container-ni">
    <div class="ni-tabs-nav" id="niTabsNav">
      <button class="ni-tab-btn active" data-tab="overview"><i class="fa-solid fa-file-lines"></i> Overview</button>
      <?php if (!empty($features)): ?><button class="ni-tab-btn" data-tab="features"><i class="fa-solid fa-list-check"></i> Key Features</button><?php endif; ?>
      <?php if (!empty($specs)): ?><button class="ni-tab-btn" data-tab="specs"><i class="fa-solid fa-table"></i> Specifications</button><?php endif; ?>
      <?php if (!empty($applications)): ?><button class="ni-tab-btn" data-tab="applications"><i class="fa-solid fa-screwdriver-wrench"></i> Applications</button><?php endif; ?>
    </div>

    <div class="ni-tab-pane active" id="tab-overview">
      <div class="ni-overview-wrap">
        <p class="ni-overview-text"><?= nl2br(htmlspecialchars(!empty($product['full_description']) ? $product['full_description'] : ($product['description'] ?? ''))) ?></p>
      </div>
    </div>

    <?php if (!empty($features)): ?>
    <div class="ni-tab-pane" id="tab-features">
      <div class="ni-features-grid">
        <?php foreach ($features as $f): ?>
        <div class="ni-feat-item"><div class="ni-feat-check"><i class="fa-solid fa-check"></i></div><div class="ni-feat-text"><?= htmlspecialchars($f) ?></div></div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if (!empty($specs)): ?>
    <div class="ni-tab-pane" id="tab-specs">
      <table class="ni-specs-table">
        <?php foreach ($specs as $k => $v): ?>
        <tr><td><?= htmlspecialchars($k) ?></td><td><?= htmlspecialchars($v) ?></td></tr>
        <?php endforeach; ?>
      </table>
    </div>
    <?php endif; ?>

    <?php if (!empty($applications)): ?>
    <div class="ni-tab-pane" id="tab-applications">
      <div class="ni-apps-grid">
        <?php foreach ($applications as $app): ?>
        <div class="ni-app-item"><i class="fa-solid fa-circle-dot"></i><?= htmlspecialchars($app) ?></div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- RELATED PRODUCTS -->
<?php if (!empty($related_products)): ?>
<section class="ni-related-section">
  <div class="container-ni">
    <div class="ni-section-head">
      <div>
        <div class="ni-section-eyebrow">You May Also Like</div>
        <div class="ni-section-title">Related Products</div>
      </div>
      <a href="<?= $base_url ?>products.php?filter=<?= urlencode($product['category']) ?>" class="ni-view-all">
        View Category <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>
    <div class="ni-related-grid">
      <?php foreach ($related_products as $rel): ?>
      <div class="ni-rel-card">
        <div class="ni-rel-img-box">
          <img src="<?= $base_url . ltrim($rel['image'] ?: 'assets/img/placeholder.png', '/') ?>"
               alt="<?= htmlspecialchars($rel['name']) ?>"
               onerror="this.src='<?= $base_url ?>assets/img/placeholder.png'">
          <div class="ni-rel-overlay">
            <a href="<?= $base_url ?>single-product.php?id=<?= $rel['id'] ?>" class="ni-rel-overlay-btn">
              <i class="fa-solid fa-eye"></i> View
            </a>
          </div>
        </div>
        <div class="ni-rel-body">
          <div class="ni-rel-cat"><?= ucfirst(htmlspecialchars($rel['category'])) ?></div>
          <a href="<?= $base_url ?>single-product.php?id=<?= $rel['id'] ?>" class="ni-rel-name"><?= htmlspecialchars($rel['name']) ?></a>
          <div style="margin-bottom:8px;"><?= renderStars(floatval($rel['rating'] ?? 0), 'sm') ?></div>
          <div class="ni-rel-footer">
            <div class="ni-rel-moq">MOQ: <strong><?= htmlspecialchars($rel['moq'] ?: '—') ?></strong></div>
            <a href="<?= $base_url ?>single-product.php?id=<?= $rel['id'] ?>" class="ni-rel-link">Details <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php include 'include/footer.php'; ?>

<!-- Sticky Mobile Bar -->
<div class="ni-mobile-bar">
  <div class="ni-mobile-bar-name"><?= htmlspecialchars($product['name']) ?></div>
  <a href="<?= $base_url ?>contact-us?product=<?= urlencode($product['name']) ?>" class="ni-mobile-bar-btn">
    <i class="fa-solid fa-file-invoice"></i> Get Quote
  </a>
</div>

<!-- Zoom Modal -->
<div class="ni-zoom-modal" id="zoomModal">
  <button class="ni-zoom-close" id="zoomClose">&times;</button>
  <img src="" alt="Zoom" id="zoomImg">
</div>

<!-- Toast -->
<div class="ni-toast" id="niToast">🔗 Link Copied!</div>

<script src="<?= $base_url ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= $base_url ?>assets/js/plugins/fontawesome.js"></script>
<script src="<?= $base_url ?>assets/js/plugins/sidebar.js"></script>
<script src="<?= $base_url ?>assets/js/plugins/mobilemenu.js"></script>
<script src="<?= $base_url ?>assets/js/main.js"></script>
<script src="<?= $base_url ?>assets/js/plugins/aos.js"></script>
<script>
$(document).ready(function() {
  $(document).on('click', '.dots-menu, .mobile-nav-icon', function(e) {
    e.stopPropagation();
    $('.mobile-sidebar, .mobile-sidebar4').addClass('active');
    $('body').addClass('mobile-menu-open');
  });
  $(document).on('click', '.menu-close', function(e) {
    e.stopPropagation();
    $('.mobile-sidebar, .mobile-sidebar4').removeClass('active');
    $('body').removeClass('mobile-menu-open');
  });
  $(document).on('click', function(e) {
    if ($('body').hasClass('mobile-menu-open')) {
      if (!$(e.target).closest('.mobile-sidebar, .mobile-sidebar4, .dots-menu, .mobile-nav-icon').length) {
        $('.mobile-sidebar, .mobile-sidebar4').removeClass('active');
        $('body').removeClass('mobile-menu-open');
      }
    }
  });
});

$(function () {
  $('#thumbRow').on('click', '.ni-thumb', function () {
    var newSrc = $(this).data('img');
    $('#mainProductImg').stop(true).fadeOut(80, function () {
      $(this).attr('src', newSrc).fadeIn(160);
    });
    $('.ni-thumb').removeClass('active');
    $(this).addClass('active');
    $('#zoomImg').attr('src', newSrc);
  });

  $('#mainImgWrap').on('click', function () {
    var src = $('#mainProductImg').attr('src');
    $('#zoomImg').attr('src', src);
    $('#zoomModal').addClass('open');
    $('body').css('overflow', 'hidden');
  });

  function closeZoom() { $('#zoomModal').removeClass('open'); $('body').css('overflow', ''); }
  $('#zoomClose').on('click', closeZoom);
  $('#zoomModal').on('click', function (e) { if ($(e.target).is('#zoomModal')) closeZoom(); });
  $(document).on('keydown', function (e) { if (e.key === 'Escape') closeZoom(); });

  $('#niTabsNav').on('click', '.ni-tab-btn', function () {
    var tab = $(this).data('tab');
    $('.ni-tab-btn').removeClass('active');
    $(this).addClass('active');
    $('.ni-tab-pane').removeClass('active');
    $('#tab-' + tab).addClass('active');
  });

  $('#copyLinkBtn').on('click', function () {
    var url = window.location.href;
    if (navigator.clipboard) {
      navigator.clipboard.writeText(url).then(showToast);
    } else {
      var $tmp = $('<input>').val(url).appendTo('body').select();
      document.execCommand('copy');
      $tmp.remove();
      showToast();
    }
  });

  function showToast() {
    $('#niToast').addClass('show');
    setTimeout(function () { $('#niToast').removeClass('show'); }, 2400);
  }
});
</script>
</body>
</html>