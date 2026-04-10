<?php
require_once 'include/config.php';

$base_url     = defined('SITE_URL') ? rtrim(SITE_URL, '/') : "http://localhost/nirajindustries";
$current_date = date('Y-m-d');

$xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// ─── 1. STATIC PAGES ─────────────────────────────────────────
$static_pages = [
    ''                     => '1.0',
    '/about-us'            => '0.8',
    '/products'            => '0.9',
    '/blogs'               => '0.8',
    '/contact-us'          => '0.7',
    '/terms-conditions'    => '0.4',
    '/privacy-policy'      => '0.4',
    '/cancellation-policy' => '0.4',
];

foreach ($static_pages as $page => $priority) {
    $changefreq = $priority >= '0.7' ? 'weekly' : 'yearly';
    $xml .= "  <url>\n";
    $xml .= "    <loc>" . htmlspecialchars($base_url . $page) . "</loc>\n";
    $xml .= "    <lastmod>" . $current_date . "</lastmod>\n";
    $xml .= "    <changefreq>" . $changefreq . "</changefreq>\n";
    $xml .= "    <priority>" . $priority . "</priority>\n";
    $xml .= "  </url>\n";
}

// ─── 2. PRODUCTS ─────────────────────────────────────────────
$prod_res = $conn->query(
    "SELECT slug, updated_at FROM products 
     WHERE is_active = 1 AND slug IS NOT NULL AND slug != '' 
     ORDER BY sort_order ASC"
);

$prod_count = 0;
if ($prod_res && $prod_res->num_rows > 0) {
    while ($row = $prod_res->fetch_assoc()) {
        $prod_date = !empty($row['updated_at'])
                     ? date('Y-m-d', strtotime($row['updated_at']))
                     : $current_date;
        $xml .= "  <url>\n";
        $xml .= "    <loc>" . htmlspecialchars($base_url . '/products/' . $row['slug']) . "</loc>\n";
        $xml .= "    <lastmod>" . $prod_date . "</lastmod>\n";
        $xml .= "    <changefreq>monthly</changefreq>\n";
        $xml .= "    <priority>0.9</priority>\n";
        $xml .= "  </url>\n";
        $prod_count++;
    }
}

// ─── 3. BLOGS ────────────────────────────────────────────────
$blog_res = $conn->query(
    "SELECT slug, published_at FROM blogs 
     WHERE is_published = 1 AND slug IS NOT NULL AND slug != '' 
     ORDER BY published_at DESC"
);

$blog_count = 0;
if ($blog_res && $blog_res->num_rows > 0) {
    while ($row = $blog_res->fetch_assoc()) {
        $blog_date = !empty($row['published_at'])
                     ? date('Y-m-d', strtotime($row['published_at']))
                     : $current_date;
        $xml .= "  <url>\n";
        $xml .= "    <loc>" . htmlspecialchars($base_url . '/' . $row['slug']) . "</loc>\n";
        $xml .= "    <lastmod>" . $blog_date . "</lastmod>\n";
        $xml .= "    <changefreq>monthly</changefreq>\n";
        $xml .= "    <priority>0.7</priority>\n";
        $xml .= "  </url>\n";
        $blog_count++;
    }
}

$xml .= '</urlset>';

// ─── GENERATE FILE ────────────────────────────────────────────
$file_path  = __DIR__ . '/sitemap.xml';
$total_urls = count($static_pages) + $prod_count + $blog_count;

if (file_put_contents($file_path, $xml)) {
    echo "
    <div style='font-family:sans-serif; padding:40px; max-width:650px; margin:60px auto;'>
        <div style='background:#f0fdf4; color:#166534; border:1px solid #bbf7d0; border-radius:12px; padding:30px; text-align:center;'>
            <h2 style='margin-top:0; font-size:24px;'>✅ Sitemap Generated!</h2>
            <p style='margin:8px 0;'>Your <strong>sitemap.xml</strong> has been created successfully.</p>
            <hr style='border:none; border-top:1px solid #bbf7d0; margin:20px 0;'>
            <table style='width:100%; text-align:left; font-size:14px; border-collapse:collapse;'>
                <tr style='border-bottom:1px solid #bbf7d0;'>
                    <td style='padding:8px 0; color:#166534;'>📄 Static Pages</td>
                    <td style='padding:8px 0; font-weight:bold; text-align:right;'>" . count($static_pages) . "</td>
                </tr>
                <tr style='border-bottom:1px solid #bbf7d0;'>
                    <td style='padding:8px 0; color:#166534;'>📦 Products</td>
                    <td style='padding:8px 0; font-weight:bold; text-align:right;'>{$prod_count}</td>
                </tr>
                <tr style='border-bottom:1px solid #bbf7d0;'>
                    <td style='padding:8px 0; color:#166534;'>📝 Blogs</td>
                    <td style='padding:8px 0; font-weight:bold; text-align:right;'>{$blog_count}</td>
                </tr>
                <tr>
                    <td style='padding:8px 0; font-weight:bold; color:#166534;'>🔗 Total URLs</td>
                    <td style='padding:8px 0; font-weight:bold; text-align:right;'>{$total_urls}</td>
                </tr>
            </table>
            <div style='margin-top:24px; display:flex; gap:12px; justify-content:center; flex-wrap:wrap;'>
                <a href='sitemap.xml' target='_blank' 
                   style='padding:10px 24px; background:#16a34a; color:#fff; text-decoration:none; border-radius:6px; font-weight:bold;'>
                   🔍 View Sitemap
                </a>
                <a href='generate-sitemap.php' 
                   style='padding:10px 24px; background:#0B3D6E; color:#fff; text-decoration:none; border-radius:6px; font-weight:bold;'>
                   🔄 Regenerate
                </a>
            </div>
        </div>
    </div>";
} else {
    echo "
    <div style='font-family:sans-serif; padding:40px; max-width:650px; margin:60px auto;'>
        <div style='background:#fef2f2; color:#991b1b; border:1px solid #fecaca; border-radius:12px; padding:30px; text-align:center;'>
            <h2 style='margin-top:0;'>❌ Error!</h2>
            <p>Could not write <code>sitemap.xml</code>.</p>
            <p style='font-size:13px;'>Check folder permissions — PHP needs write access to root directory.</p>
        </div>
    </div>";
}

$conn->close();
?>