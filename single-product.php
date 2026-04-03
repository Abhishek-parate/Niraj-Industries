<?php
$base_url = "http://localhost/nirajindustries/";
include 'include/config.php';

// Get product ID
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if (!$product_id) { header("Location: {$base_url}products.php"); exit; }

// Fetch main product
$stmt = $conn->prepare("SELECT * FROM products WHERE id = ? AND is_active = 1 LIMIT 1");
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 0) { header("Location: {$base_url}products.php"); exit; }
$product = $result->fetch_assoc();
$stmt->close();

// Fetch related products (same category, exclude current)
$cat = $conn->real_escape_string($product['category']);
$related_result = $conn->query("SELECT * FROM products WHERE category = '$cat' AND id != $product_id AND is_active = 1 ORDER BY sort_order ASC LIMIT 4");
$related_products = [];
while ($row = $related_result->fetch_assoc()) { $related_products[] = $row; }

// Parse specifications (pipe-separated key|value)
$specs = [];
if (!empty($product['specifications'])) {
    foreach (explode('|', $product['specifications']) as $spec) {
        $parts = explode(':', $spec, 2);
        if (count($parts) === 2) { $specs[trim($parts[0])] = trim($parts[1]); }
    }
}

// Parse features (pipe-separated)
$features = [];
if (!empty($product['features'])) {
    $features = array_filter(array_map('trim', explode('|', $product['features'])));
}

// Parse applications (pipe-separated)
$applications = [];
if (!empty($product['applications'])) {
    $applications = array_filter(array_map('trim', explode('|', $product['applications'])));
}

// Parse certifications (pipe-separated)
$certifications = [];
if (!empty($product['certifications'])) {
    $certifications = array_filter(array_map('trim', explode('|', $product['certifications'])));
}

// Build gallery images array
$gallery = [];
if (!empty($product['image']))  $gallery[] = $base_url . $product['image'];
if (!empty($product['image2'])) $gallery[] = $base_url . $product['image2'];
if (!empty($product['image3'])) $gallery[] = $base_url . $product['image3'];
if (!empty($product['image4'])) $gallery[] = $base_url . $product['image4'];
if (empty($gallery)) $gallery[] = $base_url . 'assets/img/all-images/service/service-img13.png';

// Rating stars
$rating = floatval($product['rating']);
$stars_html = '';
for ($i = 1; $i <= 5; $i++) {
    if ($i <= floor($rating)) $stars_html .= '<i class="fa-solid fa-star"></i>';
    elseif ($i - $rating < 1 && $i - $rating > 0) $stars_html .= '<i class="fa-solid fa-star-half-stroke"></i>';
    else $stars_html .= '<i class="fa-regular fa-star"></i>';
}

// Badge
$badge_class = '';
if ($product['badge_type'] === 'new')  $badge_class = 'badge-new';
if ($product['badge_type'] === 'hot')  $badge_class = 'badge-hot';
if ($product['badge_type'] === 'best') $badge_class = 'badge-best';
if ($product['badge_type'] === 'sale') $badge_class = 'badge-sale';

$page_title = htmlspecialchars($product['name']) . " | Niraj Industries";
$meta_description = !empty($product['description']) ? htmlspecialchars(substr($product['description'], 0, 160)) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <link rel="shortcut icon" href="<?php echo $base_url; ?>assets/img/logo/fav-logo4.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/aos.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/mobile.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="<?php echo $base_url; ?>assets/js/plugins/jquery-3-6-0.min.js"></script>

<style>
/* =========================================================
   SINGLE PRODUCT PAGE — NIRAJ INDUSTRIES
   Theme: Dark Navy #0d1b2a + Yellow #FFC107
   ========================================================= */

:root {
    --primary:      #FFC107;
    --primary-dark: #e6a800;
    --dark:         #0d1b2a;
    --dark2:        #152436;
    --dark3:        #1e3248;
    --text:         #e2e8f0;
    --text-muted:   #94a3b8;
    --border:       rgba(255,193,7,0.15);
    --border-soft:  rgba(255,255,255,0.08);
    --success:      #22c55e;
    --radius:       12px;
    --radius-sm:    8px;
    --shadow:       0 4px 24px rgba(0,0,0,0.35);
    --shadow-glow:  0 0 30px rgba(255,193,7,0.12);
}

* { box-sizing: border-box; }

/* ── Breadcrumb ── */
.sp-breadcrumb-area {
    background: var(--dark);
    padding: 14px 0;
    border-bottom: 1px solid var(--border-soft);
}
.sp-breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: var(--text-muted);
    flex-wrap: wrap;
}
.sp-breadcrumb a { color: var(--text-muted); text-decoration: none; transition: color .2s; }
.sp-breadcrumb a:hover { color: var(--primary); }
.sp-breadcrumb .sep { color: rgba(255,255,255,0.2); font-size: 10px; }
.sp-breadcrumb .current { color: var(--text); font-weight: 500; }

/* ── Main Product Section ── */
.sp-main-section {
    background: var(--dark);
    padding: 48px 0 60px;
}

/* ── PRODUCT LAYOUT ── */
.sp-layout {
    display: grid;
    grid-template-columns: 1fr 1fr 340px;
    gap: 32px;
    align-items: start;
}

@media (max-width: 1100px) {
    .sp-layout { grid-template-columns: 1fr 1fr; }
    .sp-sidebar-col { grid-column: 1 / -1; }
}
@media (max-width: 768px) {
    .sp-layout { grid-template-columns: 1fr; }
}

/* ── Gallery Column ── */
.sp-gallery { position: sticky; top: 90px; }

.sp-main-img-wrap {
    position: relative;
    background: var(--dark2);
    border-radius: var(--radius);
    border: 1px solid var(--border-soft);
    overflow: hidden;
    aspect-ratio: 1 / 1;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: zoom-in;
}
.sp-main-img-wrap::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 30% 30%, rgba(255,193,7,0.04), transparent 60%);
    pointer-events: none;
}
.sp-main-img-wrap img {
    max-width: 88%;
    max-height: 88%;
    object-fit: contain;
    transition: transform .4s ease;
}
.sp-main-img-wrap:hover img { transform: scale(1.05); }

.sp-badge-overlay {
    position: absolute;
    top: 16px;
    left: 16px;
    z-index: 2;
}
.sp-badge {
    display: inline-block;
    padding: 5px 14px;
    border-radius: 50px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.badge-new  { background: #3b82f6; color: #fff; }
.badge-hot  { background: #ef4444; color: #fff; }
.badge-best { background: var(--primary); color: var(--dark); }
.badge-sale { background: var(--success); color: #fff; }

.sp-zoom-hint {
    position: absolute;
    bottom: 12px;
    right: 12px;
    background: rgba(0,0,0,0.6);
    color: var(--text-muted);
    font-size: 11px;
    padding: 4px 10px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    gap: 5px;
    backdrop-filter: blur(4px);
}

.sp-thumbnails {
    display: flex;
    gap: 10px;
    margin-top: 14px;
    flex-wrap: wrap;
}
.sp-thumb {
    width: 72px;
    height: 72px;
    border-radius: var(--radius-sm);
    border: 2px solid var(--border-soft);
    overflow: hidden;
    cursor: pointer;
    transition: border-color .2s, transform .2s;
    background: var(--dark2);
    display: flex;
    align-items: center;
    justify-content: center;
}
.sp-thumb img { width: 90%; height: 90%; object-fit: contain; }
.sp-thumb.active, .sp-thumb:hover { border-color: var(--primary); transform: translateY(-2px); }

/* ── Info Column ── */
.sp-info {}

.sp-category-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255,193,7,0.12);
    color: var(--primary);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    padding: 5px 14px;
    border-radius: 50px;
    border: 1px solid rgba(255,193,7,0.2);
    margin-bottom: 14px;
}

.sp-product-title {
    font-family: 'Rajdhani', sans-serif;
    font-size: 34px;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    margin-bottom: 16px;
}

.sp-rating-row {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}
.sp-stars { color: var(--primary); font-size: 15px; display: flex; gap: 2px; }
.sp-rating-val { font-weight: 700; color: var(--primary); font-size: 15px; }
.sp-reviews-count { color: var(--text-muted); font-size: 13px; }
.sp-sku-tag { color: var(--text-muted); font-size: 12px; margin-left: auto; font-family: monospace; }

.sp-short-desc {
    color: var(--text-muted);
    font-size: 14.5px;
    line-height: 1.75;
    margin-bottom: 24px;
    padding-bottom: 24px;
    border-bottom: 1px solid var(--border-soft);
}

/* Quick Specs Strip */
.sp-quick-specs {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
    margin-bottom: 24px;
}
.sp-qs-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    background: var(--dark2);
    border: 1px solid var(--border-soft);
    border-radius: var(--radius-sm);
    padding: 12px 14px;
    transition: border-color .2s;
}
.sp-qs-item:hover { border-color: rgba(255,193,7,0.3); }
.sp-qs-icon {
    width: 36px;
    height: 36px;
    background: rgba(255,193,7,0.1);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    font-size: 14px;
    flex-shrink: 0;
}
.sp-qs-text { display: flex; flex-direction: column; }
.sp-qs-label { font-size: 10px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-muted); margin-bottom: 2px; }
.sp-qs-val { font-size: 13px; color: #fff; font-weight: 600; }

/* Availability */
.sp-avail-row {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 24px;
    padding: 14px 18px;
    background: var(--dark2);
    border-radius: var(--radius-sm);
    border: 1px solid var(--border-soft);
}
.sp-stock-dot {
    width: 10px; height: 10px;
    border-radius: 50%;
    background: var(--success);
    box-shadow: 0 0 8px rgba(34,197,94,0.5);
    flex-shrink: 0;
}
.sp-stock-text { font-size: 14px; color: #fff; font-weight: 600; }
.sp-moq-info { font-size: 13px; color: var(--text-muted); margin-left: auto; }
.sp-moq-info strong { color: var(--primary); }

/* CTA Buttons */
.sp-cta-group {
    display: flex;
    gap: 12px;
    margin-bottom: 24px;
    flex-wrap: wrap;
}

.sp-btn-primary {
    flex: 1;
    min-width: 160px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: var(--primary);
    color: var(--dark);
    font-weight: 700;
    font-size: 15px;
    padding: 14px 28px;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: all .25s;
    letter-spacing: .3px;
    font-family: 'Rajdhani', sans-serif;
}
.sp-btn-primary:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(255,193,7,0.3);
    color: var(--dark);
}

.sp-btn-outline {
    flex: 1;
    min-width: 160px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: transparent;
    color: #fff;
    font-weight: 600;
    font-size: 15px;
    padding: 14px 28px;
    border-radius: 50px;
    border: 2px solid rgba(255,255,255,0.2);
    cursor: pointer;
    text-decoration: none;
    transition: all .25s;
    font-family: 'Rajdhani', sans-serif;
}
.sp-btn-outline:hover {
    border-color: var(--primary);
    color: var(--primary);
    transform: translateY(-2px);
}

.sp-btn-whatsapp {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #25D366;
    color: #fff;
    font-weight: 700;
    font-size: 14px;
    padding: 14px 24px;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: all .25s;
    flex-shrink: 0;
}
.sp-btn-whatsapp:hover {
    background: #1da851;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(37,211,102,0.3);
    color: #fff;
}

/* Trust badges */
.sp-trust-row {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    padding-top: 20px;
    border-top: 1px solid var(--border-soft);
}
.sp-trust-item {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 12px;
    color: var(--text-muted);
}
.sp-trust-item i { color: var(--primary); font-size: 14px; }

/* ── Sidebar Column ── */
.sp-sidebar {}

.sp-sidebar-card {
    background: var(--dark2);
    border: 1px solid var(--border-soft);
    border-radius: var(--radius);
    overflow: hidden;
    margin-bottom: 20px;
}
.sp-sidebar-card-head {
    padding: 16px 20px;
    border-bottom: 1px solid var(--border-soft);
    display: flex;
    align-items: center;
    gap: 10px;
}
.sp-sidebar-card-head h4 {
    font-family: 'Rajdhani', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    margin: 0;
}
.sp-sidebar-card-head i { color: var(--primary); font-size: 16px; }
.sp-sidebar-card-body { padding: 18px 20px; }

/* Enquiry form */
.sp-enquiry-form { display: flex; flex-direction: column; gap: 12px; }
.sp-form-group { display: flex; flex-direction: column; gap: 5px; }
.sp-form-group label { font-size: 12px; color: var(--text-muted); letter-spacing: .5px; }
.sp-form-control {
    background: var(--dark3);
    border: 1px solid var(--border-soft);
    border-radius: var(--radius-sm);
    padding: 11px 14px;
    color: #fff;
    font-size: 13.5px;
    outline: none;
    transition: border-color .2s;
    width: 100%;
    font-family: 'DM Sans', sans-serif;
}
.sp-form-control::placeholder { color: #475569; }
.sp-form-control:focus { border-color: rgba(255,193,7,0.5); }
textarea.sp-form-control { resize: vertical; min-height: 80px; }

.sp-submit-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: var(--primary);
    color: var(--dark);
    font-weight: 700;
    font-size: 14px;
    padding: 13px;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    transition: all .25s;
    font-family: 'Rajdhani', sans-serif;
    letter-spacing: .3px;
}
.sp-submit-btn:hover { background: var(--primary-dark); transform: translateY(-1px); box-shadow: 0 6px 20px rgba(255,193,7,0.25); }

/* Certifications */
.sp-cert-list { display: flex; flex-direction: column; gap: 8px; }
.sp-cert-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    color: var(--text);
}
.sp-cert-item i { color: var(--success); font-size: 14px; flex-shrink: 0; }

/* Delivery info */
.sp-delivery-list { display: flex; flex-direction: column; gap: 10px; }
.sp-del-item { display: flex; align-items: flex-start; gap: 10px; }
.sp-del-item i { color: var(--primary); margin-top: 2px; flex-shrink: 0; }
.sp-del-item-text { font-size: 13px; color: var(--text-muted); line-height: 1.5; }
.sp-del-item-text strong { color: #fff; display: block; font-size: 13px; margin-bottom: 1px; }

/* Share row */
.sp-share-row { display: flex; gap: 10px; align-items: center; flex-wrap: wrap; }
.sp-share-label { font-size: 12px; color: var(--text-muted); }
.sp-share-btn {
    width: 36px; height: 36px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    text-decoration: none;
    font-size: 14px;
    transition: transform .2s, box-shadow .2s;
    color: #fff;
}
.sp-share-btn:hover { transform: translateY(-2px); }
.sp-share-btn.wa  { background: #25D366; }
.sp-share-btn.fb  { background: #1877F2; }
.sp-share-btn.li  { background: #0A66C2; }
.sp-share-btn.tw  { background: #1DA1F2; }
.sp-share-copy { width: 36px; height: 36px; border-radius: 50%; border: 1px solid var(--border-soft); background: transparent; color: var(--text-muted); display: flex; align-items: center; justify-content: center; cursor: pointer; font-size: 13px; transition: all .2s; }
.sp-share-copy:hover { border-color: var(--primary); color: var(--primary); }

/* ── TABS SECTION ── */
.sp-tabs-section {
    background: var(--dark2);
    padding: 56px 0;
    border-top: 1px solid var(--border-soft);
}

.sp-tabs-nav {
    display: flex;
    gap: 4px;
    border-bottom: 2px solid var(--border-soft);
    margin-bottom: 36px;
    overflow-x: auto;
    scrollbar-width: none;
}
.sp-tab-btn {
    padding: 12px 22px;
    font-size: 14px;
    font-weight: 600;
    color: var(--text-muted);
    background: transparent;
    border: none;
    border-bottom: 2px solid transparent;
    margin-bottom: -2px;
    cursor: pointer;
    white-space: nowrap;
    transition: color .2s, border-color .2s;
    font-family: 'Rajdhani', sans-serif;
    letter-spacing: .5px;
    text-transform: uppercase;
    font-size: 13px;
}
.sp-tab-btn.active, .sp-tab-btn:hover { color: var(--primary); border-bottom-color: var(--primary); }

.sp-tab-pane { display: none; }
.sp-tab-pane.active { display: block; animation: fadeUp .3s ease; }

@keyframes fadeUp {
    from { opacity: 0; transform: translateY(10px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* Overview tab */
.sp-overview-text {
    color: var(--text-muted);
    font-size: 15px;
    line-height: 1.85;
    max-width: 800px;
}

/* Features tab */
.sp-features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 16px;
}
.sp-feature-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    background: var(--dark);
    border: 1px solid var(--border-soft);
    border-radius: var(--radius-sm);
    padding: 16px;
    transition: border-color .2s, transform .2s;
}
.sp-feature-item:hover { border-color: rgba(255,193,7,0.3); transform: translateY(-2px); }
.sp-feature-check {
    width: 30px; height: 30px;
    background: rgba(34,197,94,0.12);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    color: var(--success);
    font-size: 12px;
}
.sp-feature-text { font-size: 14px; color: var(--text); line-height: 1.5; padding-top: 5px; }

/* Specifications tab */
.sp-specs-table { width: 100%; border-collapse: collapse; }
.sp-specs-table tr { border-bottom: 1px solid var(--border-soft); }
.sp-specs-table tr:last-child { border-bottom: none; }
.sp-specs-table td {
    padding: 13px 16px;
    font-size: 14px;
    vertical-align: top;
}
.sp-specs-table td:first-child {
    color: var(--text-muted);
    font-weight: 500;
    width: 40%;
    background: rgba(255,255,255,0.02);
    font-size: 13px;
    letter-spacing: .3px;
}
.sp-specs-table td:last-child { color: #fff; font-weight: 500; }
.sp-specs-table tr:nth-child(even) td { background: rgba(255,255,255,0.02); }

/* Applications tab */
.sp-apps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 14px;
}
.sp-app-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 14px 16px;
    background: var(--dark);
    border: 1px solid var(--border-soft);
    border-radius: var(--radius-sm);
    font-size: 14px;
    color: var(--text);
    transition: all .2s;
}
.sp-app-item:hover { border-color: rgba(255,193,7,.3); color: var(--primary); }
.sp-app-item i { color: var(--primary); font-size: 13px; flex-shrink: 0; }

/* ── RELATED PRODUCTS ── */
.sp-related-section {
    background: var(--dark);
    padding: 56px 0;
    border-top: 1px solid var(--border-soft);
}

.sp-section-head {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    margin-bottom: 32px;
    gap: 16px;
    flex-wrap: wrap;
}
.sp-section-label {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--primary);
    font-weight: 700;
    margin-bottom: 6px;
}
.sp-section-title {
    font-family: 'Rajdhani', sans-serif;
    font-size: 28px;
    font-weight: 700;
    color: #fff;
    margin: 0;
}
.sp-view-all {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    color: var(--primary);
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    white-space: nowrap;
    transition: gap .2s;
}
.sp-view-all:hover { gap: 12px; color: var(--primary); }

.sp-related-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
@media (max-width: 1024px) { .sp-related-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 480px)  { .sp-related-grid { grid-template-columns: 1fr; } }

/* Related product card */
.sp-rel-card {
    background: var(--dark2);
    border: 1px solid var(--border-soft);
    border-radius: var(--radius);
    overflow: hidden;
    transition: transform .25s, border-color .25s, box-shadow .25s;
    position: relative;
}
.sp-rel-card:hover {
    transform: translateY(-5px);
    border-color: rgba(255,193,7,0.3);
    box-shadow: 0 12px 32px rgba(0,0,0,0.4);
}
.sp-rel-card-img {
    aspect-ratio: 4/3;
    overflow: hidden;
    background: var(--dark3);
    display: flex; align-items: center; justify-content: center;
    position: relative;
}
.sp-rel-card-img img {
    max-width: 80%; max-height: 80%;
    object-fit: contain;
    transition: transform .4s;
}
.sp-rel-card:hover .sp-rel-card-img img { transform: scale(1.06); }
.sp-rel-card-overlay {
    position: absolute; inset: 0;
    background: rgba(13,27,42,0.75);
    display: flex; align-items: center; justify-content: center;
    opacity: 0; transition: opacity .25s;
}
.sp-rel-card:hover .sp-rel-card-overlay { opacity: 1; }
.sp-rel-overlay-btn {
    display: inline-flex; align-items: center; gap: 7px;
    background: var(--primary); color: var(--dark);
    font-weight: 700; font-size: 13px;
    padding: 9px 20px; border-radius: 50px;
    text-decoration: none; transition: transform .2s;
}
.sp-rel-overlay-btn:hover { transform: scale(1.05); color: var(--dark); }

.sp-rel-card-body { padding: 16px; }
.sp-rel-cat { font-size: 10px; text-transform: uppercase; letter-spacing: 1px; color: var(--text-muted); margin-bottom: 6px; }
.sp-rel-name { font-family: 'Rajdhani', sans-serif; font-size: 16px; font-weight: 700; color: #fff; text-decoration: none; line-height: 1.3; display: block; margin-bottom: 6px; transition: color .2s; }
.sp-rel-name:hover { color: var(--primary); }
.sp-rel-stars { color: var(--primary); font-size: 11px; display: flex; gap: 1px; margin-bottom: 10px; }
.sp-rel-footer { display: flex; align-items: center; justify-content: space-between; padding-top: 10px; border-top: 1px solid var(--border-soft); }
.sp-rel-moq { font-size: 12px; color: var(--text-muted); }
.sp-rel-moq strong { color: var(--primary); }
.sp-rel-link { font-size: 12px; font-weight: 600; color: var(--primary); text-decoration: none; display: flex; align-items: center; gap: 4px; transition: gap .15s; }
.sp-rel-link:hover { gap: 8px; }

/* ── Sticky Enquiry Bar (mobile) ── */
.sp-sticky-bar {
    display: none;
    position: fixed;
    bottom: 0; left: 0; right: 0;
    background: var(--dark2);
    border-top: 1px solid var(--border);
    padding: 12px 20px;
    z-index: 999;
    gap: 12px;
    align-items: center;
    backdrop-filter: blur(10px);
}
@media (max-width: 768px) { .sp-sticky-bar { display: flex; } }

.sp-sticky-product-name { font-size: 13px; font-weight: 600; color: #fff; flex: 1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.sp-sticky-btn {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--primary); color: var(--dark);
    font-weight: 700; font-size: 13px;
    padding: 10px 20px; border-radius: 50px;
    text-decoration: none; white-space: nowrap;
    flex-shrink: 0;
}

/* ── Zoom Modal ── */
.sp-zoom-modal {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.92);
    z-index: 9999;
    align-items: center;
    justify-content: center;
    cursor: zoom-out;
}
.sp-zoom-modal.open { display: flex; }
.sp-zoom-modal img { max-width: 90vw; max-height: 90vh; object-fit: contain; border-radius: var(--radius); }
.sp-zoom-close {
    position: absolute; top: 20px; right: 24px;
    color: #fff; font-size: 28px; cursor: pointer;
    background: none; border: none; line-height: 1;
    opacity: .7; transition: opacity .2s;
}
.sp-zoom-close:hover { opacity: 1; }

/* Misc */
.sp-divider { height: 1px; background: var(--border-soft); margin: 20px 0; }
.copied-toast {
    position: fixed; bottom: 80px; left: 50%; transform: translateX(-50%);
    background: var(--primary); color: var(--dark);
    padding: 8px 20px; border-radius: 50px; font-weight: 700; font-size: 13px;
    z-index: 9998; opacity: 0; transition: opacity .3s;
    pointer-events: none;
}
.copied-toast.show { opacity: 1; }

@media (max-width: 768px) {
    .sp-product-title { font-size: 26px; }
    .sp-quick-specs { grid-template-columns: 1fr; }
    body { padding-bottom: 70px; }
}
</style>
</head>
<body class="homepage4-body">

<?php include 'include/header.php'; ?>

<!-- BREADCRUMB -->
<div class="sp-breadcrumb-area">
    <div class="container">
        <nav class="sp-breadcrumb">
            <a href="<?php echo $base_url; ?>index.php"><i class="fa-solid fa-house"></i> Home</a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <a href="<?php echo $base_url; ?>products.php">Products</a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <a href="<?php echo $base_url; ?>products.php?filter=<?php echo $product['category']; ?>"><?php echo ucfirst($product['category']); ?></a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="current"><?php echo htmlspecialchars($product['name']); ?></span>
        </nav>
    </div>
</div>

<!-- MAIN PRODUCT AREA -->
<section class="sp-main-section">
    <div class="container">
        <div class="sp-layout">

            <!-- ═══ COLUMN 1: GALLERY ═══ -->
            <div class="sp-gallery" data-aos="fade-right" data-aos-duration="700">
                <div class="sp-main-img-wrap" id="mainImgWrap">
                    <?php if ($product['badge'] && $product['badge_type']): ?>
                    <div class="sp-badge-overlay">
                        <span class="sp-badge <?php echo $badge_class; ?>"><?php echo htmlspecialchars($product['badge']); ?></span>
                    </div>
                    <?php endif; ?>
                    <img src="<?php echo $gallery[0]; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" id="mainProductImg">
                    <div class="sp-zoom-hint"><i class="fa-solid fa-magnifying-glass-plus"></i> Click to zoom</div>
                </div>
                <?php if (count($gallery) > 1): ?>
                <div class="sp-thumbnails" id="thumbGallery">
                    <?php foreach ($gallery as $i => $img): ?>
                    <div class="sp-thumb <?php echo $i === 0 ? 'active' : ''; ?>" data-img="<?php echo $img; ?>">
                        <img src="<?php echo $img; ?>" alt="Product image <?php echo $i+1; ?>">
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- ═══ COLUMN 2: PRODUCT INFO ═══ -->
            <div class="sp-info" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">

                <div class="sp-category-tag">
                    <i class="fa-solid fa-tag"></i>
                    <?php echo ucfirst(htmlspecialchars($product['category'])); ?>
                </div>

                <h1 class="sp-product-title"><?php echo htmlspecialchars($product['name']); ?></h1>

                <div class="sp-rating-row">
                    <div class="sp-stars"><?php echo $stars_html; ?></div>
                    <span class="sp-rating-val"><?php echo number_format($rating, 1); ?></span>
                    <span class="sp-reviews-count">(<?php echo $product['reviews']; ?> verified reviews)</span>
                    <?php if (!empty($product['sku'])): ?>
                    <span class="sp-sku-tag">SKU: <?php echo htmlspecialchars($product['sku']); ?></span>
                    <?php endif; ?>
                </div>

                <p class="sp-short-desc"><?php echo htmlspecialchars($product['description']); ?></p>

                <!-- Quick Spec Pills -->
                <div class="sp-quick-specs">
                    <?php if (!empty($product['brand'])): ?>
                    <div class="sp-qs-item">
                        <div class="sp-qs-icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="sp-qs-text">
                            <span class="sp-qs-label">Brand</span>
                            <span class="sp-qs-val"><?php echo htmlspecialchars($product['brand']); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($product['material'])): ?>
                    <div class="sp-qs-item">
                        <div class="sp-qs-icon"><i class="fa-solid fa-cube"></i></div>
                        <div class="sp-qs-text">
                            <span class="sp-qs-label">Material</span>
                            <span class="sp-qs-val"><?php echo htmlspecialchars($product['material']); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($product['weight'])): ?>
                    <div class="sp-qs-item">
                        <div class="sp-qs-icon"><i class="fa-solid fa-weight-scale"></i></div>
                        <div class="sp-qs-text">
                            <span class="sp-qs-label">Weight</span>
                            <span class="sp-qs-val"><?php echo htmlspecialchars($product['weight']); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($product['warranty'])): ?>
                    <div class="sp-qs-item">
                        <div class="sp-qs-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="sp-qs-text">
                            <span class="sp-qs-label">Warranty</span>
                            <span class="sp-qs-val"><?php echo htmlspecialchars($product['warranty']); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($product['country_of_origin'])): ?>
                    <div class="sp-qs-item">
                        <div class="sp-qs-icon"><i class="fa-solid fa-flag"></i></div>
                        <div class="sp-qs-text">
                            <span class="sp-qs-label">Origin</span>
                            <span class="sp-qs-val"><?php echo htmlspecialchars($product['country_of_origin']); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($product['dimensions'])): ?>
                    <div class="sp-qs-item">
                        <div class="sp-qs-icon"><i class="fa-solid fa-ruler-combined"></i></div>
                        <div class="sp-qs-text">
                            <span class="sp-qs-label">Dimensions</span>
                            <span class="sp-qs-val"><?php echo htmlspecialchars($product['dimensions']); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Availability -->
                <div class="sp-avail-row">
                    <div class="sp-stock-dot"></div>
                    <div class="sp-stock-text"><?php echo htmlspecialchars($product['availability'] ?? 'In Stock'); ?></div>
                    <div class="sp-moq-info">Min. Order: <strong><?php echo htmlspecialchars($product['moq']); ?></strong></div>
                </div>

                <!-- CTAs -->
                <div class="sp-cta-group">
                    <a href="<?php echo $base_url; ?>contact-us.php?product=<?php echo urlencode($product['name']); ?>" class="sp-btn-primary">
                        <i class="fa-solid fa-file-invoice"></i> Get Bulk Quote
                    </a>
                    <a href="tel:+919876543210" class="sp-btn-outline">
                        <i class="fa-solid fa-phone"></i> Call Us
                    </a>
                    <a href="https://wa.me/919876543210?text=Hi%2C+I%20am%20interested%20in%20<?php echo urlencode($product['name']); ?>%20(SKU%3A%20<?php echo urlencode($product['sku'] ?? ''); ?>)" 
                       class="sp-btn-whatsapp" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp
                    </a>
                </div>

                <!-- Trust -->
                <div class="sp-trust-row">
                    <div class="sp-trust-item"><i class="fa-solid fa-shield-halved"></i> ISI Certified</div>
                    <div class="sp-trust-item"><i class="fa-solid fa-truck-fast"></i> Pan India Delivery</div>
                    <div class="sp-trust-item"><i class="fa-solid fa-headset"></i> 24/7 Support</div>
                    <div class="sp-trust-item"><i class="fa-solid fa-handshake"></i> Bulk Pricing</div>
                </div>

                <!-- Share -->
                <div class="sp-divider"></div>
                <div class="sp-share-row">
                    <span class="sp-share-label">Share:</span>
                    <a href="https://wa.me/?text=<?php echo urlencode($product['name'] . ' - ' . $base_url . 'single-product.php?id=' . $product['id']); ?>" class="sp-share-btn wa" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($base_url . 'single-product.php?id=' . $product['id']); ?>" class="sp-share-btn fb" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode($base_url . 'single-product.php?id=' . $product['id']); ?>" class="sp-share-btn li" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <button class="sp-share-copy" id="copyLinkBtn" title="Copy Link"><i class="fa-solid fa-link"></i></button>
                </div>
            </div>

            <!-- ═══ COLUMN 3: SIDEBAR ═══ -->
            <div class="sp-sidebar sp-sidebar-col" data-aos="fade-left" data-aos-duration="700" data-aos-delay="200">

                <!-- Enquiry Form -->
                <div class="sp-sidebar-card">
                    <div class="sp-sidebar-card-head">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <h4>Quick Enquiry</h4>
                    </div>
                    <div class="sp-sidebar-card-body">
                        <form class="sp-enquiry-form" id="enquiryForm" action="<?php echo $base_url; ?>contact-us.php" method="GET">
                            <input type="hidden" name="product" value="<?php echo htmlspecialchars($product['name']); ?>">
                            <div class="sp-form-group">
                                <label>Your Name *</label>
                                <input type="text" class="sp-form-control" name="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="sp-form-group">
                                <label>Phone Number *</label>
                                <input type="tel" class="sp-form-control" name="phone" placeholder="+91 XXXXX XXXXX" required>
                            </div>
                            <div class="sp-form-group">
                                <label>Company Name</label>
                                <input type="text" class="sp-form-control" name="company" placeholder="Your company (optional)">
                            </div>
                            <div class="sp-form-group">
                                <label>Quantity Required</label>
                                <input type="text" class="sp-form-control" name="quantity" placeholder="e.g. 500 units, 10 tons...">
                            </div>
                            <div class="sp-form-group">
                                <label>Message</label>
                                <textarea class="sp-form-control" name="message" placeholder="Tell us your requirement..."></textarea>
                            </div>
                            <button type="submit" class="sp-submit-btn">
                                <i class="fa-solid fa-paper-plane"></i> Send Enquiry
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Certifications -->
                <?php if (!empty($certifications)): ?>
                <div class="sp-sidebar-card">
                    <div class="sp-sidebar-card-head">
                        <i class="fa-solid fa-certificate"></i>
                        <h4>Certifications</h4>
                    </div>
                    <div class="sp-sidebar-card-body">
                        <div class="sp-cert-list">
                            <?php foreach ($certifications as $cert): ?>
                            <div class="sp-cert-item">
                                <i class="fa-solid fa-circle-check"></i>
                                <?php echo htmlspecialchars($cert); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Delivery Info -->
                <div class="sp-sidebar-card">
                    <div class="sp-sidebar-card-head">
                        <i class="fa-solid fa-truck-fast"></i>
                        <h4>Delivery & Support</h4>
                    </div>
                    <div class="sp-sidebar-card-body">
                        <div class="sp-delivery-list">
                            <div class="sp-del-item">
                                <i class="fa-solid fa-truck-fast"></i>
                                <div class="sp-del-item-text">
                                    <strong>Pan India Delivery</strong>
                                    <?php echo htmlspecialchars($product['delivery_info'] ?? 'Fast & reliable shipping available'); ?>
                                </div>
                            </div>
                            <div class="sp-del-item">
                                <i class="fa-solid fa-headset"></i>
                                <div class="sp-del-item-text">
                                    <strong>24/7 Customer Support</strong>
                                    Dedicated team always ready to assist you
                                </div>
                            </div>
                            <div class="sp-del-item">
                                <i class="fa-solid fa-handshake"></i>
                                <div class="sp-del-item-text">
                                    <strong>Bulk Order Pricing</strong>
                                    Special discounts on large quantity orders
                                </div>
                            </div>
                            <div class="sp-del-item">
                                <i class="fa-solid fa-rotate-left"></i>
                                <div class="sp-del-item-text">
                                    <strong>Easy Returns</strong>
                                    Hassle-free return policy for defective goods
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- TABS SECTION -->
<div class="sp-tabs-section">
    <div class="container">

        <div class="sp-tabs-nav" id="productTabs">
            <button class="sp-tab-btn active" data-tab="overview">Overview</button>
            <?php if (!empty($features)): ?>
            <button class="sp-tab-btn" data-tab="features">Key Features</button>
            <?php endif; ?>
            <?php if (!empty($specs)): ?>
            <button class="sp-tab-btn" data-tab="specs">Specifications</button>
            <?php endif; ?>
            <?php if (!empty($applications)): ?>
            <button class="sp-tab-btn" data-tab="applications">Applications</button>
            <?php endif; ?>
        </div>

        <!-- Overview -->
        <div class="sp-tab-pane active" id="tab-overview">
            <p class="sp-overview-text">
                <?php echo nl2br(htmlspecialchars(!empty($product['full_description']) ? $product['full_description'] : $product['description'])); ?>
            </p>
        </div>

        <!-- Features -->
        <?php if (!empty($features)): ?>
        <div class="sp-tab-pane" id="tab-features">
            <div class="sp-features-grid">
                <?php foreach ($features as $f): ?>
                <div class="sp-feature-item">
                    <div class="sp-feature-check"><i class="fa-solid fa-check"></i></div>
                    <div class="sp-feature-text"><?php echo htmlspecialchars($f); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Specifications -->
        <?php if (!empty($specs)): ?>
        <div class="sp-tab-pane" id="tab-specs">
            <table class="sp-specs-table">
                <?php foreach ($specs as $key => $val): ?>
                <tr>
                    <td><?php echo htmlspecialchars($key); ?></td>
                    <td><?php echo htmlspecialchars($val); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>

        <!-- Applications -->
        <?php if (!empty($applications)): ?>
        <div class="sp-tab-pane" id="tab-applications">
            <div class="sp-apps-grid">
                <?php foreach ($applications as $app): ?>
                <div class="sp-app-item">
                    <i class="fa-solid fa-circle-dot"></i>
                    <?php echo htmlspecialchars($app); ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>

<!-- RELATED PRODUCTS -->
<?php if (!empty($related_products)): ?>
<section class="sp-related-section">
    <div class="container">
        <div class="sp-section-head">
            <div>
                <div class="sp-section-label">You Might Also Like</div>
                <h2 class="sp-section-title">Related Products</h2>
            </div>
            <a href="<?php echo $base_url; ?>products.php" class="sp-view-all">
                View All <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="sp-related-grid">
            <?php foreach ($related_products as $rel):
                $rel_rating = floatval($rel['rating']);
                $rel_stars = '';
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= floor($rel_rating)) $rel_stars .= '<i class="fa-solid fa-star"></i>';
                    elseif ($i - $rel_rating < 1 && $i - $rel_rating > 0) $rel_stars .= '<i class="fa-solid fa-star-half-stroke"></i>';
                    else $rel_stars .= '<i class="fa-regular fa-star"></i>';
                }
            ?>
            <div class="sp-rel-card" data-aos="fade-up" data-aos-duration="600">
                <div class="sp-rel-card-img">
                    <img src="<?php echo $base_url . $rel['image']; ?>" 
                         alt="<?php echo htmlspecialchars($rel['name']); ?>"
                         onerror="this.src='<?php echo $base_url; ?>assets/img/all-images/service/service-img13.png'">
                    <div class="sp-rel-card-overlay">
                        <a href="<?php echo $base_url; ?>single-product.php?id=<?php echo $rel['id']; ?>" class="sp-rel-overlay-btn">
                            <i class="fa-solid fa-eye"></i> View Details
                        </a>
                    </div>
                </div>
                <div class="sp-rel-card-body">
                    <div class="sp-rel-cat"><?php echo ucfirst(htmlspecialchars($rel['category'])); ?></div>
                    <a href="<?php echo $base_url; ?>single-product.php?id=<?php echo $rel['id']; ?>" class="sp-rel-name">
                        <?php echo htmlspecialchars($rel['name']); ?>
                    </a>
                    <div class="sp-rel-stars"><?php echo $rel_stars; ?></div>
                    <div class="sp-rel-footer">
                        <div class="sp-rel-moq">MOQ: <strong><?php echo htmlspecialchars($rel['moq']); ?></strong></div>
                        <a href="<?php echo $base_url; ?>single-product.php?id=<?php echo $rel['id']; ?>" class="sp-rel-link">
                            Details <i class="fa-solid fa-arrow-right"></i>
                        </a>
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
<div class="sp-sticky-bar">
    <div class="sp-sticky-product-name"><?php echo htmlspecialchars($product['name']); ?></div>
    <a href="<?php echo $base_url; ?>contact-us.php?product=<?php echo urlencode($product['name']); ?>" class="sp-sticky-btn">
        <i class="fa-solid fa-file-invoice"></i> Get Quote
    </a>
</div>

<!-- Zoom Modal -->
<div class="sp-zoom-modal" id="zoomModal">
    <button class="sp-zoom-close" id="zoomClose">&times;</button>
    <img src="" alt="Zoom" id="zoomImg">
</div>

<!-- Copied Toast -->
<div class="copied-toast" id="copiedToast">Link Copied! 🎉</div>

<!--===== JS =======-->
<script src="<?php echo $base_url; ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/fontawesome.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/aos.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/gsap.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/ScrollTrigger.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/sidebar.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/mobilemenu.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/gsap-animation.js"></script>
<script src="<?php echo $base_url; ?>assets/js/main.js"></script>
<script>
$(document).ready(function () {

    if (typeof AOS !== 'undefined') AOS.init({ duration: 700, once: true });

    /* ── Thumbnail Gallery ── */
    $('#thumbGallery').on('click', '.sp-thumb', function () {
        var img = $(this).data('img');
        $('#mainProductImg').fadeOut(100, function () {
            $(this).attr('src', img).fadeIn(200);
        });
        $('.sp-thumb').removeClass('active');
        $(this).addClass('active');
    });

    /* ── Zoom Modal ── */
    $('#mainImgWrap').on('click', function () {
        var src = $('#mainProductImg').attr('src');
        $('#zoomImg').attr('src', src);
        $('#zoomModal').addClass('open');
        $('body').css('overflow', 'hidden');
    });
    $('#zoomClose, #zoomModal').on('click', function (e) {
        if ($(e.target).is('#zoomModal') || $(e.target).is('#zoomClose')) {
            $('#zoomModal').removeClass('open');
            $('body').css('overflow', '');
        }
    });
    $(document).on('keydown', function (e) {
        if (e.key === 'Escape') { $('#zoomModal').removeClass('open'); $('body').css('overflow', ''); }
    });

    /* ── Tabs ── */
    $('#productTabs').on('click', '.sp-tab-btn', function () {
        var tab = $(this).data('tab');
        $('.sp-tab-btn').removeClass('active');
        $(this).addClass('active');
        $('.sp-tab-pane').removeClass('active');
        $('#tab-' + tab).addClass('active');
    });

    /* ── Copy Link ── */
    $('#copyLinkBtn').on('click', function () {
        var url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(function () { showToast(); });
        } else {
            var $temp = $('<input>');
            $('body').append($temp);
            $temp.val(url).select();
            document.execCommand('copy');
            $temp.remove();
            showToast();
        }
    });

    function showToast() {
        $('#copiedToast').addClass('show');
        setTimeout(function () { $('#copiedToast').removeClass('show'); }, 2500);
    }

});
</script>
</body>
</html>