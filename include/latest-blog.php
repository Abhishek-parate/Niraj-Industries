<?php
// ── Fetch Latest Blogs ──────────────────────────────────────────
$latestBlogs = [];
$lbRes = $conn->query("
    SELECT 
        b.id,
        b.title,
        b.slug,
        b.excerpt,
        b.image,
        b.published_at,
        b.views,
        b.reading_time,
        bc.name  AS category_name,
        bc.slug  AS category_slug
    FROM blogs b
    LEFT JOIN blog_categories bc ON b.categories = bc.id
    WHERE b.is_published = 1
    ORDER BY b.published_at DESC
    LIMIT 3
");
if ($lbRes) {
    while ($lb = $lbRes->fetch_assoc()) {
        $latestBlogs[] = $lb;
    }
}
?>

<?php if (!empty($latestBlogs)): ?>

<style>
/* ── LATEST BLOGS SECTION ──────────────────────────────────────── */
.ni-latest-blogs-section {
    padding: 80px 0 90px;
    background: #F8FAFC;
    font-family: 'Figtree', sans-serif;
}

/* Section Header */
.ni-lb-header {
    text-align: center;
    margin-bottom: 50px;
}
.ni-lb-header .sub-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 700;
    color: #B5100E;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-bottom: 14px;
}
.ni-lb-header .sub-label img {
    width: 18px;
    height: 18px;
    object-fit: contain;
}
.ni-lb-header h2 {
    font-family: 'Figtree', sans-serif;
    font-size: 38px;
    font-weight: 800;
    color: #0D1B2A;
    line-height: 1.2;
    margin: 0;
    letter-spacing: -0.5px;
}
.ni-lb-header h2 em {
    font-style: normal;
    color: #B5100E;
}
.ni-lb-header p {
    font-size: 15px;
    color: #475569;
    margin-top: 12px;
    max-width: 480px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.7;
}

/* Cards Grid */
.ni-lb-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-bottom: 50px;
}

/* Single Card */
.ni-lb-card {
    background: #fff;
    border-radius: 14px;
    border: 1px solid #E2E8F0;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
    box-shadow: 0 2px 16px rgba(181,16,14,0.06);
    text-decoration: none;
}
.ni-lb-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(181,16,14,0.13);
    border-color: #F5CECE;
}

/* Card Image */
.ni-lb-card-img {
    position: relative;
    overflow: hidden;
    height: 210px;
    width: 100%;
    flex-shrink: 0;
    background: #FDF0F0;
}
.ni-lb-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}
.ni-lb-card:hover .ni-lb-card-img img {
    transform: scale(1.06);
}
.ni-lb-card-img .no-img {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #FDF0F0 0%, #F5CECE 100%);
}
.ni-lb-card-img .no-img i {
    font-size: 42px;
    color: #E08080;
}

/* Category Tag */
.ni-lb-cat-tag {
    position: absolute;
    top: 13px;
    left: 13px;
    background: #B5100E;
    color: #fff;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 0.9px;
    text-transform: uppercase;
    padding: 4px 11px;
    border-radius: 20px;
    z-index: 2;
    font-family: 'Figtree', sans-serif;
}

/* Date Badge */
.ni-lb-date-badge {
    position: absolute;
    bottom: 13px;
    right: 13px;
    background: rgba(29,29,30,0.88);
    backdrop-filter: blur(6px);
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    padding: 5px 11px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    gap: 5px;
    font-family: 'Figtree', sans-serif;
}
.ni-lb-date-badge i {
    color: #B5100E;
    font-size: 10px;
}

/* Card Body */
.ni-lb-card-body {
    padding: 20px 22px 22px;
    display: flex;
    flex-direction: column;
    flex: 1;
}

/* Meta Row */
.ni-lb-meta {
    display: flex;
    align-items: center;
    gap: 14px;
    font-size: 11.5px;
    color: #94A3B8;
    margin-bottom: 10px;
    flex-wrap: wrap;
}
.ni-lb-meta span {
    display: flex;
    align-items: center;
    gap: 4px;
}
.ni-lb-meta i {
    color: #B5100E;
    font-size: 10px;
}

/* Title */
.ni-lb-card-body h3 {
    font-family: 'Figtree', sans-serif;
    font-size: 17px;
    font-weight: 700;
    color: #0D1B2A;
    line-height: 1.4;
    margin: 0 0 10px;
    letter-spacing: -0.1px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    transition: color 0.2s;
}
.ni-lb-card:hover .ni-lb-card-body h3 {
    color: #B5100E;
}

/* Excerpt */
.ni-lb-card-body p {
    font-size: 13px;
    color: #475569;
    line-height: 1.65;
    flex: 1;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    margin: 0;
}

/* Card Footer */
.ni-lb-card-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 14px;
    margin-top: 16px;
    border-top: 1px solid #E2E8F0;
}
.ni-lb-card-footer .read-time {
    font-size: 11.5px;
    color: #94A3B8;
    display: flex;
    align-items: center;
    gap: 5px;
}
.ni-lb-card-footer .read-time i {
    color: #B5100E;
}
.ni-lb-read-link {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 13px;
    font-weight: 700;
    color: #1D1D1E;
    text-decoration: none;
    transition: color 0.2s, gap 0.2s;
}
.ni-lb-read-link i {
    font-size: 10px;
    transition: transform 0.2s;
}
.ni-lb-card:hover .ni-lb-read-link {
    color: #B5100E;
}
.ni-lb-card:hover .ni-lb-read-link i {
    transform: translateX(4px);
}

/* View All Button */
.ni-lb-cta {
    text-align: center;
}
.ni-lb-cta a {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #B5100E;
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    font-family: 'Figtree', sans-serif;
    padding: 14px 36px;
    border-radius: 50px;
    text-decoration: none;
    border: 2px solid #B5100E;
    transition: all 0.28s ease;
}
.ni-lb-cta a:hover {
    background: transparent;
    color: #B5100E;
}
.ni-lb-cta a i {
    font-size: 12px;
    transition: transform 0.2s;
}
.ni-lb-cta a:hover i {
    transform: translateX(4px);
}

/* ── Responsive ─────────────────────────────────────────────────── */
@media (max-width: 991px) {
    .ni-lb-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
    }
    .ni-lb-header h2 {
        font-size: 30px;
    }
}
@media (max-width: 576px) {
    .ni-latest-blogs-section {
        padding: 55px 0 65px;
    }
    .ni-lb-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    .ni-lb-header h2 {
        font-size: 26px;
    }
    .ni-lb-card-img {
        height: 190px;
    }
}
</style>

<section class="ni-latest-blogs-section">
    <div class="container">

        <!-- Section Header -->
        <div class="ni-lb-header" data-aos="fade-up" data-aos-duration="700">
            <div class="sub-label">
                <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt="">
                Latest Blogs
            </div>
            <h2>Stay Updated With Our Latest <em>Insights</em></h2>
            <p>Expert tips, product guides, and industry news from our team.</p>
        </div>

        <!-- Cards Grid -->
        <div class="ni-lb-grid">
            <?php foreach ($latestBlogs as $i => $lb): ?>
            <?php
                $delay = $i * 100;
                $pubDate = !empty($lb['published_at']) ? strtotime($lb['published_at']) : null;
                $dateStr = $pubDate ? date('d M Y', $pubDate) : '';
                $readTime = !empty($lb['reading_time']) ? $lb['reading_time'] : 1;
                $blogUrl = $base_url . htmlspecialchars($lb['slug']);
            ?>
            <a href="<?php echo $blogUrl; ?>" class="ni-lb-card" data-aos="fade-up" data-aos-duration="700" data-aos-delay="<?php echo $delay; ?>">

                <!-- Image -->
                <div class="ni-lb-card-img">
                    <?php if (!empty($lb['category_name'])): ?>
                    <span class="ni-lb-cat-tag"><?php echo htmlspecialchars($lb['category_name']); ?></span>
                    <?php endif; ?>

                    <?php if (!empty($lb['image'])): ?>
                    <img src="<?php echo $base_url . htmlspecialchars($lb['image']); ?>"
                         alt="<?php echo htmlspecialchars($lb['title']); ?>"
                         onerror="this.parentElement.innerHTML='<div class=\'no-img\'><i class=\'fa-regular fa-newspaper\'></i></div>'">
                    <?php else: ?>
                    <div class="no-img">
                        <i class="fa-regular fa-newspaper"></i>
                    </div>
                    <?php endif; ?>

                    <?php if ($dateStr): ?>
                    <div class="ni-lb-date-badge">
                        <i class="fa-regular fa-calendar"></i>
                        <?php echo $dateStr; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Body -->
                <div class="ni-lb-card-body">
                    <div class="ni-lb-meta">
                        <span><i class="fa-regular fa-eye"></i><?php echo number_format($lb['views']); ?> views</span>
                        <span><i class="fa-regular fa-clock"></i><?php echo $readTime; ?> min read</span>
                    </div>

                    <h3><?php echo htmlspecialchars($lb['title']); ?></h3>

                    <?php if (!empty($lb['excerpt'])): ?>
                    <p><?php echo htmlspecialchars(mb_strimwidth($lb['excerpt'], 0, 110, '...')); ?></p>
                    <?php endif; ?>

                    <div class="ni-lb-card-footer">
                        <span class="read-time">
                            <i class="fa-regular fa-clock"></i> <?php echo $readTime; ?> min read
                        </span>
                        <span class="ni-lb-read-link">
                            Read More <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </div>
                </div>

            </a>
            <?php endforeach; ?>
        </div>

        <!-- View All CTA -->
        <div class="ni-lb-cta" data-aos="fade-up" data-aos-duration="700">
            <a href="<?php echo $base_url; ?>blogs">
                View All Blogs <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

<?php endif; ?>