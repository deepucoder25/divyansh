<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Our Branches</h1>
                <span class="bc-title-line"></span>
            </div>
        </div>
        
        <!-- Breadcrumb Ribbon -->
        <div class="bc-ribbon-wrap">
            <div class="bc-ribbon">
                <!-- Home Icon Red/Orange Block -->
                <div class="bc-home-block">
                    <a href="<?= site_url() ?>"><i class="bi bi-house-door-fill"></i></a>
                </div>
                <!-- Path links -->
                <div class="bc-links">
                    <a href="<?= site_url() ?>">Home</a>
                    <span class="bc-chevron"><i class="bi bi-chevron-right"></i></span>
                    <span class="bc-current-page">Our Branches</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$state = [
    [
        "image" => "maharashtra.jpg",
        "category" => "Maharashtra",
        "link" => "maharashtra"
    ],
    [
        "image" => "bangalore.jpg",
        "category" => "Bangalore",
        "link" => "bangalore"
    ],
    [
        "image" => "west-bengal.jpg",
        "category" => "West Bengal",
        "link" => "west-bengal"
    ],
    [
        "image" => "uttar-pradesh.jpg",
        "category" => "Uttar Pradesh",
        "link" => "uttar-pradesh"
    ],
];
?>

<!-- Branch Section -->
<section class="portfolio-area py-5 bg-light pm-states-section">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Our Presence Across <span class="pm-states-title-span">India</span>
            </h2>
            <p class="text-muted">
                Reliable packing and moving services available in major states.
            </p>
        </div>

        <div class="row g-4">

            <?php foreach ($state as $item): ?>
                
                <!-- 4 Columns in One Row on Desktop -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="pm-states-card-new">
                        <!-- Image Wrap -->
                        <div class="pm-states-img-wrap">
                            <!-- Badge -->
                            <div class="pm-states-badge">
                                <i class="bi bi-shield-fill-check me-1"></i> ISO Certified
                            </div>
                            
                            <img src="<?= base_url() ?>/assets/images/state/<?= $item['image'] ?>"
                                 alt="<?= htmlspecialchars($item['category']) ?> Packers and Movers Services by <?= $company3 ?>"
                                 loading="lazy">
                        </div>

                        <!-- Card Body -->
                        <div class="pm-states-body">
                            <div class="d-flex align-items-center gap-2">
                                <div class="pm-states-icon-circle">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <h5 class="mb-0">
                                    <a href="<?= site_url($item['link']) ?>" class="pm-states-title-link">
                                        <?= htmlspecialchars($item['category']) ?>
                                    </a>
                                </h5>
                            </div>
                            <a href="<?= site_url($item['link']) ?>" class="pm-states-btn-explore">
                                Explore Cities <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>
