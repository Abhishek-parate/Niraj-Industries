<?php
$base_url = "http://localhost/nirajindustries/";
include 'include/config.php';

$page_title       = "Blogs & News | Niraj Industries";
$meta_description = "Stay updated with the latest news, tips, and insights from Niraj Industries on construction, industrial products, and more.";

// Fetch categories with post count
$categories_result = $conn->query("
    SELECT bc.id, bc.name, bc.slug, COUNT(b.id) as post_count
    FROM blog_categories bc
    LEFT JOIN blogs b ON b.categories = bc.id AND b.is_published = 1
    GROUP BY bc.id
    ORDER BY bc.sort_order ASC
");
$all_categories = [];
while ($row = $categories_result->fetch_assoc()) {
    $all_categories[] = $row;
}

$active_cat   = isset($_GET['category']) ? intval($_GET['category']) : 0;
$search_query = isset($_GET['search']) ? trim($_GET['search']) : '';

$per_page     = 6;
$current_page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset       = ($current_page - 1) * $per_page;

$where  = "b.is_published = 1";
if ($active_cat > 0) {
    $where .= " AND b.categories = " . intval($active_cat);
}
if ($search_query !== '') {
    $safe_search = $conn->real_escape_string($search_query);
    $where .= " AND (b.title LIKE '%$safe_search%' OR b.excerpt LIKE '%$safe_search%')";
}

$count_result = $conn->query("SELECT COUNT(*) as total FROM blogs b WHERE $where");
$total_blogs  = $count_result->fetch_assoc()['total'];
$total_pages  = max(1, ceil($total_blogs / $per_page));

$blogs_result = $conn->query("
    SELECT b.*, bc.name as cat_name, bc.slug as cat_slug
    FROM blogs b
    LEFT JOIN blog_categories bc ON bc.id = b.categories
    WHERE $where
    ORDER BY b.published_at DESC
    LIMIT $per_page OFFSET $offset
");
$all_blogs = [];
while ($row = $blogs_result->fetch_assoc()) {
    $all_blogs[] = $row;
}

// Featured blog (first one, only on page 1 with no filters)
$featured_blog   = (!empty($all_blogs) && $current_page == 1 && !$search_query && !$active_cat) ? $all_blogs[0] : null;
$display_blogs   = $featured_blog ? array_slice($all_blogs, 1) : $all_blogs;

$latest_result = $conn->query("
    SELECT id, title, image, published_at, slug, reading_time
    FROM blogs WHERE is_published = 1
    ORDER BY published_at DESC LIMIT 4
");
$latest_posts = [];
while ($row = $latest_result->fetch_assoc()) $latest_posts[] = $row;

$tags_result = $conn->query("SELECT tags FROM blogs WHERE is_published = 1 AND tags IS NOT NULL AND tags != ''");
$all_tags = [];
while ($row = $tags_result->fetch_assoc()) {
    foreach (array_map('trim', explode(',', $row['tags'])) as $tag) {
        if ($tag && !in_array($tag, $all_tags)) $all_tags[] = $tag;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <link rel="shortcut icon" href="<?php echo $base_url; ?>assets/img/logo/fav-logo4.png" type="image/x-icon">
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
/* ============================================================
   NIRAJ INDUSTRIES — BLOG PAGE  (Horizontal Cards)
   ============================================================ */
:root {
    --ni-blue:       #0B3D6E;
    --ni-blue-mid:   #1A5FA0;
    --ni-blue-soft:  #EBF4FF;
    --ni-yellow:     #F5A623;
    --ni-yellow-dk:  #D4891A;
    --ni-yellow-lt:  #FFF8EC;
    --ni-dark:       #0D1B2A;
    --ni-text:       #1E293B;
    --ni-text2:      #475569;
    --ni-text3:      #94A3B8;
    --ni-border:     #E2E8F0;
    --ni-bg:         #F8FAFC;
    --ni-white:      #FFFFFF;
    --ni-radius:     14px;
    --ni-radius-sm:  8px;
    --ni-shadow:     0 2px 16px rgba(11,61,110,.07);
    --ni-shadow-md:  0 8px 32px rgba(11,61,110,.12);
    --ni-font-head:  'DM Serif Display', serif;
    --ni-font-body:  'Sora', sans-serif;
    --ni-trans:      all .25s cubic-bezier(.4,0,.2,1);
}

*, *::before, *::after { box-sizing: border-box; }

.ni-blog-page {
    font-family: var(--ni-font-body);
    background: var(--ni-bg);
    color: var(--ni-text);
}

/* ── PAGE TITLE BAR ──────────────────────────────────────── */
.ni-page-titlebar {
    padding: 32px 0 28px;
    background: var(--ni-white);
    border-bottom: 1px solid var(--ni-border);
}
.ni-page-titlebar .breadcrumb-wrap {
    display: flex; align-items: center; gap: 7px;
    font-size: 12.5px; color: var(--ni-text3); margin-bottom: 8px;
}
.ni-page-titlebar .breadcrumb-wrap a {
    color: var(--ni-text3); text-decoration: none; transition: color .2s;
}
.ni-page-titlebar .breadcrumb-wrap a:hover { color: var(--ni-yellow); }
.ni-page-titlebar .breadcrumb-wrap i { font-size: 9px; }
.ni-page-titlebar h1 {
    font-family: var(--ni-font-head);
    font-size: 36px; color: var(--ni-dark);
    margin: 0; line-height: 1.15; letter-spacing: -.3px;
}
.ni-page-titlebar h1 em { font-style: italic; color: var(--ni-blue-mid); }
.ni-page-titlebar .subtitle { font-size: 14px; color: var(--ni-text2); margin-top: 6px; }
.ni-page-titlebar .titlebar-right {
    display: flex; align-items: flex-end; justify-content: flex-end; height: 100%;
}
.ni-page-titlebar .stat-pill {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--ni-blue-soft); color: var(--ni-blue-mid);
    font-size: 13px; font-weight: 600;
    padding: 8px 16px; border-radius: 30px; border: 1px solid #C7DEFF;
}
.ni-page-titlebar .stat-pill i { color: var(--ni-yellow); }

/* ── FILTER BAR ──────────────────────────────────────────── */
.ni-filter-bar {
    background: var(--ni-white);
    border-bottom: 1px solid var(--ni-border);
    padding: 0; position: sticky; top: 0; z-index: 100;
    box-shadow: 0 2px 12px rgba(11,61,110,.06);
}
.ni-filter-bar .inner {
    display: flex; align-items: center;
    gap: 0; overflow-x: auto; scrollbar-width: none;
}
.ni-filter-bar .inner::-webkit-scrollbar { display: none; }
.ni-filter-btn {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 14px 20px;
    font-size: 13px; font-weight: 600; font-family: var(--ni-font-body);
    color: var(--ni-text2); text-decoration: none;
    border: none; background: transparent;
    border-bottom: 2.5px solid transparent;
    white-space: nowrap; transition: var(--ni-trans); cursor: pointer;
}
.ni-filter-btn:hover { color: var(--ni-blue); border-bottom-color: var(--ni-blue-soft); }
.ni-filter-btn.active {
    color: var(--ni-blue);
    border-bottom-color: var(--ni-yellow);
    background: var(--ni-blue-soft);
}
.ni-filter-btn .count-badge {
    background: var(--ni-border); color: var(--ni-text3);
    font-size: 10px; font-weight: 700;
    padding: 2px 7px; border-radius: 20px; transition: var(--ni-trans);
}
.ni-filter-btn.active .count-badge,
.ni-filter-btn:hover .count-badge { background: var(--ni-yellow); color: var(--ni-white); }

/* ── MAIN SECTION ────────────────────────────────────────── */
.ni-blogs-section { padding: 52px 0 80px; background: var(--ni-bg); }

/* ── RESULT BAR ──────────────────────────────────────────── */
.ni-result-bar {
    display: flex; align-items: center;
    justify-content: space-between;
    padding: 10px 0 20px;
    font-size: 13.5px; color: var(--ni-text2);
}
.ni-result-bar strong { color: var(--ni-blue); font-weight: 700; }
.ni-clear-filter {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: 12.5px; color: var(--ni-text3);
    text-decoration: none; background: var(--ni-border);
    border-radius: 20px; padding: 5px 13px; transition: var(--ni-trans);
}
.ni-clear-filter:hover { background: #FECACA; color: #DC2626; }

/* ── FEATURED CARD ───────────────────────────────────────── */
.ni-featured-card {
    background: var(--ni-white);
    border-radius: var(--ni-radius);
    overflow: hidden;
    border: 1px solid var(--ni-border);
    box-shadow: var(--ni-shadow);
    transition: var(--ni-trans);
    margin-bottom: 20px;
    display: grid;
    grid-template-columns: 1.1fr 1fr;
}
.ni-featured-card:hover { box-shadow: var(--ni-shadow-md); transform: translateY(-3px); }
.ni-featured-card .feat-img {
    position: relative; overflow: hidden; min-height: 320px;
}
.ni-featured-card .feat-img img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform .5s ease; display: block;
}
.ni-featured-card:hover .feat-img img { transform: scale(1.04); }
.ni-featured-card .feat-img .feat-label {
    position: absolute; top: 16px; left: 16px;
    background: var(--ni-yellow); color: var(--ni-white);
    font-size: 10px; font-weight: 800;
    letter-spacing: 1.2px; text-transform: uppercase;
    padding: 5px 12px; border-radius: 20px;
}
.ni-featured-card .feat-img .cat-label {
    position: absolute; bottom: 16px; left: 16px;
    background: rgba(11,61,110,.85); backdrop-filter: blur(6px);
    color: var(--ni-white); font-size: 11px; font-weight: 600;
    padding: 5px 14px; border-radius: 20px;
}
.ni-featured-card .feat-img .no-img-placeholder {
    width: 100%; height: 100%; min-height: 320px;
    display: flex; align-items: center; justify-content: center;
    background: linear-gradient(135deg, var(--ni-blue-soft), #C7DEFF);
}
.ni-featured-card .feat-img .no-img-placeholder i { font-size: 60px; color: #C7DEFF; }
.ni-featured-card .feat-body {
    padding: 36px 32px;
    display: flex; flex-direction: column; justify-content: center;
}
.ni-featured-card .feat-meta {
    display: flex; align-items: center; gap: 16px;
    font-size: 12px; color: var(--ni-text3); margin-bottom: 14px; flex-wrap: wrap;
}
.ni-featured-card .feat-meta i { color: var(--ni-yellow); margin-right: 4px; }
.ni-featured-card .feat-body h2 {
    font-family: var(--ni-font-head);
    font-size: 26px; color: var(--ni-dark);
    line-height: 1.35; margin-bottom: 12px; letter-spacing: -.2px;
}
.ni-featured-card .feat-body h2 a { color: inherit; text-decoration: none; transition: color .2s; }
.ni-featured-card .feat-body h2 a:hover { color: var(--ni-blue-mid); }
.ni-featured-card .feat-body .excerpt {
    font-size: 14px; color: var(--ni-text2);
    line-height: 1.7; margin-bottom: 24px;
    display: -webkit-box; -webkit-line-clamp: 3;
    -webkit-box-orient: vertical; overflow: hidden;
}

/* ── HORIZONTAL BLOG CARD ────────────────────────────────── */
.ni-blog-list { display: flex; flex-direction: column; gap: 18px; }

.ni-hcard {
    background: var(--ni-white);
    border-radius: var(--ni-radius);
    border: 1px solid var(--ni-border);
    box-shadow: var(--ni-shadow);
    overflow: hidden;
    display: grid;
    grid-template-columns: 240px 1fr;
    transition: var(--ni-trans);
}
.ni-hcard:hover {
    transform: translateY(-4px);
    box-shadow: var(--ni-shadow-md);
    border-color: #C7DEFF;
}

/* Image side */
.ni-hcard .hcard-img {
    position: relative;
    overflow: hidden;
    height: 210px;
}
.ni-hcard .hcard-img img {
    width: 100%; height: 100%;
    object-fit: cover; display: block;
    transition: transform .5s ease;
}
.ni-hcard:hover .hcard-img img { transform: scale(1.06); }
.ni-hcard .hcard-img .cat-tag {
    position: absolute; top: 12px; left: 12px;
    background: var(--ni-yellow); color: var(--ni-white);
    font-size: 10px; font-weight: 800;
    letter-spacing: .8px; text-transform: uppercase;
    padding: 4px 11px; border-radius: 20px; z-index: 2;
}
.ni-hcard .hcard-img .no-img-ph {
    width: 100%; height: 100%;
    display: flex; align-items: center; justify-content: center;
    background: linear-gradient(135deg, var(--ni-blue-soft) 0%, #D6EAFF 100%);
}
.ni-hcard .hcard-img .no-img-ph i { font-size: 40px; color: #C7DEFF; }

/* Content side */
.ni-hcard .hcard-body {
    padding: 20px 24px;
    display: flex; flex-direction: column; justify-content: space-between;
}
.ni-hcard .hcard-meta {
    display: flex; align-items: center;
    flex-wrap: wrap; gap: 12px;
    font-size: 12px; color: var(--ni-text3);
    margin-bottom: 10px;
}
.ni-hcard .hcard-meta i { color: var(--ni-yellow); margin-right: 3px; }
.ni-hcard .hcard-body h3 {
    font-family: var(--ni-font-head);
    font-size: 18px; color: var(--ni-dark);
    line-height: 1.4; margin-bottom: 9px; letter-spacing: -.1px;
}
.ni-hcard .hcard-body h3 a { color: inherit; text-decoration: none; transition: color .2s; }
.ni-hcard .hcard-body h3 a:hover { color: var(--ni-blue-mid); }
.ni-hcard .hcard-body p {
    font-size: 13.5px; color: var(--ni-text2);
    line-height: 1.65; flex: 1;
    display: -webkit-box; -webkit-line-clamp: 2;
    -webkit-box-orient: vertical; overflow: hidden;
    margin-bottom: 0;
}
.ni-hcard .hcard-footer {
    display: flex; align-items: center;
    justify-content: space-between;
    padding-top: 14px; margin-top: 14px;
    border-top: 1px solid var(--ni-border);
}
.ni-hcard .hcard-footer .read-time {
    font-size: 12px; color: var(--ni-text3);
    display: flex; align-items: center; gap: 5px;
}
.ni-hcard .hcard-footer .read-time i { color: var(--ni-yellow); }

/* ── BUTTONS ─────────────────────────────────────────────── */
.ni-read-btn {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--ni-blue); color: var(--ni-white);
    font-size: 13px; font-weight: 700;
    padding: 11px 24px; border-radius: 30px;
    text-decoration: none; transition: var(--ni-trans);
    align-self: flex-start; border: 2px solid var(--ni-blue);
}
.ni-read-btn i { font-size: 11px; transition: transform .2s; }
.ni-read-btn:hover { background: transparent; color: var(--ni-blue); }
.ni-read-btn:hover i { transform: translateX(3px); }

.ni-link-arrow {
    display: inline-flex; align-items: center; gap: 5px;
    font-size: 13px; font-weight: 700; color: var(--ni-blue);
    text-decoration: none; transition: var(--ni-trans);
}
.ni-link-arrow i { font-size: 10px; transition: transform .2s; }
.ni-link-arrow:hover { color: var(--ni-yellow-dk); }
.ni-link-arrow:hover i { transform: translateX(4px); }

/* ── NO RESULTS ──────────────────────────────────────────── */
.ni-no-results {
    text-align: center; padding: 72px 20px;
    background: var(--ni-white); border-radius: var(--ni-radius);
    border: 1px solid var(--ni-border);
}
.ni-no-results .icon-wrap {
    width: 80px; height: 80px; border-radius: 50%;
    background: var(--ni-yellow-lt);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 18px;
}
.ni-no-results .icon-wrap i { font-size: 32px; color: var(--ni-yellow); }
.ni-no-results h4 {
    font-family: var(--ni-font-head);
    font-size: 22px; color: var(--ni-dark); margin-bottom: 8px;
}
.ni-no-results p { font-size: 14px; color: var(--ni-text2); }

/* ── PAGINATION ──────────────────────────────────────────── */
.ni-pagination {
    display: flex; align-items: center;
    justify-content: center; gap: 6px; margin-top: 44px;
}
.ni-pagination a, .ni-pagination span {
    width: 40px; height: 40px;
    display: flex; align-items: center; justify-content: center;
    border-radius: var(--ni-radius-sm);
    font-size: 14px; font-weight: 600;
    text-decoration: none; border: 1.5px solid var(--ni-border);
    color: var(--ni-text2); background: var(--ni-white);
    transition: var(--ni-trans);
}
.ni-pagination a:hover { background: var(--ni-blue-soft); border-color: #C7DEFF; color: var(--ni-blue); }
.ni-pagination .active { background: var(--ni-blue); border-color: var(--ni-blue); color: var(--ni-white); }

/* ── SIDEBAR ─────────────────────────────────────────────── */
.ni-widget {
    background: var(--ni-white);
    border-radius: var(--ni-radius); border: 1px solid var(--ni-border);
    padding: 24px; margin-bottom: 22px; box-shadow: var(--ni-shadow);
}
.ni-widget-title {
    font-family: var(--ni-font-head);
    font-size: 17px; color: var(--ni-dark);
    margin-bottom: 18px; padding-bottom: 14px;
    border-bottom: 2px solid var(--ni-yellow);
    display: flex; align-items: center; gap: 9px;
}
.ni-widget-title i { color: var(--ni-yellow); font-size: 15px; }

.ni-search-box {
    display: flex; border: 1.5px solid var(--ni-border);
    border-radius: var(--ni-radius-sm); overflow: hidden; transition: border-color .2s;
}
.ni-search-box:focus-within { border-color: var(--ni-blue); }
.ni-search-box input {
    flex: 1; border: none; outline: none;
    padding: 10px 14px; font-size: 13.5px;
    font-family: var(--ni-font-body); background: transparent; color: var(--ni-text);
}
.ni-search-box input::placeholder { color: var(--ni-text3); }
.ni-search-box button {
    background: var(--ni-yellow); border: none;
    padding: 0 16px; color: var(--ni-white);
    font-size: 14px; cursor: pointer; transition: background .2s;
}
.ni-search-box button:hover { background: var(--ni-yellow-dk); }

.ni-latest-item {
    display: flex; gap: 12px; padding: 12px 0;
    border-bottom: 1px solid var(--ni-border);
    text-decoration: none; transition: var(--ni-trans);
}
.ni-latest-item:last-child { border-bottom: none; padding-bottom: 0; }
.ni-latest-item:first-child { padding-top: 0; }
.ni-latest-item .li-thumb {
    width: 66px; height: 54px; flex-shrink: 0;
    border-radius: var(--ni-radius-sm); overflow: hidden; background: var(--ni-blue-soft);
}
.ni-latest-item .li-thumb img { width: 100%; height: 100%; object-fit: cover; }
.ni-latest-item .li-date {
    font-size: 11px; color: var(--ni-yellow-dk);
    font-weight: 600; margin-bottom: 4px; display: block;
}
.ni-latest-item .li-info h6 {
    font-size: 13px; font-weight: 600;
    color: var(--ni-text); line-height: 1.4; margin: 0;
    transition: color .2s;
    display: -webkit-box; -webkit-line-clamp: 2;
    -webkit-box-orient: vertical; overflow: hidden;
}
.ni-latest-item:hover .li-info h6 { color: var(--ni-blue-mid); }

.ni-cat-item {
    display: flex; align-items: center; justify-content: space-between;
    padding: 10px 12px; border-radius: var(--ni-radius-sm);
    text-decoration: none; font-size: 13.5px; color: var(--ni-text2);
    transition: var(--ni-trans); margin-bottom: 4px;
}
.ni-cat-item:last-child { margin-bottom: 0; }
.ni-cat-item .cat-left { display: flex; align-items: center; gap: 9px; }
.ni-cat-item .cat-left .dot {
    width: 8px; height: 8px; border-radius: 50%;
    background: var(--ni-border); transition: background .2s; flex-shrink: 0;
}
.ni-cat-item .cat-count {
    font-size: 11px; font-weight: 700;
    background: var(--ni-border); color: var(--ni-text3);
    padding: 2px 8px; border-radius: 20px; transition: var(--ni-trans);
}
.ni-cat-item:hover, .ni-cat-item.active-cat { background: var(--ni-blue-soft); color: var(--ni-blue); }
.ni-cat-item:hover .dot, .ni-cat-item.active-cat .dot { background: var(--ni-yellow); }
.ni-cat-item:hover .cat-count, .ni-cat-item.active-cat .cat-count { background: var(--ni-yellow); color: var(--ni-white); }

.ni-tags-wrap { display: flex; flex-wrap: wrap; gap: 8px; }
.ni-tag {
    font-size: 12px; font-weight: 500;
    background: var(--ni-bg); border: 1px solid var(--ni-border);
    color: var(--ni-text2); padding: 5px 13px; border-radius: 20px;
    text-decoration: none; transition: var(--ni-trans);
}
.ni-tag:hover { background: var(--ni-yellow); border-color: var(--ni-yellow); color: var(--ni-white); }

.ni-cta-widget {
    background: linear-gradient(145deg, var(--ni-blue) 0%, #1A5FA0 100%);
    border-radius: var(--ni-radius); padding: 28px 24px;
    text-align: center; position: relative; overflow: hidden; margin-bottom: 22px;
}
.ni-cta-widget::before {
    content: ''; position: absolute; right: -30px; top: -30px;
    width: 140px; height: 140px; background: rgba(245,166,35,.1); border-radius: 50%;
}
.ni-cta-widget .cta-icon {
    width: 54px; height: 54px; background: rgba(245,166,35,.15);
    border-radius: 50%; display: flex; align-items: center; justify-content: center;
    margin: 0 auto 14px; border: 1.5px solid rgba(245,166,35,.3);
}
.ni-cta-widget .cta-icon i { font-size: 22px; color: var(--ni-yellow); }
.ni-cta-widget h5 {
    color: var(--ni-white); font-weight: 800; font-size: 17px; margin-bottom: 7px;
    font-family: var(--ni-font-head);
}
.ni-cta-widget p { color: rgba(255,255,255,.72); font-size: 13px; line-height: 1.6; margin-bottom: 18px; }
.ni-cta-btn {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--ni-yellow); color: var(--ni-white);
    font-size: 13px; font-weight: 700;
    padding: 11px 24px; border-radius: 30px;
    text-decoration: none; transition: var(--ni-trans);
    width: 100%; justify-content: center; border: 2px solid var(--ni-yellow);
}
.ni-cta-btn:hover { background: transparent; color: var(--ni-yellow); }
.ni-cta-btn i { font-size: 11px; }

/* ── RESPONSIVE ──────────────────────────────────────────── */
@media (max-width: 992px) {
    .ni-featured-card { grid-template-columns: 1fr; }
    .ni-featured-card .feat-img { min-height: 240px; }
    .ni-featured-card .feat-body { padding: 24px 22px; }
    .ni-featured-card .feat-body h2 { font-size: 22px; }
    .ni-filter-bar { display: none; }
    .ni-hcard { grid-template-columns: 180px 1fr; }
    .ni-hcard .hcard-img { height: 180px; }
}
@media (max-width: 640px) {
    .ni-hcard { grid-template-columns: 1fr; }
    .ni-hcard .hcard-img { height: 200px; }
    .ni-page-titlebar h1 { font-size: 28px; }
}
</style>
</head>
<body class="homepage4-body ni-blog-page">

<?php include 'include/header.php'; ?>

<!-- ══ PAGE TITLE BAR ══════════════════════════════════════════ -->
<div class="ni-page-titlebar" style="margin-top:80px;">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <nav class="breadcrumb-wrap">
                    <a href="<?php echo $base_url; ?>index.php">Home</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <span>Blogs & News</span>
                </nav>
                <h1>Industry <em>Insights</em> & News</h1>
                <p class="subtitle">Expert tips, product guides, and industry news from Niraj Industries.</p>
            </div>
            <div class="col-lg-4 d-none d-lg-flex titlebar-right">
                <div class="stat-pill">
                    <i class="fa-solid fa-newspaper"></i>
                    <?php echo $total_blogs; ?> Article<?php echo $total_blogs != 1 ? 's' : ''; ?> Published
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ══ FILTER BAR ══════════════════════════════════════════════ -->
<div class="ni-filter-bar">
    <div class="container">
        <div class="inner">
            <a href="<?php echo $base_url; ?>blogs.php"
               class="ni-filter-btn <?php echo $active_cat == 0 && !$search_query ? 'active' : ''; ?>">
                <i class="fa-solid fa-border-all"></i> All Posts
                <span class="count-badge"><?php echo $total_blogs; ?></span>
            </a>
            <?php foreach ($all_categories as $cat): ?>
            <a href="<?php echo $base_url; ?>blogs.php?category=<?php echo $cat['id']; ?>"
               class="ni-filter-btn <?php echo $active_cat == $cat['id'] ? 'active' : ''; ?>">
                <?php echo htmlspecialchars($cat['name']); ?>
                <span class="count-badge"><?php echo $cat['post_count']; ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- ══ MAIN CONTENT ════════════════════════════════════════════ -->
<section class="ni-blogs-section">
    <div class="container">
        <div class="row g-4">

            <!-- ── LEFT: BLOG CONTENT ── -->
            <div class="col-lg-8">

                <!-- Result bar -->
                <div class="ni-result-bar">
                    <span>
                        Showing <strong><?php echo $total_blogs; ?></strong>
                        article<?php echo $total_blogs != 1 ? 's' : ''; ?>
                        <?php if ($active_cat > 0): foreach($all_categories as $c) { if ($c['id'] == $active_cat) echo ' in <strong>' . htmlspecialchars($c['name']) . '</strong>'; } endif; ?>
                        <?php if ($search_query): echo ' for <strong>&ldquo;' . htmlspecialchars($search_query) . '&rdquo;</strong>'; endif; ?>
                    </span>
                    <?php if ($active_cat > 0 || $search_query): ?>
                    <a href="<?php echo $base_url; ?>blogs.php" class="ni-clear-filter">
                        <i class="fa-solid fa-xmark"></i> Clear
                    </a>
                    <?php endif; ?>
                </div>

                <?php if (empty($all_blogs)): ?>
                <!-- No Results -->
                <div class="ni-no-results">
                    <div class="icon-wrap"><i class="fa-regular fa-newspaper"></i></div>
                    <h4>No articles found</h4>
                    <p>Try a different category or search term.</p>
                </div>

                <?php else: ?>

                <!-- ── FEATURED POST (page 1, no filter/search only) ── -->
                <?php if ($featured_blog): ?>
                <div class="ni-featured-card" data-aos="fade-up" data-aos-duration="700">
                    <div class="feat-img">
                        <span class="feat-label"><i class="fa-solid fa-star me-1"></i>Featured</span>
                        <?php if (!empty($featured_blog['image'])): ?>
                        <img src="<?php echo $base_url . htmlspecialchars($featured_blog['image']); ?>"
                             alt="<?php echo htmlspecialchars($featured_blog['image_alt'] ?? $featured_blog['title']); ?>"
                             onerror="this.parentElement.innerHTML='<div class=\'no-img-placeholder\'><i class=\'fa-regular fa-image\'></i></div>'">
                        <?php else: ?>
                        <div class="no-img-placeholder">
                            <i class="fa-regular fa-newspaper"></i>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($featured_blog['cat_name'])): ?>
                        <span class="cat-label"><?php echo htmlspecialchars($featured_blog['cat_name']); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="feat-body">
                        <div class="feat-meta">
                            <span><i class="fa-regular fa-calendar"></i><?php echo date('d M Y', strtotime($featured_blog['published_at'])); ?></span>
                            <span><i class="fa-regular fa-eye"></i><?php echo number_format($featured_blog['views']); ?> views</span>
                            <?php if (!empty($featured_blog['reading_time'])): ?>
                            <span><i class="fa-regular fa-clock"></i><?php echo $featured_blog['reading_time']; ?> min read</span>
                            <?php endif; ?>
                        </div>
                        <h2>
                            <a href="<?php echo $base_url; ?>blog-details.php?slug=<?php echo urlencode($featured_blog['slug']); ?>">
                                <?php echo htmlspecialchars($featured_blog['title']); ?>
                            </a>
                        </h2>
                        <p class="excerpt"><?php echo htmlspecialchars($featured_blog['excerpt']); ?></p>
                        <a href="<?php echo $base_url; ?>blog-details.php?slug=<?php echo urlencode($featured_blog['slug']); ?>" class="ni-read-btn">
                            Read Article <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

                <!-- ── HORIZONTAL BLOG LIST ── -->
                <?php if (!empty($display_blogs)): ?>
                <div class="ni-blog-list">
                    <?php foreach ($display_blogs as $i => $blog): ?>
                    <div class="ni-hcard" data-aos="fade-up" data-aos-duration="600" data-aos-delay="<?php echo min($i * 80, 300); ?>">

                        <!-- Image Left -->
                        <div class="hcard-img">
                            <?php if (!empty($blog['cat_name'])): ?>
                            <span class="cat-tag"><?php echo htmlspecialchars($blog['cat_name']); ?></span>
                            <?php endif; ?>
                            <?php if (!empty($blog['image'])): ?>
                            <img src="<?php echo $base_url . htmlspecialchars($blog['image']); ?>"
                                 alt="<?php echo htmlspecialchars($blog['image_alt'] ?? $blog['title']); ?>"
                                 onerror="this.parentElement.innerHTML='<div class=\'no-img-ph\'><i class=\'fa-regular fa-newspaper\'></i></div>'">
                            <?php else: ?>
                            <div class="no-img-ph">
                                <i class="fa-regular fa-newspaper"></i>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Content Right -->
                        <div class="hcard-body">
                            <div>
                                <div class="hcard-meta">
                                    <span><i class="fa-regular fa-calendar"></i><?php echo date('d M Y', strtotime($blog['published_at'])); ?></span>
                                    <span><i class="fa-regular fa-eye"></i><?php echo number_format($blog['views']); ?> views</span>
                                    <?php if (!empty($blog['comments'])): ?>
                                    <span><i class="fa-regular fa-comment"></i><?php echo $blog['comments']; ?></span>
                                    <?php endif; ?>
                                </div>
                                <h3>
                                    <a href="<?php echo $base_url; ?>blog-details.php?slug=<?php echo urlencode($blog['slug']); ?>">
                                        <?php echo htmlspecialchars($blog['title']); ?>
                                    </a>
                                </h3>
                                <p><?php echo htmlspecialchars($blog['excerpt']); ?></p>
                            </div>
                            <div class="hcard-footer">
                                <span class="read-time">
                                    <i class="fa-regular fa-clock"></i>
                                    <?php echo !empty($blog['reading_time']) ? $blog['reading_time'] : 1; ?> min read
                                </span>
                                <a href="<?php echo $base_url; ?>blog-details.php?slug=<?php echo urlencode($blog['slug']); ?>" class="ni-link-arrow">
                                    Read More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <!-- ── PAGINATION ── -->
                <?php if ($total_pages > 1): ?>
                <nav class="ni-pagination">
                    <?php if ($current_page > 1): ?>
                    <a href="?<?php echo http_build_query(array_merge($_GET, ['page' => $current_page - 1])); ?>">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                    <?php endif; ?>
                    <?php for ($pg = 1; $pg <= $total_pages; $pg++): ?>
                    <a href="?<?php echo http_build_query(array_merge($_GET, ['page' => $pg])); ?>"
                       class="<?php echo $pg == $current_page ? 'active' : ''; ?>">
                        <?php echo $pg; ?>
                    </a>
                    <?php endfor; ?>
                    <?php if ($current_page < $total_pages): ?>
                    <a href="?<?php echo http_build_query(array_merge($_GET, ['page' => $current_page + 1])); ?>">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                    <?php endif; ?>
                </nav>
                <?php endif; ?>

                <?php endif; // end blogs check ?>
            </div>

            <!-- ── RIGHT: SIDEBAR ── -->
            <div class="col-lg-4">
                <div class="ni-sidebar">

                    <!-- Search -->
                    <div class="ni-widget">
                        <div class="ni-widget-title">
                            <i class="fa-solid fa-magnifying-glass"></i> Search Articles
                        </div>
                        <form method="GET" action="">
                            <?php if ($active_cat): ?>
                            <input type="hidden" name="category" value="<?php echo $active_cat; ?>">
                            <?php endif; ?>
                            <div class="ni-search-box">
                                <input type="text" name="search"
                                       placeholder="Type to search..."
                                       value="<?php echo htmlspecialchars($search_query); ?>">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- Latest Posts -->
                    <?php if (!empty($latest_posts)): ?>
                    <div class="ni-widget">
                        <div class="ni-widget-title">
                            <i class="fa-solid fa-fire-flame-curved"></i> Latest Posts
                        </div>
                        <?php foreach ($latest_posts as $lp): ?>
                        <a href="<?php echo $base_url; ?>blog-details.php?slug=<?php echo urlencode($lp['slug']); ?>" class="ni-latest-item">
                            <div class="li-thumb">
                                <img src="<?php echo $base_url . htmlspecialchars($lp['image'] ?? ''); ?>"
                                     alt="<?php echo htmlspecialchars($lp['title']); ?>"
                                     onerror="this.style.display='none'">
                            </div>
                            <div class="li-info">
                                <span class="li-date">
                                    <i class="fa-regular fa-calendar me-1"></i>
                                    <?php echo date('d M Y', strtotime($lp['published_at'])); ?>
                                </span>
                                <h6><?php echo htmlspecialchars($lp['title']); ?></h6>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Categories -->
                    <?php if (!empty($all_categories)): ?>
                    <div class="ni-widget">
                        <div class="ni-widget-title">
                            <i class="fa-solid fa-layer-group"></i> Categories
                        </div>
                        <a href="<?php echo $base_url; ?>blogs.php"
                           class="ni-cat-item <?php echo $active_cat == 0 ? 'active-cat' : ''; ?>">
                            <span class="cat-left"><span class="dot"></span> All Posts</span>
                            <span class="cat-count"><?php echo $total_blogs; ?></span>
                        </a>
                        <?php foreach ($all_categories as $cat): ?>
                        <a href="<?php echo $base_url; ?>blogs.php?category=<?php echo $cat['id']; ?>"
                           class="ni-cat-item <?php echo $active_cat == $cat['id'] ? 'active-cat' : ''; ?>">
                            <span class="cat-left">
                                <span class="dot"></span>
                                <?php echo htmlspecialchars($cat['name']); ?>
                            </span>
                            <span class="cat-count"><?php echo $cat['post_count']; ?></span>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Tags -->
                    <?php if (!empty($all_tags)): ?>
                    <div class="ni-widget">
                        <div class="ni-widget-title">
                            <i class="fa-solid fa-tags"></i> Popular Tags
                        </div>
                        <div class="ni-tags-wrap">
                            <?php foreach ($all_tags as $tag): ?>
                            <a href="<?php echo $base_url; ?>blogs.php?search=<?php echo urlencode($tag); ?>" class="ni-tag">
                                <?php echo htmlspecialchars($tag); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- CTA Widget -->
                    <div class="ni-cta-widget">
                        <div class="cta-icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <h5>Need a Bulk Quote?</h5>
                        <p>Get competitive pricing for all commercial &amp; industrial products.</p>
                        <a href="<?php echo $base_url; ?>contact-us.php" class="ni-cta-btn">
                            Contact Us <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div><!-- /sidebar col -->

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
    if (typeof AOS !== 'undefined') { AOS.init({ duration: 700, once: true, offset: 60 }); }
});
</script>
</body>
</html>