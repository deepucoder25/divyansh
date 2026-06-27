<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$services = [
    [
        'title' => 'Home Relocation',
        'slug' => 'home-shifting',
        'image' => 'home-relocation.jpg',
        'desc' => 'Safe and hassle-free shifting of your household items with utmost care and timely delivery.',
        'icon' => 'bi bi-house-door-fill'
    ],
    [
        'title' => 'Office Relocation',
        'slug' => 'office-relocation',
        'image' => 'office-relocation.jpg',
        'desc' => 'Efficient office shifting services to ensure minimal downtime and a smooth transition.',
        'icon' => 'bi bi-building'
    ],
    [
        'title' => 'Packing & Moving',
        'slug' => 'home-shifting', 
        'image' => 'packing_moving.jpg', 
        'desc' => 'High-quality packing materials and expert handling to ensure complete safety of your belongings.',
        'icon' => 'bi bi-box-seam'
    ],
    [
        'title' => 'Transportation',
        'slug' => 'domestic-relocation',
        'image' => 'transport-service.jpg',
        'desc' => 'Well-maintained vehicles and timely delivery services across local and long-distance locations.',
        'icon' => 'bi bi-truck'
    ],
    [
        'title' => 'Warehousing & Storage',
        'slug' => 'warehouse-and-storage',
        'image' => 'warehouse-and-storage.jpg',
        'desc' => 'Secure and spacious storage solutions for short-term and long-term needs with 24/7 security.',
        'icon' => 'bi bi-boxes'
    ],
    [
        'title' => 'Bike Transportation',
        'slug' => 'bike-transportation',
        'image' => 'bike-transport.jpg',
        'desc' => 'Safe and secure bike carrier services to relocate two-wheelers to any destination in India.',
        'icon' => 'bi bi-motorcycle'
    ]
];
?>

<section class="services-section py-5">
    <div class="glow-bg-blob-1"></div>
    <div class="glow-bg-blob-2"></div>
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="section-subtitle">— OUR SERVICES —</span>
            <h2 class="section-title">Reliable Moving Solutions for Every Need</h2>
            <p class="section-desc">At <?= htmlspecialchars($company3) ?>, we provide comprehensive moving services tailored to meet your unique requirements with safety, care and professionalism.</p>
            <div class="header-divider"></div>
        </div>

        <!-- Grid of Services -->
        <div class="row g-4 justify-content-center services-grid-row">
            <?php foreach ($services as $service): ?>
                <div class="col-lg-4 col-md-6 col-6 d-flex">
                    <div class="service-card w-100">
                        <!-- Top Image -->
                        <div class="service-card-image-wrap">
                            <img src="<?= base_url('assets/images/home_service/' . $service['image']) ?>" alt="<?= htmlspecialchars($service['title']) ?> Packers and Movers" class="service-card-img" loading="lazy">
                        </div>
                        <!-- Overlapping Circle Icon -->
                        <div class="service-icon-circle-overlap">
                            <i class="<?= $service['icon'] ?>"></i>
                        </div>
                        <!-- Bottom Body Content -->
                        <div class="service-card-body">
                            <h3 class="service-card-title"><?= htmlspecialchars($service['title']) ?></h3>
                            <div class="service-title-line-center"></div>
                            <p class="service-card-desc"><?= htmlspecialchars($service['desc']) ?></p>
                            <a href="<?= site_url($service['slug']) ?>" class="service-know-more-btn-center">
                                <span>Know More</span> <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom Info Bar -->
        <div class="services-info-bar mt-5">
            <div class="info-bar-inner">
                <!-- Help Item -->
                <div class="info-item">
                    <div class="info-icon-circle orange">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="info-text-wrap">
                        <span class="info-title">Need Help?</span>
                        <span class="info-title muted">We're here to assist you!</span>
                    </div>
                </div>

                <div class="info-divider d-none d-lg-block"></div>

                <!-- Call Item -->
                <div class="info-item">
                    <div class="info-icon-circle blue">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="info-text-wrap">
                        <span class="info-title muted">Call Us Now</span>
                        <span class="info-value orange">
                            <a href="<?= $phonehtml ?>"><?= htmlspecialchars($phone) ?></a>
                        </span>
                    </div>
                </div>

                <div class="info-divider d-none d-lg-block"></div>

                <!-- Timings Item -->
                <div class="info-item">
                    <div class="info-icon-circle blue">
                        <i class="bi bi-clock-fill"></i>
                    </div>
                    <div class="info-text-wrap">
                        <span class="info-title">Mon - Sun</span>
                        <span class="info-value orange">24/7 Service</span>
                    </div>
                </div>

                <div class="info-divider d-none d-lg-block"></div>

                <!-- Action Button -->
                <a href="javascript:void(0)" class="btn-quote-pill-large" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <span>Get a Free Quote</span>
                    <span class="btn-quote-circle-icon"><i class="bi bi-arrow-right-short"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>
