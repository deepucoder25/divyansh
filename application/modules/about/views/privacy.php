<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Privacy Policy</h1>
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
                    <span class="bc-current-page">Privacy Policy</span>
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
                    <h2 class="about-section-heading">Data Protection &amp; Privacy Policy</h2>
                    
                    <div class="document-meta-badge">
                        <i class="bi bi-calendar-event"></i> Last Updated: June 2026
                    </div>

                    <p class="about-lead-text">
                        We value your trust and are committed to protecting your personal information. This policy explains how we collect, store, and process your data during your relocation.
                    </p>

                    <!-- Section 1 -->
                    <div class="document-section">
                        <h3 class="document-section-title">
                            <i class="bi bi-folder2-open"></i> 1. Information We Collect
                        </h3>
                        <p class="about-body-text">
                            When you request a quote, book a shifting service, or communicate with our team, we collect the necessary personal and business details to process your relocation order:
                        </p>
                        <ul class="document-list">
                            <li><strong>Contact Details:</strong> Your name, phone numbers, and email address.</li>
                            <li><strong>Relocation Details:</strong> Shifting origin address, destination address, and floor details.</li>
                            <li><strong>Inventory Details:</strong> List of items, furniture, home appliances, and vehicle details to be transported.</li>
                            <li><strong>Billing Information:</strong> Payment transactions, invoice details, and bank account numbers for corporate claims.</li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="document-section">
                        <h3 class="document-section-title">
                            <i class="bi bi-shield-check"></i> 2. How We Use Your Data
                        </h3>
                        <p class="about-body-text">
                            We use the collected information solely to perform and coordinate relocation and transportation tasks:
                        </p>
                        <ul class="document-list">
                            <li>To calculate and provide precise, customized shifting quotes.</li>
                            <li>To organize packaging, loading, cargo transport, and unpacking logistics.</li>
                            <li>To send shipment updates, consignment notes, and tracking information.</li>
                            <li>To process payments, issue official receipts, and assist in corporate tax invoices.</li>
                            <li>To handle transit insurance claims in the event of unexpected travel mishaps.</li>
                        </ul>
                    </div>

                    <!-- Section 3 -->
                    <div class="document-section">
                        <h3 class="document-section-title">
                            <i class="bi bi-lock"></i> 3. Security &amp; Data Protection
                        </h3>
                        <p class="about-body-text">
                            We implement security measures to guard your information against unauthorized access, loss, or leakage. However, please note that no system of digital storage or web communication is 100% secure, and we cannot guarantee complete absolute security.
                        </p>
                    </div>

                    <!-- Section 4 -->
                    <div class="document-section">
                        <h3 class="document-section-title">
                            <i class="bi bi-people"></i> 4. Sharing with Third Parties
                        </h3>
                        <p class="about-body-text">
                            We do not sell, rent, or trade your personal information. We only share details with trusted logistics coordinators, transport sub-contractors, or insurance firms to the extent necessary to perform your shifting job or resolve insurance claims.
                        </p>
                    </div>

                    <!-- Section 5 -->
                    <div class="document-section">
                        <h3 class="document-section-title">
                            <i class="bi bi-envelope"></i> 5. Contact Our Privacy Officer
                        </h3>
                        <p class="about-body-text">
                            If you have questions regarding this Privacy Policy or wish to modify any of your records, please contact our helpline:
                        </p>
                        <p class="about-body-text mb-0">
                            <strong><?= $company3 ?></strong><br>
                            Address: <?= $address ?><br>
                            Email: <a href="<?= $mailhtml ?>" class="text-decoration-none fw-bold text-dark"><?= $mail ?></a><br>
                            Phone: <a href="<?= $phonehtml ?>" class="text-decoration-none fw-bold text-dark"><?= $phone ?></a> / <a href="<?= $phonehtml1 ?>" class="text-decoration-none fw-bold text-dark"><?= $phone1 ?></a>
                        </p>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'privacy-policy']); ?>
            </div>
        </div>
    </div>
</section>
