<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Terms &amp; Conditions</h1>
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
                    <span class="bc-current-page">Terms &amp; Conditions</span>
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
                    <h2 class="about-section-heading">Terms &amp; Conditions of Service</h2>
                    
                    <div class="document-meta-badge">
                        <i class="bi bi-file-earmark-check"></i> Standard Relocation Agreement
                    </div>

                    <p class="about-lead-text">
                        Welcome to <strong><?= $company3 ?></strong>. These Terms &amp; Conditions govern all bookings, packing, loading, transport, and delivery operations handled by our company.
                    </p>

                    <!-- Section 1 -->
                    <div class="document-section">
                        <h3 class="document-section-title">
                            <i class="bi bi-calculator"></i> 1. Shifting Quotations &amp; Bookings
                        </h3>
                        <p class="about-body-text">
                            Quotes provided by <?= $company3 ?> are calculated strictly on the basis of the inventory details, destination coordinates, and site conditions supplied by the client:
                        </p>
                        <ul class="document-list">
                            <li>Any addition to the inventory list at the time of loading will incur extra charges.</li>
                            <li>Additional fees apply if access to lifts is restricted, stairs are above the 2nd floor, or if the carriage vehicle must park beyond a standard distance from the property entrance.</li>
                            <li>A booking confirmation deposit may be required to reserve your relocation slot.</li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="document-section">
                        <h3 class="document-section-title">
                            <i class="bi bi-exclamation-triangle"></i> 2. Excluded &amp; Dangerous Goods
                        </h3>
                        <p class="about-body-text">
                            For compliance and environmental safety, we strictly do not transport the following items under any circumstances:
                        </p>
                        <ul class="document-list">
                            <li>Explosives, gas cylinders, liquid fuels, chemicals, and matchboxes.</li>
                            <li>Perishable food items, plants, and organic materials (unless special transit is agreed upon).</li>
                            <li>Extremely valuable items such as gold, cash, jewelry, and crucial original legal or financial files. Clients are required to carry these items personally.</li>
                        </ul>
                    </div>

                    <!-- Section 3 -->
                    <div class="document-section">
                        <h3 class="document-section-title">
                            <i class="bi bi-credit-card"></i> 3. Payments &amp; Settlement
                        </h3>
                        <p class="about-body-text">
                            All bills and transport invoices must be cleared as per the payment schedule defined in the booking invoice:
                        </p>
                        <ul class="document-list">
                            <li>A portion of the shifting charge is payable as an advance, and the remaining balance must be cleared on the loading day or before unloading.</li>
                            <li>Payments can be made via authorized online bank transfers, credit/debit cards, UPI, or other options approved by our billing desk.</li>
                        </ul>
                    </div>

                    <!-- Section 4 -->
                    <div class="document-section">
                        <h3 class="document-section-title">
                            <i class="bi bi-shield-check"></i> 4. Transit Insurance &amp; Claims
                        </h3>
                        <p class="about-body-text">
                            While we use premium packing and experienced truck crews, transit insurance is essential for long-distance relocations:
                        </p>
                        <ul class="document-list">
                            <li>Transit insurance covers physical damage resulting from traffic accidents, fire, collisions, or natural forces.</li>
                            <li>In case of damage, claims must be logged within 24 hours of unloading. We assist clients with fast paperwork settlement.</li>
                        </ul>
                    </div>

                    <!-- Section 5 -->
                    <div class="document-section">
                        <h3 class="document-section-title">
                            <i class="bi bi-briefcase"></i> 5. Governing Law &amp; Disputes
                        </h3>
                        <p class="about-body-text">
                            This relocation agreement is governed by the laws of India. Any legal claims or disputes arising out of the shifting service shall fall under the exclusive jurisdiction of the local courts where our registered office is located.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'terms-and-conditions']); ?>
            </div>
        </div>
    </div>
</section>
