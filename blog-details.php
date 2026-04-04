<?php
$base_url = "http://localhost/nirajindustries/";
include 'include/config.php';

// Get slug from URL
$slug = isset($_GET['slug']) ? trim($conn->real_escape_string($_GET['slug'])) : '';

if (!$slug) {
    header('Location: ' . $base_url . 'blogs.php');
    exit;
}

// Fetch blog post
$result = $conn->query("
    SELECT b.*, bc.name as cat_name, bc.slug as cat_slug
    FROM blogs b
    LEFT JOIN blog_categories bc ON bc.id = b.categories
    WHERE b.slug = '$slug' AND b.is_published = 1
    LIMIT 1
");
$blog = $result->fetch_assoc();

if (!$blog) {
    header('Location: ' . $base_url . 'blogs.php');
    exit;
}

// Increment views
$conn->query("UPDATE blogs SET views = views + 1 WHERE id = " . intval($blog['id']));

$page_title = htmlspecialchars($blog['title']) . ' | Niraj Industries';
$meta_description = htmlspecialchars($blog['excerpt']);

// Prev / Next
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

// Related posts (same category)
$related_result = $conn->query("
    SELECT b.id, b.title, b.slug, b.image, b.excerpt, b.published_at, b.reading_time, bc.name as cat_name
    FROM blogs b
    LEFT JOIN blog_categories bc ON bc.id = b.categories
    WHERE b.categories = " . intval($blog['categories']) . "
      AND b.id != " . intval($blog['id']) . "
      AND b.is_published = 1
    ORDER BY b.published_at DESC
    LIMIT 3
");
$related_posts = [];
while ($row = $related_result->fetch_assoc()) {
    $related_posts[] = $row;
}

// Latest posts sidebar
$latest_result = $conn->query("
    SELECT id, title, image, published_at, slug
    FROM blogs
    WHERE is_published = 1
    ORDER BY published_at DESC
    LIMIT 4
");
$latest_posts = [];
while ($row = $latest_result->fetch_assoc()) {
    $latest_posts[] = $row;
}

// All categories
$categories_result = $conn->query("
    SELECT bc.id, bc.name, bc.slug, COUNT(b.id) as post_count
    FROM blog_categories bc
    LEFT JOIN blogs b ON b.categories = bc.id AND b.is_published = 1
    GROUP BY bc.id ORDER BY bc.sort_order ASC
");
$all_categories = [];
while ($row = $categories_result->fetch_assoc()) {
    $all_categories[] = $row;
}

// Tags
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
    <link rel="shortcut icon" href="<?php echo $base_url; ?>assets/img/logo/fav-logo4.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/aos.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/mobile.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/main.css">

    <script src="<?php echo $base_url; ?>assets/js/plugins/jquery-3-6-0.min.js"></script>

    <style>
/* =========================================================
   BLOG DETAILS PAGE — Niraj Industries Theme
   ========================================================= */

/* ---- Hero ---- */
.blog-detail-hero {
    background: linear-gradient(135deg, var(--blue) 0%, var(--blue-mid) 100%);
    padding: 56px 0 48px;
    position: relative;
    overflow: hidden;
}
.blog-detail-hero::before {
    content: '';
    position: absolute;
    right: -60px; top: -60px;
    width: 360px; height: 360px;
    background: rgba(245,166,35,.08);
    border-radius: 50%;
}
.blog-detail-hero .breadcrumb-nav {
    display: flex; align-items: center; gap: 8px;
    font-size: 13px; color: rgba(255,255,255,.7); margin-bottom: 16px;
}
.blog-detail-hero .breadcrumb-nav a { color: rgba(255,255,255,.7); text-decoration: none; }
.blog-detail-hero .breadcrumb-nav a:hover { color: var(--yellow); }
.blog-detail-hero .breadcrumb-nav i { font-size: 10px; }
.blog-detail-hero .hero-cat {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--yellow); color: var(--blue);
    font-size: 11px; font-weight: 700;
    padding: 4px 14px; border-radius: 20px;
    text-transform: uppercase; letter-spacing: .5px;
    margin-bottom: 14px;
}
.blog-detail-hero h1 {
    font-size: 38px; font-weight: 800; color: #fff;
    line-height: 1.2; margin-bottom: 18px;
    font-family: var(--font-head);
    max-width: 740px;
}
.blog-meta-strip {
    display: flex; flex-wrap: wrap; align-items: center; gap: 20px;
}
.blog-meta-strip .meta-item {
    display: flex; align-items: center; gap: 6px;
    font-size: 13px; color: rgba(255,255,255,.75);
}
.blog-meta-strip .meta-item i { color: var(--yellow); }

/* ---- Main Layout ---- */
.blog-detail-area { padding: 56px 0 72px; background: var(--bg-soft); }

/* ---- Featured Image ---- */
.blog-featured-img {
    width: 100%; border-radius: var(--radius-lg);
    overflow: hidden; margin-bottom: 36px;
    box-shadow: var(--shadow-md);
    max-height: 460px;
}
.blog-featured-img img {
    width: 100%; height: 460px; object-fit: cover;
    display: block;
}

/* ---- Content Box ---- */
.blog-content-box {
    background: var(--white);
    border-radius: var(--radius-lg);
    border: 1px solid var(--border);
    padding: 40px 44px;
    box-shadow: var(--shadow-sm);
    margin-bottom: 28px;
}
.blog-content-box .blog-body {
    font-size: 15.5px;
    color: var(--text-2);
    line-height: 1.85;
}
.blog-body h2 {
    font-size: 24px; font-weight: 800; color: var(--text);
    margin: 32px 0 14px; font-family: var(--font-head);
}
.blog-body h3 {
    font-size: 20px; font-weight: 700; color: var(--text);
    margin: 26px 0 12px;
}
.blog-body p { margin-bottom: 18px; }
.blog-body ul, .blog-body ol {
    padding-left: 24px; margin-bottom: 18px;
}
.blog-body ul li, .blog-body ol li {
    margin-bottom: 8px; color: var(--text-2);
}
.blog-body blockquote {
    background: var(--yellow-light);
    border-left: 4px solid var(--yellow);
    padding: 18px 22px;
    border-radius: 0 var(--radius) var(--radius) 0;
    margin: 24px 0;
    font-style: italic;
    color: var(--text);
}
.blog-body img {
    width: 100%; border-radius: var(--radius);
    margin: 20px 0; box-shadow: var(--shadow-sm);
}
.blog-body strong { color: var(--text); font-weight: 700; }
.blog-body a { color: var(--yellow-dark); text-decoration: underline; }

/* ---- Tags & Share ---- */
.blog-tags-share {
    background: var(--white);
    border-radius: var(--radius-lg);
    border: 1px solid var(--border);
    padding: 22px 28px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 16px;
    margin-bottom: 28px;
    box-shadow: var(--shadow-sm);
}
.tags-row { display: flex; align-items: center; flex-wrap: wrap; gap: 8px; }
.tags-row .label { font-size: 13px; font-weight: 700; color: var(--text); margin-right: 4px; }
.tag-chip {
    background: var(--bg-soft); border: 1px solid var(--border);
    color: var(--text-2); font-size: 12px;
    padding: 5px 12px; border-radius: 20px;
    text-decoration: none; transition: var(--transition);
}
.tag-chip:hover { background: var(--yellow); border-color: var(--yellow); color: var(--blue); }
.share-row { display: flex; align-items: center; gap: 10px; }
.share-row .label { font-size: 13px; font-weight: 700; color: var(--text); }
.share-btn {
    width: 34px; height: 34px;
    display: flex; align-items: center; justify-content: center;
    border-radius: 50%; font-size: 14px;
    text-decoration: none; transition: var(--transition);
}
.share-btn.fb  { background: #1877f2; color: #fff; }
.share-btn.tw  { background: #1da1f2; color: #fff; }
.share-btn.li  { background: #0077b5; color: #fff; }
.share-btn.wa  { background: #25d366; color: #fff; }
.share-btn:hover { transform: translateY(-2px); box-shadow: var(--shadow-sm); }

/* ---- Prev / Next Navigation ---- */
.blog-prev-next {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-bottom: 40px;
}
.prev-next-card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 20px 22px;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    gap: 6px;
    transition: var(--transition);
    box-shadow: var(--shadow-sm);
}
.prev-next-card:hover {
    border-color: var(--yellow);
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
}
.prev-next-card .nav-label {
    font-size: 11px; font-weight: 700;
    color: var(--yellow-dark); text-transform: uppercase;
    letter-spacing: .5px; display: flex; align-items: center; gap: 6px;
}
.prev-next-card .nav-title {
    font-size: 14px; font-weight: 600; color: var(--text);
    line-height: 1.4; display: -webkit-box;
    -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
}
.prev-next-card.next-card { text-align: right; align-items: flex-end; }

/* ---- Related Posts ---- */
.related-section { margin-top: 8px; }
.related-section .section-head {
    font-size: 22px; font-weight: 800; color: var(--text);
    margin-bottom: 24px; display: flex; align-items: center; gap: 10px;
}
.related-section .section-head::after {
    content: ''; flex: 1; height: 2px; background: var(--border);
}
.related-card {
    background: var(--white);
    border-radius: var(--radius-lg);
    overflow: hidden;
    border: 1px solid var(--border);
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    height: 100%;
    display: flex; flex-direction: column;
}
.related-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); border-color: var(--yellow-border); }
.related-card-img { height: 170px; overflow: hidden; position: relative; }
.related-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform .4s; }
.related-card:hover .related-card-img img { transform: scale(1.05); }
.related-card-body { padding: 18px 18px 16px; flex: 1; }
.related-card-cat {
    font-size: 11px; font-weight: 700; color: var(--yellow-dark);
    text-transform: uppercase; letter-spacing: .5px;
    margin-bottom: 8px; display: block;
}
.related-card-body h5 {
    font-size: 15px; font-weight: 700; color: var(--text);
    margin-bottom: 8px; line-height: 1.4;
}
.related-card-body h5 a { color: inherit; text-decoration: none; }
.related-card-body h5 a:hover { color: var(--yellow-dark); }
.related-card-body p { font-size: 13px; color: var(--text-3); line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
.related-card-footer { padding: 12px 18px; border-top: 1px solid var(--border); display: flex; align-items: center; justify-content: space-between; }
.related-card-footer span { font-size: 12px; color: var(--text-3); }
.related-card-footer a { font-size: 12px; font-weight: 600; color: var(--blue); text-decoration: none; }
.related-card-footer a:hover { color: var(--yellow-dark); }

/* ---- Sidebar (same as blogs.php) ---- */
.blog-sidebar { }
.sidebar-widget {
    background: var(--white); border-radius: var(--radius-lg);
    border: 1px solid var(--border); padding: 24px;
    margin-bottom: 24px; box-shadow: var(--shadow-sm);
}
.sidebar-widget-title {
    font-size: 16px; font-weight: 800; color: var(--text);
    margin-bottom: 18px; padding-bottom: 12px;
    border-bottom: 2px solid var(--yellow);
    display: flex; align-items: center; gap: 8px;
}
.sidebar-widget-title i { color: var(--yellow); }
.sidebar-search { display: flex; gap: 0; border: 1.5px solid var(--border); border-radius: var(--radius); overflow: hidden; }
.sidebar-search input { flex: 1; border: none; padding: 10px 14px; font-size: 14px; color: var(--text); outline: none; }
.sidebar-search button { background: var(--yellow); border: none; padding: 0 16px; color: var(--blue); font-size: 15px; cursor: pointer; transition: var(--transition); }
.sidebar-search button:hover { background: var(--yellow-dark); }
.latest-post-item { display: flex; gap: 12px; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid var(--border); text-decoration: none; }
.latest-post-item:last-child { margin-bottom: 0; padding-bottom: 0; border-bottom: none; }
.latest-post-img { width: 68px; height: 56px; border-radius: var(--radius-sm); overflow: hidden; flex-shrink: 0; }
.latest-post-img img { width: 100%; height: 100%; object-fit: cover; }
.latest-post-info { flex: 1; }
.latest-post-info span { font-size: 11px; color: var(--yellow-dark); display: block; margin-bottom: 4px; }
.latest-post-info h6 { font-size: 13px; font-weight: 600; color: var(--text); line-height: 1.4; margin: 0; transition: color .2s; }
.latest-post-item:hover h6 { color: var(--yellow-dark); }
.cat-list-item { display: flex; align-items: center; justify-content: space-between; padding: 10px 0; border-bottom: 1px dashed var(--border); text-decoration: none; transition: var(--transition); }
.cat-list-item:last-child { border-bottom: none; }
.cat-list-item span:first-child { font-size: 14px; color: var(--text-2); display: flex; align-items: center; gap: 8px; transition: color .2s; }
.cat-list-item span:first-child i { color: var(--yellow); font-size: 11px; }
.cat-list-item .count { background: var(--yellow-light); color: var(--blue); font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 20px; }
.cat-list-item:hover span:first-child { color: var(--yellow-dark); }
.tags-cloud { display: flex; flex-wrap: wrap; gap: 8px; }

@media (max-width: 768px) {
    .blog-detail-hero h1 { font-size: 26px; }
    .blog-content-box { padding: 24px 20px; }
    .blog-prev-next { grid-template-columns: 1fr; }
    .blog-tags-share { flex-direction: column; align-items: flex-start; }
}
    </style>
</head>
<body class="homepage4-body">

<?php include 'include/header.php'; ?>

<!-- ===== HERO / TOP ===== -->
<section class="blog-detail-hero">
    <div class="container">
        <nav class="breadcrumb-nav">
            <a href="<?php echo $base_url; ?>index.php">Home</a>
            <i class="fa-solid fa-chevron-right"></i>
            <a href="<?php echo $base_url; ?>blogs.php">Blogs</a>
            <i class="fa-solid fa-chevron-right"></i>
            <span><?php echo htmlspecialchars(mb_strimwidth($blog['title'], 0, 50, '...')); ?></span>
        </nav>
        <span class="hero-cat">
            <i class="fa-solid fa-tag"></i>
            <?php echo htmlspecialchars($blog['cat_name'] ?? 'General'); ?>
        </span>
        <h1><?php echo htmlspecialchars($blog['title']); ?></h1>
        <div class="blog-meta-strip">
            <div class="meta-item"><i class="fa-regular fa-calendar"></i> <?php echo date('d M Y', strtotime($blog['published_at'])); ?></div>
            <div class="meta-item"><i class="fa-regular fa-clock"></i> <?php echo $blog['reading_time']; ?> min read</div>
            <div class="meta-item"><i class="fa-regular fa-eye"></i> <?php echo number_format($blog['views']); ?> views</div>
            <div class="meta-item"><i class="fa-regular fa-comment"></i> <?php echo $blog['comments']; ?> comments</div>
        </div>
    </div>
</section>

<!-- ===== MAIN CONTENT ===== -->
<section class="blog-detail-area">
    <div class="container">
        <div class="row g-4">

            <!-- LEFT: Article -->
            <div class="col-lg-8">

                <!-- Featured Image -->
                <div class="blog-featured-img" data-aos="fade-up" data-aos-duration="700">
                    <img src="<?php echo $base_url . htmlspecialchars($blog['image']); ?>"
                         alt="<?php echo htmlspecialchars($blog['image_alt'] ?? $blog['title']); ?>"
                         onerror="this.src='<?php echo $base_url; ?>assets/img/blog/blog-01.jpg'">
                </div>

                <!-- Content -->
                <div class="blog-content-box" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                    <div class="blog-body">
                        <?php echo $blog['content']; ?>
                    </div>
                </div>

                <!-- Tags & Share -->
                <div class="blog-tags-share" data-aos="fade-up" data-aos-duration="700">
                    <?php if (!empty($tags_arr)): ?>
                    <div class="tags-row">
                        <span class="label"><i class="fa-solid fa-tags"></i> Tags:</span>
                        <?php foreach ($tags_arr as $tag): ?>
                        <a href="<?php echo $base_url; ?>blogs.php?search=<?php echo urlencode($tag); ?>" class="tag-chip">
                            <?php echo htmlspecialchars($tag); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <div class="share-row">
                        <span class="label">Share:</span>
                        <?php $share_url = urlencode($base_url . 'blog-details.php?slug=' . $blog['slug']); ?>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" class="share-btn fb"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo urlencode($blog['title']); ?>" target="_blank" class="share-btn tw"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $share_url; ?>" target="_blank" class="share-btn li"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://wa.me/?text=<?php echo urlencode($blog['title'] . ' ' . $base_url . 'blog-details.php?slug=' . $blog['slug']); ?>" target="_blank" class="share-btn wa"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Prev / Next -->
                <?php if ($prev_post || $next_post): ?>
                <div class="blog-prev-next" data-aos="fade-up" data-aos-duration="700">
                    <?php if ($prev_post): ?>
                    <a href="<?php echo $base_url; ?>blog-details.php?slug=<?php echo urlencode($prev_post['slug']); ?>" class="prev-next-card">
                        <span class="nav-label"><i class="fa-solid fa-arrow-left"></i> Previous Article</span>
                        <span class="nav-title"><?php echo htmlspecialchars($prev_post['title']); ?></span>
                    </a>
                    <?php else: ?>
                    <div></div>
                    <?php endif; ?>
                    <?php if ($next_post): ?>
                    <a href="<?php echo $base_url; ?>blog-details.php?slug=<?php echo urlencode($next_post['slug']); ?>" class="prev-next-card next-card">
                        <span class="nav-label">Next Article <i class="fa-solid fa-arrow-right"></i></span>
                        <span class="nav-title"><?php echo htmlspecialchars($next_post['title']); ?></span>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <!-- Related Posts -->
                <?php if (!empty($related_posts)): ?>
                <div class="related-section" data-aos="fade-up" data-aos-duration="700">
                    <div class="section-head">Related Articles</div>
                    <div class="row g-3">
                        <?php foreach ($related_posts as $rp): ?>
                        <div class="col-md-4">
                            <div class="related-card">
                                <div class="related-card-img">
                                    <img src="<?php echo $base_url . htmlspecialchars($rp['image']); ?>"
                                         alt="<?php echo htmlspecialchars($rp['title']); ?>"
                                         onerror="this.src='<?php echo $base_url; ?>assets/img/blog/blog-01.jpg'">
                                </div>
                                <div class="related-card-body">
                                    <span class="related-card-cat"><?php echo htmlspecialchars($rp['cat_name']); ?></span>
                                    <h5><a href="<?php echo $base_url; ?>blog-details.php?slug=<?php echo urlencode($rp['slug']); ?>"><?php echo htmlspecialchars($rp['title']); ?></a></h5>
                                    <p><?php echo htmlspecialchars($rp['excerpt']); ?></p>
                                </div>
                                <div class="related-card-footer">
                                    <span><i class="fa-regular fa-clock"></i> <?php echo $rp['reading_time']; ?> min</span>
                                    <a href="<?php echo $base_url; ?>blog-details.php?slug=<?php echo urlencode($rp['slug']); ?>">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

            </div>

            <!-- RIGHT: Sidebar -->
            <div class="col-lg-4">
                <div class="blog-sidebar">

                    <!-- Search -->
                    <div class="sidebar-widget">
                        <div class="sidebar-widget-title"><i class="fa-solid fa-magnifying-glass"></i> Search Articles</div>
                        <form method="GET" action="<?php echo $base_url; ?>blogs.php">
                            <div class="sidebar-search">
                                <input type="text" name="search" placeholder="Search articles...">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- Latest Posts -->
                    <?php if (!empty($latest_posts)): ?>
                    <div class="sidebar-widget">
                        <div class="sidebar-widget-title"><i class="fa-solid fa-fire"></i> Latest News</div>
                        <?php foreach ($latest_posts as $lp): ?>
                        <a href="<?php echo $base_url; ?>blog-details.php?slug=<?php echo urlencode($lp['slug']); ?>" class="latest-post-item">
                            <div class="latest-post-img">
                                <img src="<?php echo $base_url . htmlspecialchars($lp['image']); ?>"
                                     alt="<?php echo htmlspecialchars($lp['title']); ?>"
                                     onerror="this.src='<?php echo $base_url; ?>assets/img/blog/blog-01.jpg'">
                            </div>
                            <div class="latest-post-info">
                                <span><i class="fa-regular fa-calendar"></i> <?php echo date('d M Y', strtotime($lp['published_at'])); ?></span>
                                <h6><?php echo htmlspecialchars($lp['title']); ?></h6>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Categories -->
                    <?php if (!empty($all_categories)): ?>
                    <div class="sidebar-widget">
                        <div class="sidebar-widget-title"><i class="fa-solid fa-layer-group"></i> Categories</div>
                        <a href="<?php echo $base_url; ?>blogs.php" class="cat-list-item">
                            <span><i class="fa-solid fa-circle"></i> All Posts</span>
                        </a>
                        <?php foreach ($all_categories as $cat): ?>
                        <a href="<?php echo $base_url; ?>blogs.php?category=<?php echo $cat['id']; ?>" class="cat-list-item">
                            <span><i class="fa-solid fa-chevron-right"></i> <?php echo htmlspecialchars($cat['name']); ?></span>
                            <span class="count"><?php echo $cat['post_count']; ?></span>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Tags -->
                    <?php if (!empty($tags_arr)): ?>
                    <div class="sidebar-widget">
                        <div class="sidebar-widget-title"><i class="fa-solid fa-tags"></i> Tags</div>
                        <div class="tags-cloud">
                            <?php foreach ($tags_arr as $tag): ?>
                            <a href="<?php echo $base_url; ?>blogs.php?search=<?php echo urlencode($tag); ?>" class="tag-chip">
                                <?php echo htmlspecialchars($tag); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- CTA -->
                    <div class="sidebar-widget" style="background: linear-gradient(135deg, var(--blue) 0%, var(--blue-mid) 100%); border: none; text-align: center; padding: 30px 24px;">
                        <i class="fa-solid fa-phone-volume" style="font-size:32px; color: var(--yellow); margin-bottom:12px; display:block;"></i>
                        <h5 style="color:#fff; font-weight:800; font-size:18px; margin-bottom:8px;">Need Bulk Quote?</h5>
                        <p style="color:rgba(255,255,255,.75); font-size:13px; margin-bottom:16px;">Get competitive pricing for all commercial products.</p>
                        <a href="<?php echo $base_url; ?>contact-us.php" class="header-btn2-h4" style="width:100%; justify-content:center;">
                            Contact Us <span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
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
<script src="<?php echo $base_url; ?>assets/js/plugins/gsap.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/ScrollTrigger.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/Splitetext.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/sidebar.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/mobilemenu.js"></script>
<script src="<?php echo $base_url; ?>assets/js/plugins/gsap-animation.js"></script>
<script src="<?php echo $base_url; ?>assets/js/main.js"></script>
<script>
$(document).ready(function () {
    if (typeof AOS !== 'undefined') { AOS.init({ duration: 700, once: true }); }
});
</script>
</body>
</html>