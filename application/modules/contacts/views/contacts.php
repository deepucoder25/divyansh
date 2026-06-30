<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Contact Us</h1>
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
                    <span class="bc-current-page">Contact Us</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Premium Contact Section -->
<section class="contact-details-section py-5">
    <div class="container my-4">
        <div class="contact-card-wrap shadow-lg">
            <div class="row g-0">
                <!-- Left Column (Dark, City Skyline, Details) -->
                <div class="col-lg-5 col-12 position-relative overflow-hidden contact-left-column">
                    <!-- Background image overlay -->
                    <div class="contact-left-bg-image" style="background-image: url('<?= base_url('assets/images/home/about-showcase.jpg') ?>');"></div>
                    <div class="contact-left-bg-overlay"></div>
                    
                    <!-- Content -->
                    <div class="contact-left-inner">
                        <h2 class="contact-left-title">Get In Touch</h2>
                        <div class="contact-left-line"></div>
                        <p class="contact-left-desc">Have questions or need a custom quote? Reach out to us, and our team will get back to you as soon as possible.</p>
                        
                        <div class="contact-info-list">
                            <!-- Head Office -->
                            <div class="contact-info-item-custom">
                                <div class="icon-square-red">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="info-content-text">
                                    <h6>Head Office</h6>
                                    <p><?= htmlspecialchars($address) ?></p>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="contact-info-item-custom">
                                <div class="icon-square-red">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="info-content-text">
                                    <h6>Phone Numbers</h6>
                                    <p>
                                        <a href="<?= $phonehtml ?>" class="text-white text-decoration-none"><?= htmlspecialchars($phone) ?></a><br>
                                        <a href="<?= $phonehtml1 ?>" class="text-white text-decoration-none"><?= htmlspecialchars($phone1) ?></a>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="contact-info-item-custom">
                                <div class="icon-square-red">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <div class="info-content-text">
                                    <h6>Email Address</h6>
                                    <p><a href="<?= $mailhtml ?>" class="text-white text-decoration-none"><?= htmlspecialchars($mail) ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Curved Separator (Hidden on mobile) -->
                    <div class="contact-curve-overlay d-none d-lg-block">
                        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                            <!-- Curve white background overlay -->
                            <path d="M 100,0 C 50,30 20,60 70,80 L 100,100 Z" fill="var(--white)" />
                            <!-- Curve outline lines -->
                            <path d="M 100,0 C 50,30 20,60 70,80 L 100,100" fill="none" stroke="var(--accent-orange)" stroke-width="2.5" />
                            <path d="M 100,0 C 47,30 17,60 67,80 L 100,100" fill="none" stroke="var(--accent-orange)" stroke-opacity="0.15" stroke-width="6" />
                        </svg>
                    </div>
                </div>
                
                <!-- Right Column (White, Form) -->
                <div class="col-lg-7 col-12 bg-white contact-right-column">
                    <div class="contact-form-inner position-relative">
                        <!-- Dot Grid Decoration (Top right corner, subtle) -->
                        <div class="dot-grid-decor d-none d-sm-block"></div>
                        
                        <h2 class="contact-form-title">Send Us A Message</h2>
                        <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                            <div class="row g-4">
                                <div class="col-md-6 col-12">
                                    <label class="form-label-custom">Your Name *</label>
                                    <input type="text" name="name" class="form-input-custom" placeholder="John Doe">
                                </div>
                                <div class="col-md-6 col-12">
                                    <label class="form-label-custom">Phone Number *</label>
                                    <input type="tel" name="phone" class="form-input-custom" placeholder="Mobile Number">
                                </div>
                                <div class="col-12">
                                    <label class="form-label-custom">Email Address</label>
                                    <input type="email" name="email" class="form-input-custom" placeholder="hello@example.com">
                                </div>
                                <div class="col-12">
                                    <label class="form-label-custom">Your Message</label>
                                    <textarea name="message" class="form-input-custom" rows="5" placeholder="How can we help you?"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn-send-message">
                                        <i class="bi bi-send-fill me-2"></i> Send Message
                                    </button>
                                </div>
                            </div>
                            <div id="contactformresults" class="mt-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
