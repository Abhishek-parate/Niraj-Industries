<?php
$base_url = "http://localhost/nirajindustries/";
include 'include/config.php';

$page_title       = "Our Products | Niraj Industries — Commercial Products";
$meta_description = "Explore Niraj Industries' full range of high-quality commercial products. Trusted by businesses across India for over 20 years.";

// Fetch all active products
$products_result = $conn->query("SELECT * FROM products WHERE is_active = 1 ORDER BY sort_order ASC");
$all_products = [];
while ($row = $products_result->fetch_assoc()) {
    $all_products[] = $row;
}
$total_products = count($all_products);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <link rel="shortcut icon" href="<?php echo $base_url; ?>assets/img/logo/fav-logo4.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/aos.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/mobile.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/main.css">

    <script src="<?php echo $base_url; ?>assets/js/plugins/jquery-3-6-0.min.js"></script>

    <style>
body.filter-sticky #header {
    display: none !important;
}
    </style>
</head>
<body class="homepage4-body">


<?php include 'include/header.php'; ?>

<!-- ===== PAGE HERO ===== -->
<section class="products-hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <nav class="breadcrumb-nav" style="margin-top:40px;">
                    <a href="<?php echo $base_url; ?>index.php">Home</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <span>Our Products</span>
                </nav>
                <h1>Our <span>Product</span> Range</h1>
                <p class="hero-desc">Explore Niraj Industries' complete lineup of premium commercial products — engineered for performance, built to last.</p>
                <div class="hero-stats">
                    <div class="hero-stat-item">
                        <h3>120+</h3>
                        <p>Products</p>
                    </div>
                    <div class="hero-stat-item">
                        <h3>20+</h3>
                        <p>Years Experience</p>
                    </div>
                    <div class="hero-stat-item">
                        <h3>3500+</h3>
                        <p>Happy Clients</p>
                    </div>
                    <div class="hero-stat-item">
                        <h3>100%</h3>
                        <p>Quality Assured</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== TRUST STRIP ===== -->
<div class="trust-strip">
    <div class="container">
        <div class="trust-strip-inner">
            <div class="trust-item">
                <div class="trust-item-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <div class="trust-item-text"><h4>ISI Certified</h4><p>All products certified</p></div>
            </div>
            <div class="trust-divider"></div>
            <div class="trust-item">
                <div class="trust-item-icon"><i class="fa-solid fa-truck-fast"></i></div>
                <div class="trust-item-text"><h4>Pan India Delivery</h4><p>Fast & reliable shipping</p></div>
            </div>
            <div class="trust-divider"></div>
            <div class="trust-item">
                <div class="trust-item-icon"><i class="fa-solid fa-headset"></i></div>
                <div class="trust-item-text"><h4>24/7 Support</h4><p>Dedicated team always ready</p></div>
            </div>
            <div class="trust-divider"></div>
            <div class="trust-item">
                <div class="trust-item-icon"><i class="fa-solid fa-rotate-left"></i></div>
                <div class="trust-item-text"><h4>Easy Returns</h4><p>Hassle-free return policy</p></div>
            </div>
            <div class="trust-divider"></div>
            <div class="trust-item">
                <div class="trust-item-icon"><i class="fa-solid fa-handshake"></i></div>
                <div class="trust-item-text"><h4>Bulk Orders</h4><p>Special pricing available</p></div>
            </div>
        </div>
    </div>
</div>

<!-- ===== FILTER BAR ===== -->
<div class="products-filter-area">
    <div class="container">
        <div class="filter-inner">
            <div class="filter-tabs" id="filterTabs">
                <button class="filter-tab active" data-filter="all">All Products</button>
                <button class="filter-tab" data-filter="construction">Construction</button>
                <button class="filter-tab" data-filter="industrial">Industrial</button>
                <button class="filter-tab" data-filter="electrical">Electrical</button>
                <button class="filter-tab" data-filter="plumbing">Plumbing</button>
                <button class="filter-tab" data-filter="safety">Safety</button>
            </div>
            <div class="search-sort-area">
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="productSearch" placeholder="Search products...">
                </div>
                <select class="sort-select" id="sortSelect">
                    <option value="default">Sort By</option>
                    <option value="name-asc">Name A–Z</option>
                    <option value="name-desc">Name Z–A</option>
                </select>
               <span class="result-count" id="resultCount">
    <strong><?php echo $total_products; ?></strong> products
</span>
            </div>
        </div>
    </div>
</div>

<!-- ===== PRODUCTS SECTION ===== -->
<section class="products-section-area">
    <div class="container">

        <!-- Featured Banner -->
        <div class="featured-banner" data-aos="fade-up" data-aos-duration="800">
            <span class="featured-banner-tag">⭐ Featured Collection</span>
            <h2>Premium Grade <span>Construction</span><br>Materials — 2024</h2>
            <p>Industry-leading quality products trusted by contractors, builders, and architects across India.</p>
            <a href="<?php echo $base_url; ?>contact-us.php" class="header-btn2-h4">
                Get Bulk Quote <span><i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <img src="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img6.png" alt="Featured Product" class="featured-banner-img">
        </div>

        <!-- Section Heading -->
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="section-tag">
                    <img src="<?php echo $base_url; ?>assets/img/icons/sub-logo4.svg" alt=""> All Products
                </div>
                <h2 class="text-anime-style-3" style="font-size:32px; font-weight:800; color:#0d1b2a; margin-bottom:32px;">
                    Explore Our Complete Product Range
                </h2>
            </div>
        </div>

      <!-- Products Grid -->
<div class="row g-4" id="productsGrid">
    <?php foreach ($all_products as $product): 
        $badge_class = '';
        if ($product['badge_type'] === 'new')  $badge_class = 'badge-new';
        if ($product['badge_type'] === 'hot')  $badge_class = 'badge-hot';
        if ($product['badge_type'] === 'best') $badge_class = 'badge-best';
        if ($product['badge_type'] === 'sale') $badge_class = 'badge-sale';
        
        // Star rating generate
        $rating = floatval($product['rating']);
        $stars_html = '';
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= floor($rating)) {
                $stars_html .= '<i class="fa-solid fa-star"></i>';
            } elseif ($i - $rating < 1 && $i - $rating > 0) {
                $stars_html .= '<i class="fa-solid fa-star-half-stroke"></i>';
            } else {
                $stars_html .= '<i class="fa-regular fa-star"></i>';
            }
        }
    ?>
    <div class="col-xl-3 col-lg-4 col-md-6 product-item" 
         data-category="<?php echo htmlspecialchars($product['category']); ?>" 
         data-name="<?php echo htmlspecialchars(strtolower($product['name'])); ?>">
        <div class="product-card">
            <div class="product-card-img">
                <?php if ($product['badge']): ?>
                <span class="product-badge <?php echo $badge_class; ?>">
                    <?php echo htmlspecialchars($product['badge']); ?>
                </span>
                <?php endif; ?>
                <button class="product-wishlist"><i class="fa-regular fa-heart"></i></button>
                <img src="<?php echo $base_url . $product['image']; ?>" 
                     alt="<?php echo htmlspecialchars($product['name']); ?>"
                     onerror="this.src='<?php echo $base_url; ?>assets/img/all-images/service/service-img13.png'">
                <a href="<?php echo $base_url; ?>single-product.php?id=<?php echo $product['id']; ?>" 
                   class="product-quick-view">
                   <i class="fa-solid fa-eye"></i> Quick View
                </a>
            </div>
            <div class="product-card-body">
                <div class="product-category-tag">
                    <?php echo ucfirst(htmlspecialchars($product['category'])); ?>
                </div>
                <h3>
                    <a href="<?php echo $base_url; ?>single-product.php?id=<?php echo $product['id']; ?>">
                        <?php echo htmlspecialchars($product['name']); ?>
                    </a>
                </h3>
                <p><?php echo htmlspecialchars($product['description']); ?></p>
                <div class="product-rating">
                    <div class="stars"><?php echo $stars_html; ?></div>
                    <span>(<?php echo $product['reviews']; ?> reviews)</span>
                </div>
            </div>
            <div class="product-card-footer">
                <div class="product-moq">MOQ: <strong><?php echo htmlspecialchars($product['moq']); ?></strong></div>
                <a href="<?php echo $base_url; ?>single-product.php?id=<?php echo $product['id']; ?>" class="product-inquiry-btn">
                    Details <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

        <!-- No Results -->
        <div class="no-results" id="noResults">
            <i class="fa-solid fa-box-open"></i>
            <h4>No products found</h4>
            <p>Try adjusting your search or filter criteria.</p>
        </div>

    </div>
</section>

<!-- ===== CTA SECTION ===== -->
<section class="products-cta-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2>Need a <span>Custom Quote</span> for<br>Bulk Orders?</h2>
                <p>Get in touch with our sales team for competitive pricing, custom specifications, and pan-India delivery on all products.</p>
                <div class="cta-btn-group">
                    <a href="<?php echo $base_url; ?>contact-us.php" class="header-btn2-h4">
                        Get A Free Quote <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="tel:+919876543210" class="cta-btn-outline">
                        <i class="fa-solid fa-phone"></i> Call Us Now
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-end">
                <img src="<?php echo $base_url; ?>assets/img/all-images/hero/hero-img8.png" alt="Contact Niraj Industries" style="max-height:280px; opacity:.85;">
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>

<!--===== JS LINKS =======-->
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

    var $filterBar = $('.products-filter-area');
    var $placeholder = $('<div class="filter-bar-placeholder"></div>');
    $filterBar.after($placeholder);
    $placeholder.hide();

    $(window).on('scroll resize', function () {
        var headerH = $('#header').outerHeight() || 0;
        var scrollTop = $(this).scrollTop();
        var barTop = $placeholder.is(':visible')
                     ? $placeholder.offset().top
                     : $filterBar.offset().top;

        if (scrollTop >= barTop) {
            if (!$filterBar.hasClass('is-sticky')) {
                $placeholder.height($filterBar.outerHeight(true)).show();
                $filterBar.addClass('is-sticky');
                $filterBar.css('top', '0px');
                $('body').addClass('filter-sticky');
            }
        } else {
            $filterBar.removeClass('is-sticky');
            $filterBar.css('top', '');
            $placeholder.hide();
            $('body').removeClass('filter-sticky');
        }
    }); /* ← scroll function band */

    function filterAndSearch() {
        var activeFilter = $('#filterTabs .filter-tab.active').data('filter');
        var searchVal    = $('#productSearch').val().toLowerCase().trim();
        var sortVal      = $('#sortSelect').val();
        var visibleCount = 0;

        $('.product-item').each(function () {
            var category  = $(this).data('category');
            var name      = $(this).data('name').toLowerCase();
            var catMatch  = (activeFilter === 'all' || category === activeFilter);
            var srchMatch = (searchVal === '' || name.indexOf(searchVal) !== -1);
            if (catMatch && srchMatch) { $(this).fadeIn(200); visibleCount++; }
            else { $(this).fadeOut(150); }
        });

        if (sortVal === 'name-asc' || sortVal === 'name-desc') {
            var $grid  = $('#productsGrid');
            var $items = $grid.find('.product-item').toArray();
            $items.sort(function(a, b) {
                var nameA = $(a).data('name');
                var nameB = $(b).data('name');
                return sortVal === 'name-asc' ? nameA.localeCompare(nameB) : nameB.localeCompare(nameA);
            });
            $.each($items, function(i, item) { $grid.append(item); });
        }

        $('#resultCount').html('<strong>' + visibleCount + '</strong> product' + (visibleCount !== 1 ? 's' : ''));
        if (visibleCount === 0) { $('#noResults').fadeIn(200); }
        else { $('#noResults').fadeOut(150); }
    }

    $('#filterTabs .filter-tab').on('click', function () {
        $('#filterTabs .filter-tab').removeClass('active');
        $(this).addClass('active');
        filterAndSearch();
    });

    $('#productSearch').on('input', function () { filterAndSearch(); });
    $('#sortSelect').on('change', function () { filterAndSearch(); });

    $(document).on('click', '.product-wishlist', function (e) {
        e.preventDefault();
        var $icon = $(this).find('i');
        if ($icon.hasClass('fa-regular')) {
            $icon.removeClass('fa-regular').addClass('fa-solid');
            $(this).css({ 'background': '#FFC107' });
            $icon.css('color', '#0d1b2a');
        } else {
            $icon.removeClass('fa-solid').addClass('fa-regular');
            $(this).css({ 'background': 'rgba(255,255,255,0.92)' });
            $icon.css('color', '#64748b');
        }
    });

    if (typeof AOS !== 'undefined') { AOS.init({ duration: 800, once: true }); }
});
</script>
</body>
</html>