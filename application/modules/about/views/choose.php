<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Why Choose Us</h1>
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
                    <span class="bc-current-page">Why Choose Us</span>
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
                    <h2 class="about-section-heading">Why Shift With <?= $company3 ?>?</h2>
                    
                    <p class="about-lead-text">
                        With hundreds of packers and movers in India, finding a trustworthy relocation partner can be challenging. Here is why thousands of families and corporates trust us with their valuable possessions.
                    </p>
                    
                    <div class="about-body-text mb-5">
                        <p>
                            Relocation is not simply about moving cartons; it is about transitioning your life, your memories, and your hard-earned assets. At <strong><?= $company3 ?></strong>, we treat your goods with the highest level of care and professionalism. From start to finish, we manage every detail of the move, ensuring a seamless experience.
                        </p>
                    </div>

                    <!-- Pillars of Trust Grid -->
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="choose-pillar-card">
                                <div class="choose-pillar-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h4 class="choose-pillar-title">100% Insured Safety</h4>
                                <p class="about-body-text small mb-0">
                                    We use premium multi-layered packing including bubble wraps, heavy-duty cartons, and thermocol sheets to protect your goods. Full transit insurance is available to secure your items.
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="choose-pillar-card">
                                <div class="choose-pillar-icon">
                                    <i class="bi bi-truck-flatbed"></i>
                                </div>
                                <h4 class="choose-pillar-title">Dedicated Covered Fleets</h4>
                                <p class="about-body-text small mb-0">
                                    Your household goods, cars, and bikes are transported using customized covered container carriers, protecting them from bad weather, road debris, and dust.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="choose-pillar-card">
                                <div class="choose-pillar-icon">
                                    <i class="bi bi-receipt"></i>
                                </div>
                                <h4 class="choose-pillar-title">Transparent Price Breakups</h4>
                                <p class="about-body-text small mb-0">
                                    Say goodbye to hidden costs. We provide a detailed, itemized quote upfront so you know exactly what you are paying for, eliminating any post-move surprises.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="choose-pillar-card">
                                <div class="choose-pillar-icon">
                                    <i class="bi bi-alarm"></i>
                                </div>
                                <h4 class="choose-pillar-title">On-Time Shifting Guarantee</h4>
                                <p class="about-body-text small mb-0">
                                    We understand the importance of your time. Our advanced route mapping and logistics team guarantee that your belongings reach their destination on schedule.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="about-body-text mt-5">
                        <h3 class="fw-bold text-dark mb-3">Industry Certifications &amp; Approvals</h3>
                        <p>
                            We are not just a local moving agency; we are a registered, verified, and certified packing company committed to quality and global standards:
                        </p>
                        <ul class="document-list">
                            <li><strong>ISO Certified Relocation Processes:</strong> Our management systems follow international standards for quality service.</li>
                            <li><strong>IBA Approved Billing:</strong> Offers authorized bills and consignment papers for simple corporate and government relocation claims.</li>
                            <li><strong>Verified &amp; Insured Shifting:</strong> Fully licensed operations with comprehensive transport transit insurance policies for peaceful moves.</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'why-choose-us']); ?>
            </div>
        </div>
    </div>
</section>
