<?php
header("Content-Type: application/xml; charset=utf-8");
require_once 'include/config.php';

$base_url     = defined('SITE_URL') ? rtrim(SITE_URL, '/') : "http://localhost/nirajindustries";
$current_date = date('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// ─── 1. STATIC PAGES ─────────────────────────────────────────
$static_pages = [
    ''                      => '1.0',   // Homepage
    '/about-us'             => '0.8',
    '/products'             => '0.9',
    '/blogs'                => '0.8',
    '/contact-us'           => '0.7',
    '/terms-conditions'     => '0.4',
    '/privacy-policy'       => '0.4',
    '/cancellation-policy'  => '0.4',
];

foreach ($static_pages as $page => $priority) {
    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($base_url . $page) . "</loc>\n";
    echo "    <lastmod>" . $current_date . "</lastmod>\n";
    echo "    <changefreq>" . ($priority >= '0.7' ? 'weekly' : 'yearly') . "</changefreq>\n";
    echo "    <priority>" . $priority . "</priority>\n";
    echo "  </url>\n";
}

// ─── 2. PRODUCTS ─────────────────────────────────────────────
$prod_res = $conn->query(
    "SELECT slug, updated_at FROM products 
     WHERE is_active = 1 AND slug IS NOT NULL AND slug != '' 
     ORDER BY sort_order ASC"
);

if ($prod_res && $prod_res->num_rows > 0) {
    while ($row = $prod_res->fetch_assoc()) {
        $prod_date = !empty($row['updated_at']) 
                     ? date('Y-m-d', strtotime($row['updated_at'])) 
                     : $current_date;
        echo "  <url>\n";
        echo "    <loc>" . htmlspecialchars($base_url . '/products/' . $row['slug']) . "</loc>\n";
        echo "    <lastmod>" . $prod_date . "</lastmod>\n";
        echo "    <changefreq>monthly</changefreq>\n";
        echo "    <priority>0.9</priority>\n";
        echo "  </url>\n";
    }
}

// ─── 3. BLOGS ────────────────────────────────────────────────
$blog_res = $conn->query(
    "SELECT slug, published_at FROM blogs 
     WHERE is_published = 1 AND slug IS NOT NULL AND slug != '' 
     ORDER BY published_at DESC"
);

if ($blog_res && $blog_res->num_rows > 0) {
    while ($row = $blog_res->fetch_assoc()) {
        $blog_date = !empty($row['published_at']) 
                     ? date('Y-m-d', strtotime($row['published_at'])) 
                     : $current_date;
        echo "  <url>\n";
        echo "    <loc>" . htmlspecialchars($base_url . '/' . $row['slug']) . "</loc>\n";
        echo "    <lastmod>" . $blog_date . "</lastmod>\n";
        echo "    <changefreq>monthly</changefreq>\n";
        echo "    <priority>0.7</priority>\n";
        echo "  </url>\n";
    }
}

echo '</urlset>';
$conn->close();
?>