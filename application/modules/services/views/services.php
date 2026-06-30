<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Our Services</h1>
                <span class="bc-title-line"></span>
            </div>
        </div>
        
        <!-- Breadcrumb Ribbon -->
        <div class="bc-ribbon-wrap">
            <div class="bc-ribbon">
                <!-- Home Icon Block -->
                <div class="bc-home-block">
                    <a href="<?= site_url() ?>"><i class="bi bi-house-door-fill"></i></a>
                </div>
                <!-- Path links -->
                <div class="bc-links">
                    <a href="<?= site_url() ?>">Home</a>
                    <span class="bc-chevron"><i class="bi bi-chevron-right"></i></span>
                    <span class="bc-current-page">Our Services</span>
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
                <div class="service-main-content">
                    <h2 class="service-section-title">Comprehensive Relocation Solutions Across India</h2>
                    <p class="text-muted mb-4">
                        At <?= $company3 ?>, we understand that every relocation comes with unique requirements. That is why we provide a full range of packing, moving, storage, and vehicle transportation services tailored to fit your schedule and budget. Let our certified team handle all details of your transit.
                    </p>

                    <div class="services-grid-new">
                        <!-- Service 1: Home Shifting -->
                        <div class="service-card-new">
                            <div class="service-card-img-wrap">
                                <img loading="lazy" src="<?= base_url('assets/images/home_service/home-relocation.jpg') ?>" alt="Home Shifting and Household Relocation Services" class="img-fluid">
                            </div>
                            <div class="service-card-body-new">
                                <h3 class="service-card-title-new">Home Shifting</h3>
                                <p class="service-card-text-new">
                                    Safe, seamless, and completely hassle-free household shifting. We carefully pack, load, and transport your delicate goods and furniture to your new home.
                                </p>
                                <a href="<?= site_url('home-shifting') ?>" class="service-card-btn-new">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Service 2: Office Relocation -->
                        <div class="service-card-new">
                            <div class="service-card-img-wrap">
                                <img loading="lazy" src="<?= base_url('assets/images/home_service/office-relocation.jpg') ?>" alt="Corporate and Office Relocation Services" class="img-fluid">
                            </div>
                            <div class="service-card-body-new">
                                <h3 class="service-card-title-new">Office Relocation</h3>
                                <p class="service-card-text-new">
                                    Minimize business downtime with our precise office shifting services. We handle servers, paperwork, and heavy office items with utmost professionalism.
                                </p>
                                <a href="<?= site_url('office-relocation') ?>" class="service-card-btn-new">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Service 3: Car Transportation -->
                        <div class="service-card-new">
                            <div class="service-card-img-wrap">
                                <img loading="lazy" src="<?= base_url('assets/images/home_service/transport-service.jpg') ?>" alt="Safe Car Transportation and Carrier Services" class="img-fluid">
                            </div>
                            <div class="service-card-body-new">
                                <h3 class="service-card-title-new">Car Transportation</h3>
                                <p class="service-card-text-new">
                                    Secure vehicle transit via our specialized car carrier container trucks. We ensure scratch-free and timely door-to-door delivery.
                                </p>
                                <a href="<?= site_url('car-transportation') ?>" class="service-card-btn-new">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Service 4: Bike Transportation -->
                        <div class="service-card-new">
                            <div class="service-card-img-wrap">
                                <img loading="lazy" src="<?= base_url('assets/images/home_service/bike-transport.jpg') ?>" alt="Reliable Bike Transportation and Shifting Services" class="img-fluid">
                            </div>
                            <div class="service-card-body-new">
                                <h3 class="service-card-title-new">Bike Transportation</h3>
                                <p class="service-card-text-new">
                                    Scratch-free two-wheeler relocation. We pack bikes using specialized multiple-layer padding to ensure transit safety on long routes.
                                </p>
                                <a href="<?= site_url('bike-transportation') ?>" class="service-card-btn-new">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Service 5: Warehouse & Storage -->
                        <div class="service-card-new">
                            <div class="service-card-img-wrap">
                                <img loading="lazy" src="<?= base_url('assets/images/home_service/warehouse-and-storage.jpg') ?>" alt="Secure Warehousing and Storage Solutions" class="img-fluid">
                            </div>
                            <div class="service-card-body-new">
                                <h3 class="service-card-title-new">Warehouse &amp; Storage</h3>
                                <p class="service-card-text-new">
                                    Safe, climate-controlled, and 24/7 monitored warehouse spaces to store your personal household or commercial belongings securely.
                                </p>
                                <a href="<?= site_url('warehouse-and-storage') ?>" class="service-card-btn-new">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Service 6: Domestic Relocation -->
                        <div class="service-card-new">
                            <div class="service-card-img-wrap">
                                <img loading="lazy" src="<?= base_url('assets/images/home_service/transport-service.jpg') ?>" alt="Domestic Shifting and Interstate Moving Services" class="img-fluid">
                            </div>
                            <div class="service-card-body-new">
                                <h3 class="service-card-title-new">Domestic Relocation</h3>
                                <p class="service-card-text-new">
                                    Interstate and long-distance shifting services across all major cities of India, backed by container cargo logistics and transit tracking.
                                </p>
                                <a href="<?= site_url('domestic-relocation') ?>" class="service-card-btn-new">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Service 7: Packing & Moving -->
                        <div class="service-card-new">
                            <div class="service-card-img-wrap">
                                <img loading="lazy" src="<?= base_url('assets/images/home_service/packing_moving.jpg') ?>" alt="Professional Packing and Moving Services" class="img-fluid">
                            </div>
                            <div class="service-card-body-new">
                                <h3 class="service-card-title-new">Packing &amp; Moving</h3>
                                <p class="service-card-text-new">
                                    Premium quality multi-layered packing including bubble wraps, foam rolls, and heavy corrugated cartons to protect your fragile inventory.
                                </p>
                                <a href="<?= site_url('packing-and-moving') ?>" class="service-card-btn-new">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'our-services']); ?>
            </div>
        </div>
    </div>
</section>
