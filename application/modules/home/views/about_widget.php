<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

?>

<section class="about-section py-5">
    <div class="glow-bg-blob-1"></div>
    <div class="glow-bg-blob-2"></div>
    <div class="process-dot-pattern about-dot-pattern"></div>
    <div class="container position-relative about-z2">
        <div class="row align-items-center g-5">
            
            <!-- Left Side: Content & Features -->
            <div class="col-lg-6 col-12 order-2 order-lg-1">
                <div class="about-content">
                    <!-- Heading Area (reusing service section header classes) -->
                    <div class="mb-4 text-start">
                        <span class="section-subtitle">— ABOUT US —</span>
                        <h2 class="section-title">We Make Every Move Safe, Easy & Comfortable</h2>
                        <div class="header-divider" style="margin: 0 0 25px 0;"></div>
                    </div>

                    <!-- SEO-optimized Description -->
                    <p class="about-desc mb-3">
                        Welcome to <strong><?= isset($company3) ? htmlspecialchars($company3) : 'Divyansh Packers and Movers' ?></strong>, 
                        your premier destination for top-tier shifting and logistics services. We specialize in providing safe, 
                        dependable, and cost-effective relocation solutions tailored for household shifting, corporate office transfers, 
                        and secure vehicle transportation.
                    </p>
                    <p class="about-desc mb-4">
                        With a highly dedicated team of packing professionals, modern equipment, and a robust transit fleet, 
                        we ensure your precious belongings are packed securely, handled with care, and delivered strictly on time. 
                        Our primary goal is to turn a stressful relocation process into a completely smooth, pleasant, and seamless journey.
                    </p>

                    <!-- Simple Horizontal Features -->
                    <div class="about-simple-features mb-4">
                        <div class="simple-feature-item">
                            <i class="bi bi-check-circle-fill orange-check"></i>
                            <span>100% Safe Shifting</span>
                        </div>
                        <div class="simple-feature-item">
                            <i class="bi bi-check-circle-fill blue-check"></i>
                            <span>GPS Transit Fleet</span>
                        </div>
                        <div class="simple-feature-item">
                            <i class="bi bi-check-circle-fill orange-check"></i>
                            <span>Affordable Pricing</span>
                        </div>
                    </div>

                    <!-- Call To Action Actions Row -->
                    <div class="about-actions-row">
                        <a href="<?= site_url('about-us') ?>" class="btn btn-about-cta">
                            About Us <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="tel:+919876543210" class="btn btn-about-secondary">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Slanted Image Showcase -->
            <div class="col-lg-6 col-12 order-1 order-lg-2">
                <div class="about-image-showcase">
                    <div class="about-image-wrap">
                        <!-- Floating Circular Experience Badge -->
                        <div class="about-floating-badge">
                            <div class="badge-inner">
                                <span class="badge-num"><?= $yearsExperience?></span>
                                <span class="badge-lbl">Years Trust</span>
                            </div>
                        </div>

                        <img src="<?= base_url('assets/images/home/about-showcase.jpg') ?>" 
                             alt="Professional Packers and Movers Crew - <?= isset($company3) ? htmlspecialchars($company3) : 'Divyansh Packers and Movers' ?>" 
                             class="about-img" 
                             loading="lazy">

                        <!-- Floating Mission Box with Slanted Design -->
                        <div class="about-mission-box">
                            <div class="mission-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="mission-text">
                                <h4 class="mission-title">Our Mission</h4>
                                <p class="mission-desc">To provide reliable, efficient, and affordable moving services with utmost care and customer satisfaction.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
