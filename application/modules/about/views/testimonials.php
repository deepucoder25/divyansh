<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Client Testimonials</h1>
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
                    <span class="bc-current-page">Client Testimonials</span>
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
                    <h2 class="about-section-heading">What Our Customers Say</h2>
                    
                    <p class="about-lead-text">
                        Client satisfaction is our primary goal. Read real feedback and shifting reviews from our happy clients who have experienced relocation services with <?= $company3 ?>.
                    </p>

                    <!-- Testimonials Grid -->
                    <div class="row g-4 mt-2">
                        <!-- Testimonial 1 -->
                        <div class="col-md-6">
                            <div class="testimonial-premium-card">
                                <div class="testimonial-quote-icon">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <div class="testimonial-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="testimonial-text">
                                    "I shifted my entire 3 BHK household items from Delhi to Bangalore. The crew arrived on time and packed everything beautifully with bubble wrap. Not even a single glass item broke. Extremely professional!"
                                </p>
                                <div class="testimonial-author-wrap">
                                    <span class="testimonial-author-name">Ramanuj Sharma</span>
                                    <span class="testimonial-route-badge">Delhi to Bangalore</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="col-md-6">
                            <div class="testimonial-premium-card">
                                <div class="testimonial-quote-icon">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <div class="testimonial-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="testimonial-text">
                                    "We relocated our car and bike from Mumbai to Gurgaon. <?= $company3 ?> used an enclosed, covered car carrier. Both vehicles were delivered door-to-door without a single scratch. Excellent service!"
                                </p>
                                <div class="testimonial-author-wrap">
                                    <span class="testimonial-author-name">Priya Nair</span>
                                    <span class="testimonial-route-badge">Mumbai to Gurgaon</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="col-md-6">
                            <div class="testimonial-premium-card">
                                <div class="testimonial-quote-icon">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <div class="testimonial-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="testimonial-text">
                                    "We had to move our IT office branch with 45 workstations from Pune to Hyderabad. The execution was flawless. We resumed our operations on Monday morning without any delay."
                                </p>
                                <div class="testimonial-author-wrap">
                                    <span class="testimonial-author-name">Vikram Malhotra</span>
                                    <span class="testimonial-route-badge">Pune to Hyderabad</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="col-md-6">
                            <div class="testimonial-premium-card">
                                <div class="testimonial-quote-icon">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <div class="testimonial-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="testimonial-text">
                                    "Shifted our household goods within Kolkata locally. The entire packaging, transport, and unpacking was completed in just under 6 hours. Highly recommended for local shifting."
                                </p>
                                <div class="testimonial-author-wrap">
                                    <span class="testimonial-author-name">Amitava Bose</span>
                                    <span class="testimonial-route-badge">Local Kolkata</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quality commitment CTA Box -->
                    <div class="testimonial-write-box">
                        <h4 class="fw-bold mb-2">Leave Us Your Review</h4>
                        <p class="small opacity-75 mb-4">
                            Relocated with us recently? Share your experience and feedback to help others choose the right shifting partner.
                        </p>
                        <a href="<?= site_url('reviews') ?>" class="testimonial-write-btn">
                            <i class="bi bi-pencil-square"></i> Write a Customer Review
                        </a>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'testimonials']); ?>
            </div>
        </div>
    </div>
</section>
