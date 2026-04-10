<?php
$base_url = "http://localhost/nirajindustries/";
include 'include/config.php';

$slug = isset($_GET['slug']) ? trim($conn->real_escape_string($_GET['slug'])) : '';

if (!$slug) {
    header('Location: ' . $base_url . 'blogs');
    exit;
}

$result = $conn->query("
    SELECT b.*, bc.name as cat_name, bc.slug as cat_slug
    FROM blogs b
    LEFT JOIN blog_categories bc ON bc.id = b.categories
    WHERE b.slug = '$slug' AND b.is_published = 1
    LIMIT 1
");
$blog = $result->fetch_assoc();

if (!$blog) {
    header('Location: ' . $base_url . 'blogs');
    exit;
}

$conn->query("UPDATE blogs SET views = views + 1 WHERE id = " . intval($blog['id']));

$page_title       = htmlspecialchars($blog['title']) . ' | Niraj Industries';
$meta_description = htmlspecialchars($blog['excerpt']);

$prev_result = $conn->query("
    SELECT id, title, slug FROM blogs
    WHERE is_published = 1 AND published_at < '" . $conn->real_escape_string($blog['published_at']) . "'
    ORDER BY published_at DESC LIMIT 1
");
$prev_post = $prev_result->fetch_assoc();

$next_result = $conn->query("
    SELECT id, title, slug FROM blogs
    WHERE is_published = 1 AND published_at > '" . $conn->real_escape_string($blog['published_at']) . "'
    ORDER BY published_at ASC LIMIT 1
");
$next_post = $next_result->fetch_assoc();

$related_result = $conn->query("
    SELECT b.id, b.title, b.slug, b.image, b.excerpt, b.published_at, b.reading_time, bc.name as cat_name
    FROM blogs b
    LEFT JOIN blog_categories bc ON bc.id = b.categories
    WHERE b.categories = " . intval($blog['categories']) . "
      AND b.id != " . intval($blog['id']) . "
      AND b.is_published = 1
    ORDER BY b.published_at DESC LIMIT 3
");
$related_posts = [];
while ($row = $related_result->fetch_assoc()) $related_posts[] = $row;

$latest_result = $conn->query("
    SELECT id, title, image, published_at, slug
    FROM blogs WHERE is_published = 1
    ORDER BY published_at DESC LIMIT 4
");
$latest_posts = [];
while ($row = $latest_result->fetch_assoc()) $latest_posts[] = $row;

$categories_result = $conn->query("
    SELECT bc.id, bc.name, bc.slug, COUNT(b.id) as post_count
    FROM blog_categories bc
    LEFT JOIN blogs b ON b.categories = bc.id AND b.is_published = 1
    GROUP BY bc.id ORDER BY bc.sort_order ASC
");
$all_categories = [];
while ($row = $categories_result->fetch_assoc()) $all_categories[] = $row;

$tags_arr = [];
if (!empty($blog['tags'])) {
    $tags_arr = array_filter(array_map('trim', explode(',', $blog['tags'])));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/aos.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/mobile.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/main.css">
    <script src="<?php echo $base_url; ?>assets/js/plugins/jquery-3-6-0.min.js"></script>

<style>
:root {
    --ni-red:        #B5100E;
    --ni-red-dk:     #8f0b0a;
    --ni-red-soft:   #fdf0f0;
    --ni-dark:       #242223;
    --ni-dark-2:     #2e2c2c;
    --ni-white:      #ffffff;
    --ni-off-white:  #f8f6f6;
    --ni-bg:         #f5f3f3;
    --ni-text:       #242223;
    --ni-text2:      #4a4646;
    --ni-text3:      #888080;
    --ni-border:     #e8e4e4;
    --ni-radius:     14px;
    --ni-radius-sm:  8px;
    --ni-shadow:     0 2px 16px rgba(36,34,35,0.07);
    --ni-shadow-md:  0 8px 32px rgba(36,34,35,0.13);
    --ni-font-head:  'DM Serif Display', serif;
    --ni-font-body:  'Sora', sans-serif;
    --ni-trans:      all .25s cubic-bezier(.4,0,.2,1);
}

*, *::before, *::after { box-sizing: border-box; }
html, body { overflow-x: hidden; }

.ni-blog-detail-page {
    font-family: var(--ni-font-body);
    background: var(--ni-bg);
    color: var(--ni-text);
}

/* ══════════════════════════════════════════
   HERO BANNER — full width, image as bg
══════════════════════════════════════════ */
.ni-blog-hero {
    position: relative;
    width: 100%;
    height: 520px;
    overflow: hidden;
    margin-top: 80px; /* header height offset */
}

.ni-blog-hero .hero-img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
}

/* dark overlay — bottom heavy so text is readable */
.ni-blog-hero .hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to bottom,
        rgba(0,0,0,0.18) 0%,
        rgba(0,0,0,0.30) 40%,
        rgba(0,0,0,0.82) 100%
    );
    z-index: 1;
}

/* all text content sits above overlay */
.ni-blog-hero .hero-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 2;
    padding: 0 0 36px;
}

/* breadcrumb inside banner */
.ni-blog-hero .hero-breadcrumb {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 12px;
    color: rgba(255,255,255,0.70);
    flex-wrap: wrap;
    margin-bottom: 14px;
    padding: 0 0 0 2px;
}
.ni-blog-hero .hero-breadcrumb a {
    color: rgba(255,255,255,0.70);
    text-decoration: none;
    transition: color .2s;
}
.ni-blog-hero .hero-breadcrumb a:hover { color: #fff; }
.ni-blog-hero .hero-breadcrumb i { font-size: 8px; opacity: .7; }
.ni-blog-hero .hero-breadcrumb .current {
    color: rgba(255,255,255,0.95);
    font-weight: 500;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 300px;
}

/* category badge */
.ni-blog-hero .cat-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: var(--ni-red);
    color: #fff;
    font-size: 10px;
    font-weight: 800;
    padding: 5px 14px;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 14px;
}

/* main title */
.ni-blog-hero .hero-title {
    font-family: var(--ni-font-head);
    font-size: 38px;
    color: #ffffff;
    line-height: 1.25;
    margin-bottom: 18px;
    letter-spacing: -.3px;
    max-width: 820px;
    text-shadow: 0 2px 12px rgba(0,0,0,0.4);
}

/* meta row */
.ni-blog-hero .meta-strip {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 6px 20px;
}
.ni-blog-hero .meta-item {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 12.5px;
    color: rgba(255,255,255,0.80);
}
.ni-blog-hero .meta-item i {
    color: rgba(255,255,255,0.60);
    font-size: 12px;
}

/* red bottom border on banner */
.ni-blog-hero::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--ni-red);
    z-index: 3;
}

/* ── MAIN LAYOUT ── */
.ni-detail-area {
    padding: 40px 0 80px;
    background: var(--ni-bg);
}

/* ── CONTENT BOX ── */
.ni-content-box {
    background: var(--ni-white);
    border-radius: var(--ni-radius);
    border: 1px solid var(--ni-border);
    padding: 40px 44px;
    box-shadow: var(--ni-shadow);
    margin-bottom: 22px;
}

/* Blog body typography */
.ni-blog-body {
    font-size: 15.5px; color: var(--ni-text2); line-height: 1.9;
}
.ni-blog-body h2 {
    font-family: var(--ni-font-head);
    font-size: 24px; color: var(--ni-dark);
    margin: 34px 0 14px; padding-bottom: 10px;
    border-bottom: 2px solid var(--ni-border);
    letter-spacing: -.1px;
}
.ni-blog-body h3 { font-size: 19px; font-weight: 700; color: var(--ni-text); margin: 26px 0 11px; }
.ni-blog-body h4 { font-size: 16px; font-weight: 700; color: var(--ni-text); margin: 20px 0 9px; }
.ni-blog-body p { margin-bottom: 18px; }
.ni-blog-body ul, .ni-blog-body ol { padding-left: 22px; margin-bottom: 18px; }
.ni-blog-body ul li, .ni-blog-body ol li { margin-bottom: 9px; color: var(--ni-text2); line-height: 1.7; }
.ni-blog-body ul li::marker { color: var(--ni-red); }
.ni-blog-body ol li::marker { color: var(--ni-red); font-weight: 700; }
.ni-blog-body blockquote {
    background: var(--ni-red-soft); border-left: 4px solid var(--ni-red);
    padding: 18px 24px; border-radius: 0 var(--ni-radius-sm) var(--ni-radius-sm) 0;
    margin: 26px 0; font-style: italic; color: var(--ni-text);
    font-size: 15px; line-height: 1.75;
}
.ni-blog-body blockquote::before {
    content: '\201C'; font-size: 48px; color: var(--ni-red);
    font-family: var(--ni-font-head); line-height: 0;
    vertical-align: -18px; margin-right: 6px; opacity: .5;
}
.ni-blog-body img {
    width: 100%; border-radius: var(--ni-radius);
    margin: 22px 0; box-shadow: var(--ni-shadow); display: block;
}
.ni-blog-body strong { color: var(--ni-dark); font-weight: 700; }
.ni-blog-body a { color: var(--ni-red); text-decoration: underline; text-underline-offset: 3px; transition: color .2s; }
.ni-blog-body a:hover { color: var(--ni-red-dk); }
.ni-blog-body table { width: 100%; border-collapse: collapse; margin: 22px 0; font-size: 14px; }
.ni-blog-body table th { background: var(--ni-dark); color: var(--ni-white); padding: 11px 14px; text-align: left; font-weight: 600; }
.ni-blog-body table td { padding: 10px 14px; border-bottom: 1px solid var(--ni-border); color: var(--ni-text2); }
.ni-blog-body table tr:nth-child(even) td { background: var(--ni-off-white); }
.ni-blog-body code {
    background: var(--ni-off-white); border: 1px solid var(--ni-border);
    padding: 2px 7px; border-radius: 4px; font-size: 13.5px; color: var(--ni-red);
}

/* ── TAGS & SHARE ── */
.ni-tags-share {
    background: var(--ni-white); border-radius: var(--ni-radius);
    border: 1px solid var(--ni-border); padding: 20px 26px;
    display: flex; align-items: center; justify-content: space-between;
    flex-wrap: wrap; gap: 14px; margin-bottom: 22px; box-shadow: var(--ni-shadow);
}
.ni-tags-share .tags-row { display: flex; align-items: center; flex-wrap: wrap; gap: 8px; }
.ni-tags-share .tags-label { font-size: 12.5px; font-weight: 700; color: var(--ni-text); display: flex; align-items: center; gap: 5px; }
.ni-tags-share .tags-label i { color: var(--ni-red); }
.ni-tag-chip {
    background: var(--ni-off-white); border: 1px solid var(--ni-border);
    color: var(--ni-text2); font-size: 11.5px; font-weight: 500;
    padding: 5px 13px; border-radius: 20px; text-decoration: none; transition: var(--ni-trans);
}
.ni-tag-chip:hover { background: var(--ni-red); border-color: var(--ni-red); color: var(--ni-white); transform: translateY(-1px); }
.ni-tags-share .share-row { display: flex; align-items: center; gap: 9px; }
.ni-tags-share .share-label { font-size: 12.5px; font-weight: 700; color: var(--ni-text); }
.ni-share-btn {
    width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;
    border-radius: 50%; font-size: 14px; color: var(--ni-white); text-decoration: none; transition: var(--ni-trans);
}
.ni-share-btn:hover { transform: translateY(-3px); box-shadow: 0 6px 18px rgba(0,0,0,.15); color: var(--ni-white); }
.ni-share-btn.fb { background: #1877f2; }
.ni-share-btn.tw { background: #000; }
.ni-share-btn.li { background: #0077b5; }
.ni-share-btn.wa { background: #25d366; }

/* ── PREV / NEXT ── */
.ni-prev-next { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 36px; }
.ni-pn-card {
    background: var(--ni-white); border: 1px solid var(--ni-border);
    border-radius: var(--ni-radius); padding: 18px 20px; text-decoration: none;
    display: flex; flex-direction: column; gap: 7px;
    transition: var(--ni-trans); box-shadow: var(--ni-shadow); position: relative; overflow: hidden;
}
.ni-pn-card::before {
    content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 3px;
    background: var(--ni-red); transform: scaleX(0); transition: transform .3s ease;
}
.ni-pn-card:hover { border-color: rgba(181,16,14,0.25); box-shadow: var(--ni-shadow-md); transform: translateY(-2px); }
.ni-pn-card:hover::before { transform: scaleX(1); }
.ni-pn-card .pn-dir {
    font-size: 10.5px; font-weight: 800; color: var(--ni-red);
    text-transform: uppercase; letter-spacing: .7px; display: flex; align-items: center; gap: 5px;
}
.ni-pn-card .pn-title {
    font-size: 13.5px; font-weight: 600; color: var(--ni-text); line-height: 1.45;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; transition: color .2s;
}
.ni-pn-card:hover .pn-title { color: var(--ni-red); }
.ni-pn-card.next { text-align: right; align-items: flex-end; }

/* ── RELATED POSTS ── */
.ni-related-section { margin-top: 6px; }
.ni-related-head {
    font-family: var(--ni-font-head); font-size: 22px; color: var(--ni-dark);
    margin-bottom: 20px; display: flex; align-items: center; gap: 12px;
}
.ni-related-head::after {
    content: ''; flex: 1; height: 2px;
    background: linear-gradient(to right, var(--ni-border) 0%, transparent 100%);
}
.ni-related-card {
    background: var(--ni-white); border-radius: var(--ni-radius); overflow: hidden;
    border: 1px solid var(--ni-border); box-shadow: var(--ni-shadow);
    transition: var(--ni-trans); height: 100%; display: flex; flex-direction: column;
}
.ni-related-card:hover { transform: translateY(-5px); box-shadow: var(--ni-shadow-md); border-color: rgba(181,16,14,0.3); }
.ni-related-card .rc-img { height: 165px; overflow: hidden; background: var(--ni-red-soft); position: relative; }
.ni-related-card .rc-img img { width: 100%; height: 100%; object-fit: cover; transition: transform .45s ease; display: block; }
.ni-related-card:hover .rc-img img { transform: scale(1.07); }
.ni-related-card .rc-img .rc-cat-badge {
    position: absolute; top: 10px; left: 10px;
    background: var(--ni-red); color: var(--ni-white);
    font-size: 9.5px; font-weight: 800; padding: 3px 10px; border-radius: 20px;
    text-transform: uppercase; letter-spacing: .6px;
}
.ni-related-card .rc-body { padding: 16px 18px; flex: 1; display: flex; flex-direction: column; }
.ni-related-card .rc-body h5 {
    font-size: 14px; font-weight: 700; color: var(--ni-dark); line-height: 1.45; margin-bottom: 8px;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
}
.ni-related-card .rc-body h5 a { color: inherit; text-decoration: none; transition: color .2s; }
.ni-related-card .rc-body h5 a:hover { color: var(--ni-red); }
.ni-related-card .rc-body p {
    font-size: 12.5px; color: var(--ni-text3); line-height: 1.6; flex: 1;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
}
.ni-related-card .rc-footer {
    padding: 11px 18px; border-top: 1px solid var(--ni-border);
    display: flex; align-items: center; justify-content: space-between;
}
.ni-related-card .rc-footer span { font-size: 11.5px; color: var(--ni-text3); display: flex; align-items: center; gap: 4px; }
.ni-related-card .rc-footer span i { color: var(--ni-red); }
.ni-related-card .rc-footer a {
    font-size: 12px; font-weight: 700; color: var(--ni-dark); text-decoration: none;
    display: flex; align-items: center; gap: 4px; transition: var(--ni-trans);
}
.ni-related-card .rc-footer a:hover { color: var(--ni-red); }
.ni-related-card .rc-footer a i { font-size: 9px; }

/* ── SIDEBAR WIDGETS ── */
.ni-widget {
    background: var(--ni-white); border-radius: var(--ni-radius);
    border: 1px solid var(--ni-border); padding: 22px; margin-bottom: 20px; box-shadow: var(--ni-shadow);
}
.ni-widget-title {
    font-family: var(--ni-font-head); font-size: 17px; color: var(--ni-dark);
    margin-bottom: 16px; padding-bottom: 13px; border-bottom: 2.5px solid var(--ni-red);
    display: flex; align-items: center; gap: 8px;
}
.ni-widget-title i { color: var(--ni-red); font-size: 14px; }

/* Search */
.ni-search-box {
    display: flex; border: 1.5px solid var(--ni-border);
    border-radius: var(--ni-radius-sm); overflow: hidden; transition: border-color .2s;
}
.ni-search-box:focus-within { border-color: var(--ni-red); }
.ni-search-box input {
    flex: 1; border: none; outline: none; padding: 10px 13px; font-size: 13px;
    font-family: var(--ni-font-body); background: transparent; color: var(--ni-text);
}
.ni-search-box input::placeholder { color: var(--ni-text3); }
.ni-search-box button {
    background: var(--ni-red); border: none; padding: 0 15px;
    color: var(--ni-white); font-size: 13px; cursor: pointer; transition: background .2s;
}
.ni-search-box button:hover { background: var(--ni-red-dk); }

/* Latest Posts */
.ni-latest-item {
    display: flex; gap: 12px; padding: 12px 0;
    border-bottom: 1px solid var(--ni-border); text-decoration: none; transition: var(--ni-trans);
}
.ni-latest-item:first-child { padding-top: 0; }
.ni-latest-item:last-child { border-bottom: none; padding-bottom: 0; }
.ni-latest-item .li-thumb {
    width: 64px; height: 52px; border-radius: var(--ni-radius-sm); overflow: hidden;
    flex-shrink: 0; background: var(--ni-red-soft);
}
.ni-latest-item .li-thumb img { width: 100%; height: 100%; object-fit: cover; transition: transform .3s; }
.ni-latest-item:hover .li-thumb img { transform: scale(1.1); }
.ni-latest-item .li-info { flex: 1; }
.ni-latest-item .li-date {
    font-size: 11px; color: var(--ni-red); font-weight: 600;
    display: flex; align-items: center; gap: 4px; margin-bottom: 4px;
}
.ni-latest-item .li-info h6 {
    font-size: 12.5px; font-weight: 600; color: var(--ni-text); line-height: 1.45; margin: 0;
    transition: color .2s; display: -webkit-box; -webkit-line-clamp: 2;
    -webkit-box-orient: vertical; overflow: hidden;
}
.ni-latest-item:hover .li-info h6 { color: var(--ni-red); }

/* Categories */
.ni-cat-item {
    display: flex; align-items: center; justify-content: space-between;
    padding: 9px 11px; border-radius: var(--ni-radius-sm);
    text-decoration: none; font-size: 13px; color: var(--ni-text2);
    transition: var(--ni-trans); margin-bottom: 3px;
}
.ni-cat-item:last-child { margin-bottom: 0; }
.ni-cat-item .cat-left { display: flex; align-items: center; gap: 9px; }
.ni-cat-item .dot { width: 7px; height: 7px; border-radius: 50%; background: var(--ni-border); transition: background .2s; flex-shrink: 0; }
.ni-cat-item .cat-count {
    font-size: 10.5px; font-weight: 700; background: var(--ni-border);
    color: var(--ni-text3); padding: 2px 8px; border-radius: 20px; transition: var(--ni-trans);
}
.ni-cat-item:hover, .ni-cat-item.active-cat { background: var(--ni-red-soft); color: var(--ni-red); }
.ni-cat-item:hover .dot, .ni-cat-item.active-cat .dot { background: var(--ni-red); }
.ni-cat-item:hover .cat-count, .ni-cat-item.active-cat .cat-count { background: var(--ni-red); color: var(--ni-white); }

/* Tags */
.ni-tags-wrap { display: flex; flex-wrap: wrap; gap: 8px; }
.ni-tag {
    font-size: 12px; font-weight: 500; background: var(--ni-off-white);
    border: 1px solid var(--ni-border); color: var(--ni-text2);
    padding: 5px 13px; border-radius: 20px; text-decoration: none; transition: var(--ni-trans);
}
.ni-tag:hover { background: var(--ni-red); border-color: var(--ni-red); color: var(--ni-white); }

/* CTA Widget */
.ni-cta-widget {
    background: var(--ni-dark); border-radius: var(--ni-radius);
    padding: 28px 22px; text-align: center; position: relative;
    overflow: hidden; margin-bottom: 20px; border: 1px solid rgba(181,16,14,0.2);
}
.ni-cta-widget::before {
    content: ''; position: absolute; right: -30px; top: -30px;
    width: 140px; height: 140px;
    background: radial-gradient(circle, rgba(181,16,14,0.15) 0%, transparent 70%);
    border-radius: 50%;
}
.ni-cta-widget .cta-icon {
    width: 54px; height: 54px; background: rgba(181,16,14,0.15); border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 13px; border: 1.5px solid rgba(181,16,14,0.3);
    font-size: 22px; color: var(--ni-red); position: relative;
}
.ni-cta-widget h5 { color: var(--ni-white); font-family: var(--ni-font-head); font-size: 18px; margin-bottom: 7px; }
.ni-cta-widget p { color: rgba(255,255,255,.6); font-size: 12.5px; line-height: 1.65; margin-bottom: 16px; }
.ni-cta-btn {
    display: flex; align-items: center; justify-content: center; gap: 7px;
    background: var(--ni-red); color: var(--ni-white); font-size: 13px; font-weight: 700;
    padding: 11px 20px; border-radius: 30px; text-decoration: none;
    transition: var(--ni-trans); border: 2px solid var(--ni-red); font-family: var(--ni-font-body);
}
.ni-cta-btn:hover { background: transparent; color: var(--ni-red); }
.ni-cta-btn i { font-size: 11px; }

/* ── AOS FIX ── */
[data-aos] { opacity: 1 !important; transform: none !important; transition: none !important; visibility: visible !important; }

/* ── RESPONSIVE ── */
@media (max-width: 992px) {
    .ni-blog-hero { height: 420px; }
    .ni-blog-hero .hero-title { font-size: 28px; }
    .ni-content-box { padding: 28px 26px; }
}
@media (max-width: 768px) {
    .ni-blog-hero { height: 340px; margin-top: 70px; }
    .ni-blog-hero .hero-title { font-size: 22px; }
    .ni-blog-hero .hero-content { padding-bottom: 24px; }
    .ni-content-box { padding: 22px 18px; }
    .ni-blog-body { font-size: 14.5px; }
    .ni-blog-body h2 { font-size: 20px; }
    .ni-prev-next { grid-template-columns: 1fr; }
    .ni-tags-share { flex-direction: column; align-items: flex-start; }
    .ni-blog-hero .hero-breadcrumb .current { max-width: 180px; }
}
@media (max-width: 480px) {
    .ni-blog-hero { height: 280px; }
    .ni-blog-hero .hero-title { font-size: 19px; }
}
</style>
</head>
<body class="homepage4-body ni-blog-detail-page">

<?php include 'include/header.php'; ?>

<!-- ══ HERO BANNER — full width image ══════════════════════ -->
<div class="ni-blog-hero">

    <?php if (!empty($blog['image'])): ?>
    <img class="hero-img"
         src="<?php echo $base_url . htmlspecialchars($blog['image']); ?>"
         alt="<?php echo htmlspecialchars($blog['image_alt'] ?? $blog['title']); ?>"
         onerror="this.style.background='#242223'">
    <?php else: ?>
    <div style="position:absolute;inset:0;background:#242223;"></div>
    <?php endif; ?>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="container">

            <!-- Breadcrumb inside banner -->
            <div class="hero-breadcrumb">
                <a href="<?php echo $base_url; ?>"><i class="fa-solid fa-house"></i></a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="<?php echo $base_url; ?>blogs">Blogs &amp; News</a>
                <?php if (!empty($blog['cat_name'])): ?>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="<?php echo $base_url; ?>blogs?category=<?php echo $blog['categories']; ?>"><?php echo htmlspecialchars($blog['cat_name']); ?></a>
                <?php endif; ?>
                <i class="fa-solid fa-chevron-right"></i>
                <span class="current"><?php echo htmlspecialchars(mb_strimwidth($blog['title'], 0, 55, '...')); ?></span>
            </div>

            <!-- Category badge -->
            <?php if (!empty($blog['cat_name'])): ?>
            <div class="cat-badge">
                <i class="fa-solid fa-tag"></i>
                <?php echo htmlspecialchars($blog['cat_name']); ?>
            </div>
            <?php endif; ?>

            <!-- Title -->
            <h1 class="hero-title"><?php echo htmlspecialchars($blog['title']); ?></h1>

            <!-- Meta -->
            <div class="meta-strip">
                <div class="meta-item">
                    <i class="fa-regular fa-calendar"></i>
                    <?php echo date('d M Y', strtotime($blog['published_at'])); ?>
                </div>
                <div class="meta-item">
                    <i class="fa-regular fa-clock"></i>
                    <?php echo $blog['reading_time']; ?> min read
                </div>
                <div class="meta-item">
                    <i class="fa-regular fa-eye"></i>
                    <?php echo number_format($blog['views']); ?> views
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ══ MAIN CONTENT ═══════════════════════════════════════ -->
<section class="ni-detail-area">
    <div class="container">
        <div class="row g-4">

            <!-- ── LEFT: ARTICLE ── -->
            <div class="col-lg-8">

                <!-- Content Box -->
                <div class="ni-content-box">
                    <div class="ni-blog-body" style="text-align:justify;">
                        <?php
                        $content = $blog['content'];
                        $paragraphs = preg_split('/\n\s*\n/', trim($content));
                        foreach ($paragraphs as $para) {
                            $para = trim($para);
                            if (!empty($para)) {
                                echo '<p>' . nl2br(htmlspecialchars($para)) . '</p>';
                            }
                        }
                        ?>
                    </div>
                </div>

                <!-- Tags & Share -->
                <div class="ni-tags-share">
                    <?php if (!empty($tags_arr)): ?>
                    <div class="tags-row">
                        <span class="tags-label"><i class="fa-solid fa-tags"></i> Tags:</span>
                        <?php foreach ($tags_arr as $tag): ?>
                        <a href="<?php echo $base_url; ?>blogs?search=<?php echo urlencode($tag); ?>" class="ni-tag-chip">
                            <?php echo htmlspecialchars($tag); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <div class="share-row">
                        <span class="share-label">Share:</span>
                        <?php $share_url = urlencode($base_url . 'blog-details?slug=' . $blog['slug']); ?>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" class="ni-share-btn fb"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo urlencode($blog['title']); ?>" target="_blank" class="ni-share-btn tw"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $share_url; ?>" target="_blank" class="ni-share-btn li"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://wa.me/919579179996?text=<?php echo urlencode('Hello, I want to inquire about PVC pipes.'); ?>" target="_blank" class="ni-share-btn wa"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Prev / Next -->
                <?php if ($prev_post || $next_post): ?>
                <div class="ni-prev-next">
                    <?php if ($prev_post): ?>
                    <a href="<?php echo $base_url; ?>blog-details?slug=<?php echo urlencode($prev_post['slug']); ?>" class="ni-pn-card">
                        <span class="pn-dir"><i class="fa-solid fa-arrow-left"></i> Previous</span>
                        <span class="pn-title"><?php echo htmlspecialchars($prev_post['title']); ?></span>
                    </a>
                    <?php else: ?><div></div><?php endif; ?>
                    <?php if ($next_post): ?>
                    <a href="<?php echo $base_url; ?>blog-details?slug=<?php echo urlencode($next_post['slug']); ?>" class="ni-pn-card next">
                        <span class="pn-dir">Next <i class="fa-solid fa-arrow-right"></i></span>
                        <span class="pn-title"><?php echo htmlspecialchars($next_post['title']); ?></span>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <!-- Related Posts -->
                <?php if (!empty($related_posts)): ?>
                <div class="ni-related-section">
                    <div class="ni-related-head">Related Articles</div>
                    <div class="row g-3">
                        <?php foreach ($related_posts as $rp): ?>
                        <div class="col-md-4">
                            <div class="ni-related-card">
                                <div class="rc-img">
                                    <?php if (!empty($rp['cat_name'])): ?>
                                    <span class="rc-cat-badge"><?php echo htmlspecialchars($rp['cat_name']); ?></span>
                                    <?php endif; ?>
                                    <img src="<?php echo $base_url . htmlspecialchars($rp['image']); ?>"
                                         alt="<?php echo htmlspecialchars($rp['title']); ?>"
                                         onerror="this.style.display='none'">
                                </div>
                                <div class="rc-body">
                                    <h5>
                                        <a href="<?php echo $base_url; ?>blog-details?slug=<?php echo urlencode($rp['slug']); ?>">
                                            <?php echo htmlspecialchars($rp['title']); ?>
                                        </a>
                                    </h5>
                                    <p><?php echo htmlspecialchars($rp['excerpt']); ?></p>
                                </div>
                                <div class="rc-footer">
                                    <span><i class="fa-regular fa-clock"></i> <?php echo $rp['reading_time']; ?> min</span>
                                    <a href="<?php echo $base_url; ?>blog-details?slug=<?php echo urlencode($rp['slug']); ?>">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

            </div>

            <!-- ── RIGHT: SIDEBAR ── -->
            <div class="col-lg-4">

                <!-- Search -->
                <div class="ni-widget">
                    <div class="ni-widget-title"><i class="fa-solid fa-magnifying-glass"></i> Search Articles</div>
                    <form method="GET" action="<?php echo $base_url; ?>blogs">
                        <div class="ni-search-box">
                            <input type="text" name="search" placeholder="Type to search...">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>

                <!-- Latest Posts -->
                <?php if (!empty($latest_posts)): ?>
                <div class="ni-widget">
                    <div class="ni-widget-title"><i class="fa-solid fa-fire-flame-curved"></i> Latest Posts</div>
                    <?php foreach ($latest_posts as $lp): ?>
                    <a href="<?php echo $base_url; ?><?php echo urlencode($lp['slug']); ?>" class="ni-latest-item">
                        <div class="li-thumb">
                            <img src="<?php echo $base_url . htmlspecialchars($lp['image'] ?? ''); ?>"
                                 alt="<?php echo htmlspecialchars($lp['title']); ?>"
                                 onerror="this.style.display='none'">
                        </div>
                        <div class="li-info">
                            <span class="li-date"><i class="fa-regular fa-calendar"></i><?php echo date('d M Y', strtotime($lp['published_at'])); ?></span>
                            <h6><?php echo htmlspecialchars($lp['title']); ?></h6>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <!-- Categories -->
                <?php if (!empty($all_categories)): ?>
                <div class="ni-widget">
                    <div class="ni-widget-title"><i class="fa-solid fa-layer-group"></i> Categories</div>
                    <?php foreach ($all_categories as $cat): ?>
                    <a href="<?php echo $base_url; ?>blogs?category=<?php echo $cat['id']; ?>"
                       class="ni-cat-item <?php echo (isset($active_cat) && $active_cat == $cat['id']) ? 'active-cat' : ''; ?>">
                        <span class="cat-left"><span class="dot"></span><?php echo htmlspecialchars($cat['name']); ?></span>
                        <span class="cat-count"><?php echo $cat['post_count']; ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <!-- Tags -->
                <?php if (!empty($tags_arr)): ?>
                <div class="ni-widget">
                    <div class="ni-widget-title"><i class="fa-solid fa-tags"></i> Tags</div>
                    <div class="ni-tags-wrap">
                        <?php foreach ($tags_arr as $tag): ?>
                        <a href="<?php echo $base_url; ?>blogs?search=<?php echo urlencode($tag); ?>" class="ni-tag">
                            <?php echo htmlspecialchars($tag); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- CTA Widget -->
                <div class="ni-cta-widget">
                    <div class="cta-icon"><i class="fa-solid fa-phone-volume"></i></div>
                    <h5>Need a Bulk Quote?</h5>
                    <p>Get competitive pricing for all commercial &amp; industrial products.</p>
                    <a href="<?php echo $base_url; ?>contact-us" class="ni-cta-btn">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>

<script src="<?php echo $base_url; ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/fontawesome.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/aos.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/gsap.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/ScrollTrigger.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/Splitetext.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/sidebar.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/mobilemenu.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/gsap-animation.js"></script>
<script src="<?php echo $base_url; ?>assets/js/main.js"></script>
<script>
$(document).ready(function () {
    if (typeof AOS !== 'undefined') {
        AOS.init({ duration: 700, once: true, offset: 60 });
    }
});
</script>
</body>
</html>