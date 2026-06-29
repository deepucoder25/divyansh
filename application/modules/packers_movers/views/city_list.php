<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Packers and Movers in <?= $state ?></h1>
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
                    <a href="<?= site_url('our-branches') ?>">Our Branches</a>
                    <span class="bc-chevron"><i class="bi bi-chevron-right"></i></span>
                    <span class="bc-current-page"><?= $state ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pm-list-service-page">
    <div class="container pm-list-feature-section">
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct) :
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="pm-list-city-card-link d-block h-100 text-decoration-none">
                        <div class="pm-list-city-card-modern">
                            <div class="pm-list-icon-new">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="pm-list-text-new">
                                <span class="pm-city-subtitle">Packers & Movers</span>
                                <h5 class="pm-city-title"><?= htmlspecialchars($ct['nm']) ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
