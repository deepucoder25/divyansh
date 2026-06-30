<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">About Us</h1>
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
                    <span class="bc-current-page">About Us</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="about-premium-card">
                    <h2 class="about-section-heading">India's Trusted Packers &amp; Movers</h2>
                    
                    <p class="about-lead-text">
                        Welcome to <strong><?= $company3 ?></strong>, your premium partner for secure, efficient, and seamless relocation services across India. 
                    </p>
                    
                    <div class="about-body-text">
                        <p>
                            Relocation is a significant step, and at <strong><?= $company3 ?></strong>, we ensure that your transition to a new home, office, or city is smooth and stress-free. Established with a vision to redefine the logistics and shifting sector, we have built an unmatched reputation based on integrity, safety, and client-centricity.
                        </p>
                        <p>
                            As a leading packing and shifting company, we leverage advanced packaging techniques, a highly trained expert logistics team, and a specialized fleet of closed container carriers. Whether you are moving household goods locally or transporting vehicles across states, our professional crew handles your belongings with maximum care.
                        </p>
                    </div>

                    <!-- Interactive Stats Counter Grid -->
                    <div class="about-stats-grid">
                        <div class="about-stat-box">
                            <span class="about-stat-number"><?= $yearsExperience?></span>
                            <span class="about-stat-label">Years Legacy</span>
                        </div>
                        <div class="about-stat-box">
                            <span class="about-stat-number"><?= $happyClients?></span>
                            <span class="about-stat-label">Happy Clients</span>
                        </div>
                        <div class="about-stat-box">
                            <span class="about-stat-number"><?= $secureShifting ?></span>
                            <span class="about-stat-label">Safe Shifting</span>
                        </div>
                        <div class="about-stat-box">
                            <span class="about-stat-number">24/7</span>
                            <span class="about-stat-label">Live Support</span>
                        </div>
                    </div>

                    <div class="about-body-text mt-4">
                        <p>
                            What truly sets us apart is our commitment to absolute pricing transparency. We provide complete, itemized cost breakdowns upfront, eliminating hidden surprises or last-minute hassles. Additionally, our IBA-approved billing systems enable effortless claim settlement for corporate and government employees.
                        </p>
                    </div>

                    <!-- Mission & Vision Cards -->
                    <div class="about-features-row">
                        <div class="about-feature-card">
                            <div class="about-feature-icon">
                                <i class="bi bi-compass"></i>
                            </div>
                            <h4 class="about-feature-title">Our Mission</h4>
                            <p class="about-body-text small mb-0">
                                To deliver exceptional packing and shifting solutions with complete safety, transparent pricing, and zero hassle.
                            </p>
                        </div>
                        <div class="about-feature-card">
                            <div class="about-feature-icon">
                                <i class="bi bi-eye"></i>
                            </div>
                            <h4 class="about-feature-title">Our Vision</h4>
                            <p class="about-body-text small mb-0">
                                To build the most reliable and tech-enabled logistics network in India, setting new benchmarks in client satisfaction.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'about-us']); ?>
            </div>
        </div>
    </div>
</section>
